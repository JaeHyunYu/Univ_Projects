<?php

session_start();
if(!isset($_SESSION['lat']) or !isset($_SESSION['lng']))
{
	echo "<script>";
	echo "alert(\"SET Your location First!\");";
	echo "location.href='set_co.php';";
	echo "</script>";
}
echo "<script>";
echo "var lat = ".$_SESSION['lat'].";";
echo "var lng = ".$_SESSION['lng'].";";

if($_SESSION['ccode'] == "AFG")
	echo "var ccode = \"아프가니스탄\"";
else if($_SESSION['ccode'] == "ALA")
	echo "var ccode = \"올란드 제도\"";
else if($_SESSION['ccode'] == "ALB")
	echo "var ccode = \"알바니아\"";
else if($_SESSION['ccode'] == "DZA")
	echo "var ccode = \"알제리\"";
else if($_SESSION['ccode'] == "ASM")
	echo "var ccode = \"아메리칸사모아\"";
else if($_SESSION['ccode'] == "AND")
	echo "var ccode = \"안도라\"";
else if($_SESSION['ccode'] == "AGO")
	echo "var ccode = \"앙골라\"";
else if($_SESSION['ccode'] == "AIA")
	echo "var ccode = \"앵귈라\"";
else if($_SESSION['ccode'] == "ATA")
	echo "var ccode = \"남극\"";
else if($_SESSION['ccode'] == "ATG")
	echo "var ccode = \"앤티가 바부다\"";
else if($_SESSION['ccode'] == "ARG")
	echo "var ccode = \"아르헨티나\"";
else if($_SESSION['ccode'] == "ARM")
	echo "var ccode = \"아르메니아\"";
else if($_SESSION['ccode'] == "ABW")
	echo "var ccode = \"아루바\"";
else if($_SESSION['ccode'] == "AUS")
	echo "var ccode = \"오스트레일리아\"";
else if($_SESSION['ccode'] == "AUT")
	echo "var ccode = \"오스트리아\"";
else if($_SESSION['ccode'] == "AZE")
	echo "var ccode = \"아제르바이잔\"";
else if($_SESSION['ccode'] == "BHS")
	echo "var ccode = \"바하마\"";
else if($_SESSION['ccode'] == "BHR")
	echo "var ccode = \"바레인\"";
else if($_SESSION['ccode'] == "BGD")
	echo "var ccode = \"방글라데시\"";
else if($_SESSION['ccode'] == "BRB")
	echo "var ccode = \"바베이도스\"";
else if($_SESSION['ccode'] == "BLR")
	echo "var ccode = \"벨라루스\"";
else if($_SESSION['ccode'] == "BEL")
	echo "var ccode = \"벨기에\"";
else if($_SESSION['ccode'] == "BLZ")
	echo "var ccode = \"벨리즈\"";
else if($_SESSION['ccode'] == "BEN")
	echo "var ccode = \"베냉\"";
else if($_SESSION['ccode'] == "BMU")
	echo "var ccode = \"버뮤다\"";
else if($_SESSION['ccode'] == "BTN")
	echo "var ccode = \"부탄\"";
else if($_SESSION['ccode'] == "BOL")
	echo "var ccode = \"볼리비아\"";
else if($_SESSION['ccode'] == "BES")
	echo "var ccode = \"보네르섬\"";
else if($_SESSION['ccode'] == "BIH")
	echo "var ccode = \"보스니아 헤르체고비나\"";
else if($_SESSION['ccode'] == "BWA")
	echo "var ccode = \"보츠와나\"";
else if($_SESSION['ccode'] == "BVT")
	echo "var ccode = \"부베섬\"";
else if($_SESSION['ccode'] == "BRA")
	echo "var ccode = \"브라질\"";
else if($_SESSION['ccode'] == "IOT")
	echo "var ccode = \"영국령 인도양 지역\"";
else if($_SESSION['ccode'] == "BRN")
	echo "var ccode = \"브루나이\"";
