import requests
import base64
url1 = 'http://uis.sejong.ac.kr/app/sys.Login.servj?strCommand=LOGIN&strLoginId=guest2&strLoginPw=guest2'
res = requests.get(url1)

target_cookie = str(res.cookies)
idx_start = target_cookie.find('SJ_JSESSIONID')
idx_end = target_cookie[idx_start:].find(' ')
jsession_cookie = target_cookie[idx_start:idx_start+idx_end]
jsession_cookie = jsession_cookie[14:]

cookies = {}
cookies['COOKIE_MENU_SYS_ID'] = '16cb88126cffeaefc90b23a7b3b4ee41'
cookies['COOKIE_USER_INFO'] = '7966ff8c6ba924bfa5c1f0a834a2d6a943fba97dda82535536a47a6e7b406d168d9f2afc11a844815ce220816f935ce23e77384ea219e04e9fc23d25e5e940422a24381091ec4b4175e07dae0acdb20f8f3ab12ebcb9acfa9a62f5f45eb65f435d1c222d838b76f0d9f98fab4068e0a375cb98f66e362e6b70fa962441c92adb36c010dc80eaea9daab6a3b47c7d773dceac32dd562c9229862a31f0576b05dc2080a8769656ba65fffff02bbe75b8aafe4ce39cf52954d112d13c885d8f9fac2dc28038db8e2140d6f76d6a9c24a287b5ac8965e396847a071db290c54590192a3f72cb7a0237c60f3daa0d30028d37f4612a8672a6a04101f25ff88e1c6d3f905ad69a890798c99e603770dff6daed64cc6a6ef9471950f1f4a33d63e10c213502a7aca1000b0f35901911ddce3b795f704f0c14d68d54c9e50623d05e1f9555fd9232c1b6484303970ea5b248f728e31fec70e16d44e944896029d1715a062a651c3963012de5f4de8c4597e6acbdd3674b39a3a6e4297bd8248ea5fc047abdf843050e21c5de96e8d2145521f3eca86dc546c65d3c57e6ccbcb69ff61ea1'
cookies['SJ_JSESSIONID'] = jsession_cookie

url2 = 'http://uis.sejong.ac.kr/app/sys.Login.servj'
res = requests.get(url2, cookies=cookies)

url3 = 'http://uis.sejong.ac.kr/app/menu/sys.MenuSys.doj'
res = requests.get(url3, cookies=cookies)
target_res = str(res.text)

idx_start = target_res.find('varForm.param_login_dt.value = ')
idx_end = target_res[idx_start:].find(';') + idx_start
idx_start = target_res[idx_start:].find('= ') + idx_start
login_dt = target_res[idx_start+3:idx_end-1]
url4 = 'http://uis.sejong.ac.kr/app/modules/sch_sue/sch_sue.SueOpenTimeQ.do'

data = {}

data['pgauth_sys_id'] = 'SELF_STUD_OUT2'
data['pgauth_sub_id'] = 'SELF_SUB_10'
data['pgauth_menu_id'] = 'SCH_SUE_ETC'
data['pgauth_pg_id'] = 'SueOpenTimeQ'
data['pgauth_self_yn'] = 'Y'
data['pgauth_orgn_clsf_map_cd'] = 'MAP-017'
data['pgauth_orgn_clsf_ctrl_yn'] = ''
data['pgauth_auth_depth_cd'] = '9'
data['pgauth_upd_posb_yn'] = 'Y'
data['pgauth_dwn_posb_yn'] = 'Y'
data['pguser_member_no'] = 'guest2'
data['pguser_login_dt'] = login_dt
data['pgauth_login_dt'] = login_dt
data['param_member_no'] = 'guest2'
data['param_login_dt'] = login_dt
data['strCommand'] = 'List'
data['strOrgn'] = '20'
data['strYear'] = '2020'
data['strSmtCd'] = '20'
data['strDeptCd'] = ''
data['strCuriTypeCd'] = ''
data['strCuriNm'] = ''
data['strSltDomainCd'] = ''
data['strYearSmt'] = '2020/20'
data['strCuriNo'] = ''
data['strClass'] = ''
data['strSmtNm'] = ''
data['strSltDeptCd'] = ''
data['strPlanRegYn'] = ''
data['strEmpNm'] = ''
data['strCorsScheGrpCd'] = '0'
data['strLangChk'] = '0'

res = requests.post(url4, cookies=cookies, data=data)

print(base64.b64encode(res.text.encode('utf-8')))
#print(res.text)

