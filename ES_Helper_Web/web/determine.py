import sys
import base64
import re
from konlpy.tag import Kkma
okt = Kkma()


kor_begin = 44032
kor_end = 55203
chosung_base = 588
jungsung_base = 28
jaum_begin = 12593
jaum_end = 12622
moum_begin = 12623
moum_end = 12643

chosung_list = [ 'ㄱ', 'ㄲ', 'ㄴ', 'ㄷ', 'ㄸ', 'ㄹ', 'ㅁ', 'ㅂ', 'ㅃ', 
        'ㅅ', 'ㅆ', 'ㅇ' , 'ㅈ', 'ㅉ', 'ㅊ', 'ㅋ', 'ㅌ', 'ㅍ', 'ㅎ']

jungsung_list = ['ㅏ', 'ㅐ', 'ㅑ', 'ㅒ', 'ㅓ', 'ㅔ', 
        'ㅕ', 'ㅖ', 'ㅗ', 'ㅘ', 'ㅙ', 'ㅚ', 
        'ㅛ', 'ㅜ', 'ㅝ', 'ㅞ', 'ㅟ', 'ㅠ', 
        'ㅡ', 'ㅢ', 'ㅣ']

jongsung_list = [
    ' ', 'ㄱ', 'ㄲ', 'ㄳ', 'ㄴ', 'ㄵ', 'ㄶ', 'ㄷ',
        'ㄹ', 'ㄺ', 'ㄻ', 'ㄼ', 'ㄽ', 'ㄾ', 'ㄿ', 'ㅀ', 
        'ㅁ', 'ㅂ', 'ㅄ', 'ㅅ', 'ㅆ', 'ㅇ', 'ㅈ', 'ㅊ', 
        'ㅋ', 'ㅌ', 'ㅍ', 'ㅎ']

jaum_list = ['ㄱ', 'ㄲ', 'ㄳ', 'ㄴ', 'ㄵ', 'ㄶ', 'ㄷ', 'ㄸ', 'ㄹ', 
              'ㄺ', 'ㄻ', 'ㄼ', 'ㄽ', 'ㄾ', 'ㄿ', 'ㅀ', 'ㅁ', 'ㅂ', 
              'ㅃ', 'ㅄ', 'ㅅ', 'ㅆ', 'ㅇ', 'ㅈ', 'ㅉ', 'ㅊ', 'ㅋ', 'ㅌ', 'ㅍ', 'ㅎ']

moum_list = ['ㅏ', 'ㅐ', 'ㅑ', 'ㅒ', 'ㅓ', 'ㅔ', 'ㅕ', 'ㅖ', 'ㅗ', 'ㅘ', 
              'ㅙ', 'ㅚ', 'ㅛ', 'ㅜ', 'ㅝ', 'ㅞ', 'ㅟ', 'ㅠ', 'ㅡ', 'ㅢ', 'ㅣ']


def compose(chosung, jungsung, jongsung):
    char = chr(
        kor_begin +
        chosung_base * chosung_list.index(chosung) +
        jungsung_base * jungsung_list.index(jungsung) +
        jongsung_list.index(jongsung)
    )
    return char

def decompose(c):
    if not character_is_korean(c):
        return None
    i = ord(c)
    if (jaum_begin <= i <= jaum_end):
        return (c, ' ', ' ')
    if (moum_begin <= i <= moum_end):
        return (' ', c, ' ')

    # decomposition rule
    i -= kor_begin
    cho  = i // chosung_base
    jung = ( i - cho * chosung_base ) // jungsung_base 
    jong = ( i - cho * chosung_base - jung * jungsung_base )    
    return (chosung_list[cho], jungsung_list[jung], jongsung_list[jong])

def character_is_korean(c):
    i = ord(c)
    return ((kor_begin <= i <= kor_end) or
            (jaum_begin <= i <= jaum_end) or
            (moum_begin <= i <= moum_end))