else if($_SESSION['ccode'] == "BGR")
	echo "var ccode = \"불가리아\"";
else if($_SESSION['ccode'] == "BFA")
	echo "var ccode = \"부르키나파소\"";
else if($_SESSION['ccode'] == "BDI")
	echo "var ccode = \"부룬디\"";
else if($_SESSION['ccode'] == "KHM")
	echo "var ccode = \"캄보디아\"";
else if($_SESSION['ccode'] == "CMR")
	echo "var ccode = \"카메룬\"";
else if($_SESSION['ccode'] == "CAN")
	echo "var ccode = \"캐나다\"";
else if($_SESSION['ccode'] == "CPV")
	echo "var ccode = \"카보베르데\"";
else if($_SESSION['ccode'] == "CYM")
	echo "var ccode = \"케이맨 제도\"";
else if($_SESSION['ccode'] == "CAF")
	echo "var ccode = \"중앙아프리카 공화국\"";
else if($_SESSION['ccode'] == "TCD")
	echo "var ccode = \"차드\"";
else if($_SESSION['ccode'] == "CHL")
	echo "var ccode = \"칠레\"";
else if($_SESSION['ccode'] == "CHN")
	echo "var ccode = \"중국\"";
else if($_SESSION['ccode'] == "CXR")
	echo "var ccode = \"크리스마스섬\"";
else if($_SESSION['ccode'] == "CCK")
	echo "var ccode = \"코코스 제도\"";
else if($_SESSION['ccode'] == "COL")
	echo "var ccode = \"콜롬비아\"";
else if($_SESSION['ccode'] == "COM")
	echo "var ccode = \"코모로\"";
else if($_SESSION['ccode'] == "COG")
	echo "var ccode = \"콩고 공화국\"";
else if($_SESSION['ccode'] == "COD")
	echo "var ccode = \"콩고 민주 공화국\"";
else if($_SESSION['ccode'] == "COK")
	echo "var ccode = \"쿡 제도\"";
else if($_SESSION['ccode'] == "CRI")
	echo "var ccode = \"코스타리카\"";
else if($_SESSION['ccode'] == "CIV")
	echo "var ccode = \"코트디부아르\"";
else if($_SESSION['ccode'] == "HRV")
	echo "var ccode = \"크로아티아\"";
else if($_SESSION['ccode'] == "CUB")
	echo "var ccode = \"쿠바\"";
else if($_SESSION['ccode'] == "CUW")
	echo "var ccode = \"퀴라소\"";
else if($_SESSION['ccode'] == "CYP")
	echo "var ccode = \"키프로스\"";
else if($_SESSION['ccode'] == "CZE")
	echo "var ccode = \"체코\"";
else if($_SESSION['ccode'] == "DNK")
	echo "var ccode = \"덴마크\"";
else if($_SESSION['ccode'] == "DJI")
	echo "var ccode = \"지부티\"";
else if($_SESSION['ccode'] == "DMA")
	echo "var ccode = \"도미니카 연방\"";
else if($_SESSION['ccode'] == "DOM")
	echo "var ccode = \"도미니카 공화국\"";
else if($_SESSION['ccode'] == "ECU")
	echo "var ccode = \"에콰도르\"";
else if($_SESSION['ccode'] == "EGY")
	echo "var ccode = \"이집트\"";
else if($_SESSION['ccode'] == "SLV")
	echo "var ccode = \"엘살바도르\"";
else if($_SESSION['ccode'] == "GNQ")
	echo "var ccode = \"적도 기니\"";
else if($_SESSION['ccode'] == "ERI")
	echo "var ccode = \"에리트레아\"";
else if($_SESSION['ccode'] == "EST")
	echo "var ccode = \"에스토니아\"";
else if($_SESSION['ccode'] == "ETH")
	echo "var ccode = \"에티오피아\"";
else if($_SESSION['ccode'] == "FLK")
	echo "var ccode = \"포클랜드 제도\"";
