
from konlpy.tag import Okt
okt = Okt()
 
# okt.morphs     #형태소 분석
# okt.nouns      #명사 분석
# okt.phrases    #구(Phrase) 분석
# okt.pos        #형태소 분석 태깅

x = okt.nouns("오뚜기3분카레")
print(x)