def jamo_levenshtein(s1, s2, debug=False):
    if len(s1) < len(s2):
        return jamo_levenshtein(s2, s1, debug)

    if len(s2) == 0:
        return len(s1)

    def substitution_cost(c1, c2):
        if c1 == c2:
            return 0
        return levenshtein(decompose(c1), decompose(c2))/3

    previous_row = range(len(s2) + 1)
    for i, c1 in enumerate(s1):
        current_row = [i + 1]
        for j, c2 in enumerate(s2):
            insertions = previous_row[j + 1] + 1
            deletions = current_row[j] + 1
            # Changed
            substitutions = previous_row[j] + substitution_cost(c1, c2)
            current_row.append(min(insertions, deletions, substitutions))

        if debug:
            print(['%.3f'%v for v in current_row[1:]])

        previous_row = current_row

    return previous_row[-1]

def levenshtein(s1, s2, debug=False):
    if len(s1) < len(s2):
        return levenshtein(s2, s1, debug)

    if len(s2) == 0:
        return len(s1)

    previous_row = range(len(s2) + 1)
    for i, c1 in enumerate(s1):
        current_row = [i + 1]
        for j, c2 in enumerate(s2):
            insertions = previous_row[j + 1] + 1
            deletions = current_row[j] + 1
            substitutions = previous_row[j] + (c1 != c2)
            current_row.append(min(insertions, deletions, substitutions))

        if debug:
            print(current_row[1:])

        previous_row = current_row

    return previous_row[-1]

def find(target_str):
    s1=str(target_str)
    s2=['곶감','양배추','호박','시금치','마','당근','연근','고구마','도라지','더덕','감자','파프리카','마늘','대파','고추','생강','다진마늘','무','양파','얼갈이','버섯','열무','우거지','고사리','파래','토란','우엉','취나물','깻잎','가지','고추','상추','두부','김','김자반','미숫가루','누룽지','진미오징어','쥐포','한치','육포','꽃새우','멸치육수','디포리','황태','베이컨','우유','치즈','생크림','바나나','참기름','들기름','식초','국간장','진간장','양조간장','돈카츠소스','마요네즈','된장','설탕','밀가루','쌀가루','튀김가루','부침가루','당면','소면','카레','스프','잼','콩나물','숙주나물','도토리묵','젓갈','오이','상추','배추','부추','메추리알','굴비','홍합','새우','소고기','돼지고기','닭고기','전복','떡','막걸리','삼각김밥','김밥','초밥','튀김','다시다','유아식','분유','시리얼','요거트','육수','액젓','중면','칼국수','다시마','미역','파래','달래','오이지','생톳','고사리','냉이','대추','알토란','오미자','계피','길경','헛개나무','곤드레','우슬','감초','칡','맥문동','느릅나무','우엉','부지갱이','김치','단무지','쌈무','두부','도토리묵','토마토','사과','귤','배','키위','포도','피클','오이','멸치','소세지','햄','닭가슴살','주스','식혜','오징어','누룽지죽','우유','떡','어묵','베이컨','맛살','순대','참치액','멸치다시마','다시다','된장','토장','쌈장','고추장','비빔장','간장','까나리액젓','멸치액젓','식초','식용유','올리브유','홍초','미초','흑초','블루베리초','맛술','매실청','조청','물엿','매실당','설탕','소금','와사비','참깨','고춧가루','후추','전분','메주','분말','시럽','양념참치','밥','짜장','소주','막걸리','와인','맥주','양주']

    s1.replace(' ','')
    s1.replace('\n','')
    hangul=re.compile('[^ ㄱ-ㅣ가-힣]+')
    result=hangul.sub('',s1)
    x=okt.nouns(result)

    #print(x)
    target_list = []
    for k in range(0,len(x)):
        for j in range(0,1):
            mina=[0,jamo_levenshtein(x[k],s2[0])]
        
            for i in range(0,len(s2)):
                #print(jamo_levenshtein(s1,s2[i]))
                if(mina[1]>jamo_levenshtein(x[k],s2[i])):
                    mina[0]=i
                    mina[1]=jamo_levenshtein(x[k],s2[i])
            #print(s2[mina[0]],mina[1])        
            target_list.append((s2[mina[0]], mina[1]))

    n, d = target_list[0]
    _min = d
    _name = n
    for tup in target_list:
        name, distance = tup
        if distance < _min:
            _min = distance
            _name = name

    print(base64.b64encode(str(_name).encode('utf-8')))