else if($_SESSION['ccode'] == "FRO")
	echo "var ccode = \"페로 제도\"";
else if($_SESSION['ccode'] == "FJI")
	echo "var ccode = \"피지\"";
else if($_SESSION['ccode'] == "FIN")
	echo "var ccode = \"핀란드\"";
else if($_SESSION['ccode'] == "FRA")
	echo "var ccode = \"프랑스\"";
else if($_SESSION['ccode'] == "GUF")
	echo "var ccode = \"프랑스령 기아나\"";
else if($_SESSION['ccode'] == "PYF")
	echo "var ccode = \"프랑스령 폴리네시아\"";
else if($_SESSION['ccode'] == "ATF")
	echo "var ccode = \"프랑스령 남방 및 남극 지역\"";
else if($_SESSION['ccode'] == "GAB")
	echo "var ccode = \"가봉\"";
else if($_SESSION['ccode'] == "GMB")
	echo "var ccode = \"감비아\"";
else if($_SESSION['ccode'] == "GEO")
	echo "var ccode = \"조지아\"";
else if($_SESSION['ccode'] == "DEU")
	echo "var ccode = \"독일\"";
else if($_SESSION['ccode'] == "GHA")
	echo "var ccode = \"가나\"";
else if($_SESSION['ccode'] == "GIB")
	echo "var ccode = \"지브롤터\"";
else if($_SESSION['ccode'] == "GRC")
	echo "var ccode = \"그리스\"";
else if($_SESSION['ccode'] == "GRL")
	echo "var ccode = \"그린란드\"";
else if($_SESSION['ccode'] == "GRD")
	echo "var ccode = \"그레나다\"";
else if($_SESSION['ccode'] == "GLP")
	echo "var ccode = \"과들루프\"";
else if($_SESSION['ccode'] == "GUM")
	echo "var ccode = \"괌\"";
else if($_SESSION['ccode'] == "GTM")
	echo "var ccode = \"과테말라\"";
else if($_SESSION['ccode'] == "GGY")
	echo "var ccode = \"건지섬\"";
else if($_SESSION['ccode'] == "GIN")
	echo "var ccode = \"기니\"";
else if($_SESSION['ccode'] == "GNB")
	echo "var ccode = \"기니비사우\"";
else if($_SESSION['ccode'] == "GUY")
	echo "var ccode = \"가이아나\"";
else if($_SESSION['ccode'] == "HTI")
	echo "var ccode = \"아이티\"";
else if($_SESSION['ccode'] == "HMD")
	echo "var ccode = \"허드 맥도널드 제도\"";
else if($_SESSION['ccode'] == "VAT")
	echo "var ccode = \"바티칸 시국\"";
else if($_SESSION['ccode'] == "HND")
	echo "var ccode = \"온두라스\"";
else if($_SESSION['ccode'] == "HKG")
	echo "var ccode = \"홍콩\"";
else if($_SESSION['ccode'] == "HUN")
	echo "var ccode = \"헝가리\"";
else if($_SESSION['ccode'] == "ISL")
	echo "var ccode = \"아이슬란드\"";
else if($_SESSION['ccode'] == "IND")
	echo "var ccode = \"인도\"";
else if($_SESSION['ccode'] == "IDN")
	echo "var ccode = \"인도네시아\"";
else if($_SESSION['ccode'] == "IRN")
	echo "var ccode = \"이란\"";
else if($_SESSION['ccode'] == "IRQ")
	echo "var ccode = \"이라크\"";
else if($_SESSION['ccode'] == "IRL")
	echo "var ccode = \"아일랜드\"";
else if($_SESSION['ccode'] == "IMN")
	echo "var ccode = \"맨섬\"";
else if($_SESSION['ccode'] == "ISR")
	echo "var ccode = \"이스라엘\"";
else if($_SESSION['ccode'] == "ITA")
	echo "var ccode = \"이탈리아\"";
else if($_SESSION['ccode'] == "JAM")
	echo "var ccode = \"자메이카\"";
else if($_SESSION['ccode'] == "JPN")
	echo "var ccode = \"일본\"";
else if($_SESSION['ccode'] == "JEY")
	echo "var ccode = \"저지섬\"";
else if($_SESSION['ccode'] == "JOR")
	echo "var ccode = \"요르단\"";
else if($_SESSION['ccode'] == "KAZ")
	echo "var ccode = \"카자흐스탄\"";
else if($_SESSION['ccode'] == "KEN")
	echo "var ccode = \"케냐\"";
else if($_SESSION['ccode'] == "KIR")
	echo "var ccode = \"키리바시\"";
else if($_SESSION['ccode'] == "PRK")
	echo "var ccode = \"조선민주주의인민공화국\"";
else if($_SESSION['ccode'] == "KOR")
	echo "var ccode = \"대한민국\"";
else if($_SESSION['ccode'] == "KWT")
	echo "var ccode = \"쿠웨이트\"";
else if($_SESSION['ccode'] == "KGZ")
	echo "var ccode = \"키르기스스탄\"";
else if($_SESSION['ccode'] == "LAO")
	echo "var ccode = \"라오스\"";
else if($_SESSION['ccode'] == "LVA")
	echo "var ccode = \"라트비아\"";
else if($_SESSION['ccode'] == "LBN")
	echo "var ccode = \"레바논\"";
else if($_SESSION['ccode'] == "LSO")
	echo "var ccode = \"레소토\"";
else if($_SESSION['ccode'] == "LBR")
	echo "var ccode = \"라이베리아\"";
else if($_SESSION['ccode'] == "LBY")
	echo "var ccode = \"리비아\"";
else if($_SESSION['ccode'] == "LIE")
	echo "var ccode = \"리히텐슈타인\"";
else if($_SESSION['ccode'] == "LTU")
	echo "var ccode = \"리투아니아\"";
else if($_SESSION['ccode'] == "LUX")
	echo "var ccode = \"룩셈부르트\"";
else if($_SESSION['ccode'] == "MAC")
	echo "var ccode = \"마카오\"";
else if($_SESSION['ccode'] == "MKD")
	echo "var ccode = \"북마케도니아\"";
else if($_SESSION['ccode'] == "MDG")
	echo "var ccode = \"마다가스카르\"";
else if($_SESSION['ccode'] == "MWI")
	echo "var ccode = \"말라위\"";
else if($_SESSION['ccode'] == "MYS")
	echo "var ccode = \"말레이시아\"";
else if($_SESSION['ccode'] == "MDV")
	echo "var ccode = \"몰디브\"";
else if($_SESSION['ccode'] == "MLI")
	echo "var ccode = \"말리\"";
else if($_SESSION['ccode'] == "MLT")
	echo "var ccode = \"몰타\"";
else if($_SESSION['ccode'] == "MHL")
	echo "var ccode = \"마셜 제도\"";
else if($_SESSION['ccode'] == "MTQ")
	echo "var ccode = \"마르티니크\"";
else if($_SESSION['ccode'] == "MRT")
	echo "var ccode = \"모리타니\"";
else if($_SESSION['ccode'] == "MUS")
	echo "var ccode = \"모리셔스\"";
else if($_SESSION['ccode'] == "MYT")
	echo "var ccode = \"마요트\"";
else if($_SESSION['ccode'] == "MEX")
	echo "var ccode = \"멕시코\"";
else if($_SESSION['ccode'] == "FSM")
	echo "var ccode = \"미크로네시아 연방\"";
else if($_SESSION['ccode'] == "MDA")
	echo "var ccode = \"몰도바\"";
else if($_SESSION['ccode'] == "MCO")
	echo "var ccode = \"모나코\"";
else if($_SESSION['ccode'] == "MNG")
	echo "var ccode = \"몽골\"";
else if($_SESSION['ccode'] == "MNE")
	echo "var ccode = \"몬테네그로\"";
else if($_SESSION['ccode'] == "MSR")
	echo "var ccode = \"몬트세랫\"";
else if($_SESSION['ccode'] == "MAR")
	echo "var ccode = \"모로코\"";
else if($_SESSION['ccode'] == "MOZ")
	echo "var ccode = \"모잠비크\"";
else if($_SESSION['ccode'] == "MMR")
	echo "var ccode = \"미얀마\"";
else if($_SESSION['ccode'] == "NAM")
	echo "var ccode = \"나미비아\"";
else if($_SESSION['ccode'] == "NRU")
	echo "var ccode = \"나우루\"";
else if($_SESSION['ccode'] == "NPL")
	echo "var ccode = \"네팔\"";
else if($_SESSION['ccode'] == "NLD")
	echo "var ccode = \"네덜란드\"";
else if($_SESSION['ccode'] == "NCL")
	echo "var ccode = \"누벨칼레도니\"";
else if($_SESSION['ccode'] == "NZL")
	echo "var ccode = \"뉴질랜드\"";
else if($_SESSION['ccode'] == "NIC")
	echo "var ccode = \"니카라과\"";
else if($_SESSION['ccode'] == "NER")
	echo "var ccode = \"니제르\"";
else if($_SESSION['ccode'] == "NGA")
	echo "var ccode = \"나이지리아\"";
else if($_SESSION['ccode'] == "NIU")
	echo "var ccode = \"니우에\"";
else if($_SESSION['ccode'] == "NFK")
	echo "var ccode = \"노퍽섬\"";
else if($_SESSION['ccode'] == "MNP")
	echo "var ccode = \"북마리아나 제도\"";
else if($_SESSION['ccode'] == "NOR")
	echo "var ccode = \"노르웨이\"";
else if($_SESSION['ccode'] == "OMN")
	echo "var ccode = \"오만\"";
else if($_SESSION['ccode'] == "PAK")
	echo "var ccode = \"파키스탄\"";
else if($_SESSION['ccode'] == "PLW")
	echo "var ccode = \"팔라우\"";
else if($_SESSION['ccode'] == "PSE")
	echo "var ccode = \"팔레스타인\"";
else if($_SESSION['ccode'] == "PAN")
	echo "var ccode = \"파나마\"";
else if($_SESSION['ccode'] == "PNG")
	echo "var ccode = \"파푸아뉴기니\"";
else if($_SESSION['ccode'] == "PRY")
	echo "var ccode = \"파라과이\"";
else if($_SESSION['ccode'] == "PER")
	echo "var ccode = \"페루\"";
else if($_SESSION['ccode'] == "PHL")
	echo "var ccode = \"필리핀\"";
else if($_SESSION['ccode'] == "PCN")
	echo "var ccode = \"핏케언 제도\"";
else if($_SESSION['ccode'] == "POL")
	echo "var ccode = \"폴란드\"";
else if($_SESSION['ccode'] == "PRT")
	echo "var ccode = \"포르투갈\"";
else if($_SESSION['ccode'] == "PRI")
	echo "var ccode = \"푸에르토리코\"";
else if($_SESSION['ccode'] == "QAT")
	echo "var ccode = \"카타르\"";
else if($_SESSION['ccode'] == "REU")
	echo "var ccode = \"레위니옹\"";
else if($_SESSION['ccode'] == "ROU")
	echo "var ccode = \"루마니아\"";
else if($_SESSION['ccode'] == "RUS")
	echo "var ccode = \"러시아\"";
else if($_SESSION['ccode'] == "RWA")
	echo "var ccode = \"르완다\"";
else if($_SESSION['ccode'] == "BLM")
	echo "var ccode = \"생바르텔레미\"";
else if($_SESSION['ccode'] == "SHN")
	echo "var ccode = \"세인트헬레나\"";
else if($_SESSION['ccode'] == "KNA")
	echo "var ccode = \"세인트키츠 네비스\"";
else if($_SESSION['ccode'] == "LCA")
	echo "var ccode = \"세인트루시아\"";
else if($_SESSION['ccode'] == "MAF")
	echo "var ccode = \"생마르탱\"";
else if($_SESSION['ccode'] == "SPM")
	echo "var ccode = \"생피에르 미클롱\"";
else if($_SESSION['ccode'] == "VCT")
	echo "var ccode = \"세인트빈센트 그레나딘\"";
else if($_SESSION['ccode'] == "WSM")
	echo "var ccode = \"사모아\"";
else if($_SESSION['ccode'] == "SMR")
	echo "var ccode = \"산마리노\"";
else if($_SESSION['ccode'] == "STP")
	echo "var ccode = \"상투메 프린시페\"";
else if($_SESSION['ccode'] == "SAU")
	echo "var ccode = \"사우디아라비아\"";
else if($_SESSION['ccode'] == "SEN")
	echo "var ccode = \"세네갈\"";
else if($_SESSION['ccode'] == "SRB")
	echo "var ccode = \"세르비아\"";
else if($_SESSION['ccode'] == "SYC")
	echo "var ccode = \"세이셸\"";
else if($_SESSION['ccode'] == "SLE")
	echo "var ccode = \"시에라리온\"";
else if($_SESSION['ccode'] == "SGP")
	echo "var ccode = \"싱가포르\"";
else if($_SESSION['ccode'] == "SXM")
	echo "var ccode = \"신트마르턴\"";
else if($_SESSION['ccode'] == "SVK")
	echo "var ccode = \"슬로바키아\"";
else if($_SESSION['ccode'] == "SVN")
	echo "var ccode = \"슬로베니아\"";
else if($_SESSION['ccode'] == "SLB")
	echo "var ccode = \"솔로몬 제도\"";
else if($_SESSION['ccode'] == "SOM")
	echo "var ccode = \"소말리아\"";
else if($_SESSION['ccode'] == "ZAF")
	echo "var ccode = \"남아프리카 공화국\"";
else if($_SESSION['ccode'] == "SGS")
	echo "var ccode = \"사우스조지아 사우스샌드위치 제도\"";
else if($_SESSION['ccode'] == "SSD")
	echo "var ccode = \"남수단\"";
else if($_SESSION['ccode'] == "ESP")
	echo "var ccode = \"스페인\"";
else if($_SESSION['ccode'] == "LKA")
	echo "var ccode = \"스리랑카\"";
else if($_SESSION['ccode'] == "SDN")
	echo "var ccode = \"수단\"";
else if($_SESSION['ccode'] == "SUR")
	echo "var ccode = \"수리남\"";
else if($_SESSION['ccode'] == "SJM")
	echo "var ccode = \"스발바르 얀마옌\"";
else if($_SESSION['ccode'] == "SWZ")
	echo "var ccode = \"에스와티니\"";
else if($_SESSION['ccode'] == "SWE")
	echo "var ccode = \"스웨덴\"";
else if($_SESSION['ccode'] == "CHE")
	echo "var ccode = \"스위스\"";
else if($_SESSION['ccode'] == "SYR")
	echo "var ccode = \"시리아\"";
else if($_SESSION['ccode'] == "TWN")
	echo "var ccode = \"대만\"";
else if($_SESSION['ccode'] == "TJK")
	echo "var ccode = \"타지키스탄\"";
else if($_SESSION['ccode'] == "TZA")
	echo "var ccode = \"탄자니아\"";
else if($_SESSION['ccode'] == "THA")
	echo "var ccode = \"태국\"";
else if($_SESSION['ccode'] == "TLS")
	echo "var ccode = \"동티모르\"";
else if($_SESSION['ccode'] == "TGO")
	echo "var ccode = \"토고\"";
else if($_SESSION['ccode'] == "TKL")
	echo "var ccode = \"토켈라우\"";
else if($_SESSION['ccode'] == "TON")
	echo "var ccode = \"통가\"";
else if($_SESSION['ccode'] == "TTO")
	echo "var ccode = \"트리니다드 토바고\"";
else if($_SESSION['ccode'] == "TUN")
	echo "var ccode = \"튀니지\"";
else if($_SESSION['ccode'] == "TUR")
	echo "var ccode = \"터키\"";
else if($_SESSION['ccode'] == "TKM")
	echo "var ccode = \"투르크메니스탄\"";
else if($_SESSION['ccode'] == "TCA")
	echo "var ccode = \"터크스 케이커스 제도\"";
else if($_SESSION['ccode'] == "TUV")
	echo "var ccode = \"투발루\"";
else if($_SESSION['ccode'] == "UGA")
	echo "var ccode = \"우간다\"";
else if($_SESSION['ccode'] == "UKR")
	echo "var ccode = \"우크라이나\"";
else if($_SESSION['ccode'] == "ARE")
	echo "var ccode = \"아랍에미리트\"";
else if($_SESSION['ccode'] == "GBR")
	echo "var ccode = \"영국\"";
else if($_SESSION['ccode'] == "USA")
	echo "var ccode = \"미국\"";
else if($_SESSION['ccode'] == "UMI")
	echo "var ccode = \"미국령 군소 제도\"";
else if($_SESSION['ccode'] == "URY")
	echo "var ccode = \"우루과이\"";
else if($_SESSION['ccode'] == "UZB")
	echo "var ccode = \"우즈베키스탄\"";
else if($_SESSION['ccode'] == "VUT")
	echo "var ccode = \"바누아트\"";
else if($_SESSION['ccode'] == "VEN")
	echo "var ccode = \"베네수엘라\"";
else if($_SESSION['ccode'] == "VNM")
	echo "var ccode = \"베트남\"";
else if($_SESSION['ccode'] == "VGB")
	echo "var ccode = \"영국령 버진아일랜드\"";
else if($_SESSION['ccode'] == "VIR")
	echo "var ccode = \"미국ㄹㅇ 버진아일랜드\"";
else if($_SESSION['ccode'] == "WLF")
	echo "var ccode = \"왈리스 푸투나\"";
else if($_SESSION['ccode'] == "ESH")
	echo "var ccode = \"서사하라\"";
else if($_SESSION['ccode'] == "YEM")
	echo "var ccode = \"예멘\"";
else if($_SESSION['ccode'] == "ZMB")
	echo "var ccode = \"잠비아\"";
else if($_SESSION['ccode'] == "ZWE")
	echo "var ccode = \"짐바브웨\"";
echo ";";
echo "</script>";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

<script>
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
////:::                                                                         :::
////:::  This routine calculates the distance between two points (given the     :::
////:::  latitude/longitude of those points). It is being used to calculate     :::
////:::  the distance between two locations using GeoDataSource (TM) prodducts  :::
////:::                                                                         :::
////:::  Definitions:                                                           :::
////:::    South latitudes are negative, east longitudes are positive           :::
////:::                                                                         :::
////:::  Passed to function:                                                    :::
////:::    lat1, lon1 = Latitude and Longitude of point 1 (in decimal degrees)  :::
////:::    lat2, lon2 = Latitude and Longitude of point 2 (in decimal degrees)  :::
////:::    unit = the unit you desire for results                               :::
////:::           where: 'M' is statute miles (default)                         :::
////:::                  'K' is kilometers                                      :::
////:::                  'N' is nautical miles                                  :::
////:::                                                                         :::
////:::  Worldwide cities and other features databases with latitude longitude  :::
////:::  are available at https://www.geodatasource.com                         :::
////:::                                                                         :::
////:::  For enquiries, please contact sales@geodatasource.com                  :::
////:::                                                                         :::
////:::  Official Web site: https://www.geodatasource.com                       :::
////:::                                                                         :::
////:::               GeoDataSource.com (C) All Rights Reserved 2018            :::
////:::                                                                         :::
////:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

function distance(lat1, lon1, lat2, lon2, unit) {
		if ((lat1 == lat2) && (lon1 == lon2)) {
					return 0;
						}
			else {
						var radlat1 = Math.PI * lat1/180;
								var radlat2 = Math.PI * lat2/180;
								var theta = lon1-lon2;
										var radtheta = Math.PI * theta/180;
										var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
												if (dist > 1) {
																dist = 1;
																		}
												dist = Math.acos(dist);
												dist = dist * 180/Math.PI;
														dist = dist * 60 * 1.1515;
														if (unit=="K") { dist = dist * 1.609344 }
																	if (unit=="N") { dist = dist * 0.8684 }
																				return dist;
															}
}


</script>






<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">



	<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">

	<!-- Bootstrap core CSS -->
	<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="./modal-dialog.css">

	<!-- Custom styles for this template -->
	<link href="pricing.css" rel="stylesheet">

		<meta name="viewport" content="width=device-width, initial-scale=1">
			<!--===============================================================================================-->   
				<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
					<!--===============================================================================================-->
						<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
							<!--===============================================================================================-->
								<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
									<!--===============================================================================================-->
										<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
											<!--===============================================================================================-->
												<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
													<!--===============================================================================================-->   
														<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
															<!--===============================================================================================-->
																<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
																	<!--===============================================================================================-->
																		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
																			<!--===============================================================================================-->   
																				<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
																					<!--===============================================================================================-->
																						<link rel="stylesheet" type="text/css" href="css/util.css">
																							<link rel="stylesheet" type="text/css" href="css/main.css">
																								<!--===============================================================================================-->
																									<meta http-equiv="Content-Type" content="text/html;">
																										<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
																											<link rel="stylesheet" type="text/css" href="./style.css">
																												<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
																													<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




</head>
<body>
     <a href="../index.php"><h1 style="text-align: center;"> <i class="fa fa-info-circle"> </i> Exchange Help</h1></a>
	<!-- 지도를 표시할 div 입니다 -->
	<div id="map" style="width:100%;height:700px;"></div>

	<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=90f394224f3fe5a1d095723a7e095be1&libraries=services,drawing"></script>
	<script>

	var infowindow = new kakao.maps.InfoWindow({zIndex:1});

	var mapContainer = document.getElementById('map'),
		mapOption = {
			center: new kakao.maps.LatLng(lat, lng),
			level:3
		};
	
	var map = new kakao.maps.Map(mapContainer, mapOption);
	</script>

	<script>
	var ps = new kakao.maps.services.Places();

	ps.keywordSearch(ccode + " 대사관", placesSearchCB);

	function placesSearchCB (data, status, pagination){
		if(status === kakao.maps.services.Status.OK){
			var bounds = new kakao.maps.LatLngBounds();

			var tlat = <?php echo $_SESSION['lat']; ?>;
			var tlng = <?php echo $_SESSION['lng']; ?>;
			var stan = distance(tlat, tlng, data[0].y, data[0].x, "K");

			var MIN = stan;
			for (var i = 1; i < data.length; i++){
				var stan = distance(tlat, tlng, data[i].y, data[i].x, "K");
				if(stan < MIN)
					MIN = stan;
				displayMarker(data[i]);
				bounds.extend(new kakao.maps.LatLng(data[i].y, data[i].x));
			}
			document.cookie="dist="+MIN+";";

			map.setBounds(bounds);
		}else if (status === kakao.maps.services.Status.ZERO_RESULT){
			alert("대사관을 찾을 수 없습니다.");
			location.href = "index.php";
		}
	}

	function displayMarker(place){
		var marker = new kakao.maps.Marker({
		map: map,
		position: new kakao.maps.LatLng(place.y, place.x)
	});

		kakao.maps.event.addListener(marker, "click", function(){
			infowindow.setContent('<div style="padding:5px;font-size:12px;">' + place.place_name + '</div>');
			infowindow.open(map, marker);
		});
	}

	</script>
<?php
$_SESSION['dist'] = $_COOKIE['dist'];
?>
</body>
</html>
