<?php
include "inc/session.php";
include "inc/dbcon.php";
$sql = "select * from notice;";
$result = mysqli_query($dbcon, $sql);
$total = mysqli_num_rows($result);
$list_num = 10;
$page_num = 10;
$page = isset($_GET["page"])? $_GET["page"] : 1;
$total_page = ceil($total / $list_num);
$total_block = ceil($page / $page_num);
$now_block = ceil($page / $page_num);
$s_pageNum = ($now_block -1) * $page_num + 1;
if($s_pageNum <= 0){
    $s_pageNum = 1;
};
$e_pageNum = $now_block * $page_num;
if($e_pageNum > $total_page){
    $e_pageNum = $total_page;
};
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="css/css_notice.css">
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/notice.js"></script>
    <style>
        <?php if($s_id == "admin"){ ?>
            .total{
                width:1000px;
                display:flex;
                justify-content:space-between
            }
        <?php }; ?>
    </style>
</head>
<body>
    <div class="wrap">
        <div class="header_wrap">
            <header id="header" class="header">
                <h1 class="logo hr1"><a href="#">롯데시네마</a></h1>

                <nav class="gnb">
                    <h2 class="blind">주요메뉴</h2>
                    <ul class="gnb_menu_wrap">
                        <li class="gnb_menu1"><a href="#">예매</a>
                            <ul class="gnb_ticket">
                                <li><a href="#">예매하기</a></li>
                                <li><a href="#">상영시간표</a></li>
                                <li><a href="#">할인안내</a></li>
                            </ul>
                        </li>
                        <li class="gnb_menu2"><a href="#">영화</a>
                            <ul class="gnb_movie">
                                <li><a href="#">홈</a></li>
                                <li><a href="#">현재상영작</a></li>
                                <li><a href="#">상영예정작</a></li>
                                <li><a href="#">아르떼</a></li>
                                <li><a href="#">국립극장</a></li>
                            </ul>
                        </li>
                        <li class="gnb_menu3"><a href="#">영화관</a>
                            <ul class="gnb_cinema">
                                <li><a href="#">스페셜관</a></li>
                                <li><a href="#">서울</a></li>
                                <li><a href="#">경기/인천</a></li>
                                <li><a href="#">충청/대전</a></li>
                                <li><a href="#">전라/광주</a></li>
                                <li><a href="#">경북/대구</a></li>
                                <li><a href="#">경남/부산/울산</a></li>
                                <li><a href="#">강원</a></li>
                                <li><a href="#">제주</a></li>
                            </ul>
                        </li>
                        <li class="gnb_menu4"><a href="#">이벤트</a>
                            <ul class="gnb_event">
                                <li><a href="#">홈</a></li>
                                <li><a href="#">영화</a></li>
                                <li><a href="#">시사회/무대인사</a></li>
                                <li><a href="#">HOT</a></li>
                                <li><a href="#">제휴할인</a></li>
                                <li><a href="#">우리동네영화관</a></li>
                            </ul>
                        </li>
                        <li class="gnb_menu5"><a href="#">스토어</a>
                            <ul class="gnb_store">
                                <li><a href="#">베스트</a></li>
                                <li><a href="#">관람권</a></li>
                                <li><a href="#">스낵음료</a></li>
                                <li><a href="#">포토카드</a></li>
                            </ul>
                        </li>
                    </ul>
                    <button type="button" class="all_menu">전체메뉴</button>
                </nav>
                <div class="gnb_bg"></div>
                
                <div class="mm_wrap">
                    <div class="main_menu_wrap">
                        <div class="mt">
                            <h3 class="main_ticket">예매</h3>
                            <ul>
                                <li><a href="#">예매하기</a></li>
                                <li><a href="#">상영시간표</a></li>
                                <li><a href="#">할인안내</a></li>
                            </ul>
                        </div>
                        <div class="mm">
                            <h3 class="main_movie">영화</h3>
                            <ul>
                                <li><a href="#">홈</a></li>
                                <li><a href="#">현재상영작</a></li>
                                <li><a href="#">상영예정작</a></li>
                                <li><a href="#">아르떼</a></li>
                                <li><a href="#">국립극장</a></li>
                            </ul>
                        </div>
                        <div class="mc">
                            <h3 class="main_cinema">영화관</h3>
                            <ul>
                                <li><a href="#">스페셜관</a></li>
                                <li><a href="#">서울</a></li>
                                <li><a href="#">경기/인천</a></li>
                                <li><a href="#">충청/대전</a></li>
                                <li><a href="#">경북/대구</a></li>
                                <li><a href="#">경남/부산/울산</a></li>
                                <li><a href="#">강원</a></li>
                                <li><a href="#">제주</a></li>
                            </ul>
                        </div>
                        <div class="msc">
                            <h3 class="main_special">스페셜관</h3>
                            <ul>
                                <li><a href="#">홈</a></li>
                                <li><a href="#">샤롯데</a></li>
                                <li><a href="#">수퍼플렉스 G</a></li>
                                <li><a href="#">수퍼 S</a></li>
                                <li><a href="#">수퍼플렉스</a></li>
                                <li><a href="#">수퍼 4D</a></li>
                                <li><a href="#">컬러리움</a></li>
                                <li><a href="#">씨네살롱</a></li>
                                <li><a href="#">씨네패밀리</a></li>
                                <li><a href="#">씨네커플</a></li>
                                <li><a href="#">씨네비즈</a></li>
                                <li><a href="#">씨네컴포트(리클라이너)</a></li>
                            </ul>
                        </div>
                        <div class="ms">
                            <h3 class="main_store">스토어</h3>
                            <ul>
                                <li><a href="#">베스트</a></li>
                                <li><a href="#">관람권</a></li>
                                <li><a href="#">스낵음료</a></li>
                                <li><a href="#">포토카드</a></li>
                            </ul>
                        </div>
                        <div class="mms">
                            <h3 class="main_membership">멤버십</h3>
                            <ul>
                                <li><a href="#">VIP/Friend</a></li>
                                <li><a href="#">짝꿍클럽</a></li>
                                <li><a href="#">틴틴클럽</a></li>
                                <li><a href="#">브라보클럽</a></li>
                            </ul>
                        </div>
                        <div class="mmy">
                            <h3 class="main_my">마이</h3>
                            <ul>
                                <li><a href="#">결제내역</a></li>
                                <li><a href="#">쿠폰함</a></li>
                                <li><a href="#">MY이벤트</a></li>
                                <li><a href="#">MY클럽</a></li>
                                <li><a href="#">MY무비로그</a></li>
                                <li><a href="#">MY정보 관리</a></li>
                            </ul>
                        </div>
                        <div class="mcs">
                            <h3 class="main_cs">고객센터</h3>
                            <ul>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">공지사항</a></li>
                                <li><a href="#">1:1문의</a></li>
                                <li><a href="#">단체관람/대관문의</a></li>
                                <li><a href="#">분실물문의</a></li>
                            </ul>
                        </div>
                        <div class="me">
                            <h3 class="main_event">이벤트</h3>
                            <ul>
                                <li><a href="#">영화</a></li>
                                <li><a href="#">시사회/무대인사</a></li>
                                <li><a href="#">HOT</a></li>
                                <li><a href="#">제휴할인</a></li>
                                <li><a href="#">우리동네영화관</a></li>
                            </ul>
                        </div>
                        <div class="mem">
                            <h3 class="main_mem">회원 서비스</h3>
                            <ul>
                                <li><a href="#">로그인</a></li>
                                <li><a href="#">회원가입</a></li>
                                <li><a href="#">아이디/비밀번호찾기</a></li>
                                <li><a href="#">회원약관</a></li>
                                <li><a href="#">개인정보처리방침</a></li>
                                <li><a href="#">이메일무단수집거부</a></li>
                                <li><a href="#">영상정보처리기기 운영 및 관리방침</a></li>
                                <li><a href="#">L.POINT회원안내</a></li>
                            </ul>
                        </div>
                        <div class="msa">
                            <h3 class="main_sale">할인안내</h3>
                            <ul>
                                <li><a href="#">신용카드</a></li>
                                <li><a href="#">포인트</a></li>
                                <li><a href="#">통신사</a></li>
                                <li><a href="#">기타결제수단</a></li>
                            </ul>
                        </div>
                        <div class="mcom">
                            <h3 class="main_com">회사소개</h3>
                            <ul>
                                <li><a href="#">채용안내</a></li>
                                <li><a href="#">광고/임대문의</a></li>
                                <li><a href="#">윤리경영</a></li>
                                <li><a href="#">기업정보</a></li>
                            </ul>
                        </div>
                        <button type="button" class="exit">나가기</button>

                        <div class="log_wrap">
                            <button type="button" class="login">로그인</button>
                            <div class="join_bg"></div>
                            <p class="join1">로그인 하시고<br>
                            다양한 혜택을 확인하세요.</p>
                            <button type="button" class="join2">회원가입</button>
                        </div>

                        <a class="ad1" href="#">삼성화재 다이렉트
                        내 차 보험료 확인하면 스타벅스 아메리카노 바로 지급!
                        만기일 상관없이 365일 참여 가능</a>
                        
                        <div class="line1"></div>
                        <div class="line2"></div>

                        <a class="ad2" href="#">대한민국 웃음 회복 프로젝트!
                        라미란 송새벽 이범수
                        거북이 달린다, 피끓는 청춘 이연우 감독
                        컴백홈 10월 대개봉
                        클릭하면 예고편 볼 수 있는겨~~~~</a>
                    </div>
                </div>

                <div class="main_menu_bg"></div>

                <div class="top_menu">
                    <h2 class="blind">사용자메뉴</h2>
                    <ul class="top_menu_left">
                        <li class="top_menu1"><a href="#">회원가입</a></li>
                        <li class="top_menu2"><a href="#">바로예매 </a></li>
                    </ul>
                    <ul class="top_menu_right">
                        <li class="top_menu3"><a href="#">멤버십</a></li>
                        <li class="top_menu4"><a href="#">고객센터</a></li>
                        <li class="top_menu5"><a href="#">단체관람/단체문의</a></li>
                        <li class="top_menu6"><a href="#">로그인</a></li>
                    </ul>

                </div>

                <div class="sns">
                    <h2 class="blind">SNS</h2>
                    <ul>
                        <li class="sns1"><a href="#">페이스북</a></li>
                        <li class="sns2"><a href="#">유튜브</a></li>
                        <li class="sns3"><a href="#">인스타그램</a></li>
                    </ul>
                </div>
            </header>
        </div>
    <main id="content" class="content">
        <div class="notice_wrap">
            <h2 class="notice">공지사항</h2>
            <button type="button" id="tab1_btn" class="tab1_btn" onclick="tab1_btn_on()">전체 공지</button>
            <button type="button" id="tab2_btn" class="tab2_btn" onclick="tab2_btn_on()">영화관 공지</button>
            <div class="line"></div>
        </div>
        <div class="tab1_cont" id="tab1_cont">
            <h3 class="blind">전체 공지</h3>
            <?php if($s_id == "admin"){ ?>
            <p class="total">
                <span>전체<em> <?php echo $total; ?></em>건</span>
                <span><a class="write" href="notice/write.php">[글쓰기]</a></span>
            </p>
            <?php } else{ ?>
                <p class="total">전체<em> <?php echo $total; ?></em>건</p>
            <?php }; ?>
            <div class="search_bg">
                <fieldset class="search_wrap">
                    <select class="select1">
                        <option value="">제목</option>
                        <option value="">내용</option>
                        <option value="">제목 + 내용</option>
                    </select>
                    <input type="text" name="" id="" class="search1" placeholder="  검색어를 입력해주세요.">
                    <button type="button" class="search1_btn">검색</button>
                </fieldset>
            </div>
            <table class="notice_list">
                <caption class="blind">목록</caption>
                    <tr>
                        <th class="no">번호</th>
                        <th class="sort">구분</th>
                        <th class="n_title">제목</th>
                        <th class="w_date">등록일</th>
                        <th class="cnt">조회수</th>
                    </tr>
                    <?php
                        $start = ($page -1) * $list_num;
                        $sql = "select * from notice order by idx desc limit $start, $list_num;";
                        /* echo $sql;
                        exit; */
                        $result = mysqli_query($dbcon, $sql);
                        $i = $total - (($page -1) * $list_num);
                        while($array = mysqli_fetch_array($result)){
                    ?>
                    <tr class="notice_list_content">
                        <td><?php echo $i; ?></td>
                        <td class="notice_content_title">
                            <?php echo $array["sort"]; ?>
                        </td>
                        <td>
                            <a href="notice/view.php?n_idx=<?php echo $array["idx"]; ?>">
                            <?php echo $array["n_title"]; ?>
                            </a>
                        </td>
                        <?php $w_date = substr($array["w_date"], 0, 10);?>
                        <td><?php echo $array["w_date"]; ?></td>
                        <td><?php echo $array["cnt"]; ?></td>
                    </tr>
                    <?php
                            $i--;
                        };
                    ?>
            </table>
            <p class="pager">
            <?php
            if($page <= 1){
            ?>
            <a class="btn_prev" href="notice_김서영.php?page=1">이전</a>
            <?php } else{ ?>
            <a class="btn_prev" href="notice_김서영.php?page=<?php echo ($page -1); ?>">이전</a>
            <?php }; ?>
            <?php
            for($print_page = $s_pageNum; $print_page <= $e_pageNum; $print_page++){
            ?>
            <a href="notice_김서영.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
            <?php }; ?>
            <?php
            if($page >= $total_page){
            ?>
            <a class="btn_pg_next" href="notice_김서영.php?page=<?php echo $e_pageNum; ?>">다음</a>
            <?php } else{ ?>
            <a href="notice_김서영.php?page=<?php echo ($page +1); ?>">다음</a>
            <?php }; ?>
            </p>
            <div class="pasing">
                <ul>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>
                    <li><a href="#">9</a></li>
                    <li><a href="#">10</a></li>
                </ul>
                <button type="button" class="btn_next">></button>
                <button type="button" class="btn_end">⨠</button>
            </div>
        </div>
        <div class="tab2_cont">
            <h3 class="blind">영화관 공지</h3>
            <?php if($s_id == "admin"){ ?>
            <p class="total">
                <span>전체<em> <?php echo $total; ?></em>건</span>
                <span><a class="write" href="notice/write.php">[글쓰기]</a></span>
            </p>
            <?php } else{ ?>
                <p class="total">전체<em> <?php echo $total; ?></em>건</p>
            <?php }; ?>
            <div class="search_bg">
                <fieldset class="search_wrap">
                    <select id="movieArea" onchange="categoryChange(this)">
                            <option value="a">지역</option>
                            <option value="b">서울</option>
                            <option value="c">경기/인천</option>
                            <option value="d">충청/대전</option>
                            <option value="e">전라/광주</option>
                            <option value="f">경북/대구</option>
                            <option value="g">경남/부산/울산</option>
                            <option value="h">강원</option>
                            <option value="i">제주</option>
                    </select>

                    <select id="area">
                        <option>영화관명</option>
                    </select>

                    <select class="select2">
                        <option value="">제목</option>
                        <option value="">내용</option>
                        <option value="">제목 + 내용</option>
                    </select>

                    <input type="text" name="" id="" class="search2" placeholder="검색어를 입력해주세요.">
                    <button type="button" class="search2_btn">검색</button>
                </fieldset>
            </div>
            <table class="notice_list">
                <caption class="blind">목록</caption>
                <thead>
                    <tr>
                        <th class="no">번호</th>
                        <th class="sort">구분</th>
                        <th class="n_title">제목</th>
                        <th class="w_date">등록일</th>
                        <th class="cnt">조회수</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>53</td>
                        <td>포항</td>
                        <td>◆ 롯데시네마 포항 전관 / 전좌석 리클라이너 도입 안내 ◆</td>
                        <td>2022-09-30</td>
                        <td>210</td>
                    </tr>
                    <tr>
                        <td>52</td>
                        <td>동래</td>
                        <td>[롯데시네마 동래 시설물 고장 안내]</td>
                        <td>2022-09-05</td>
                        <td>144</td>
                    </tr>
                    <tr>
                        <td>51</td>
                        <td>월드타워</td>
                        <td>◆ 월드타워관 수퍼플렉스G 공사 안내 ◆</td>
                        <td>2022-08-27</td>
                        <td>1847</td>
                    </tr>
                    <tr>
                        <td>50</td>
                        <td>영등포</td>
                        <td>◆ 영등포관 주차장 환경 개선 공사 안내 ◆</td>
                        <td>2022-08-18</td>
                        <td>235</td>
                    </tr>
                    <tr>
                        <td>49</td>
                        <td>건대입구</td>
                        <td>[롯데시네마 건대입구 아르떼 운영 종료 안내]</td>
                        <td>2022-08-18</td>
                        <td>282</td>
                    </tr>
                    <tr>
                        <td>48</td>
                        <td>용인역북</td>
                        <td>[화재경보 오작동으로 인한 환불 및 무료관람권 지급 안내]</td>
                        <td>2022-08-19</td>
                        <td>187</td>
                    </tr>
                    <tr>
                        <td>47</td>
                        <td>평촌(범계역)</td>
                        <td>평촌관 8/8(월) 화재경보기 오작동으로 인한 상영 중단 관련 안내</td>
                        <td>2022-08-09</td>
                        <td>301</td>
                    </tr>
                    <tr>
                        <td>46</td>
                        <td>송탄</td>
                        <td>◆ 송탄관 주차 안내 ◆</td>
                        <td>2022-08-08</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>45</td>
                        <td>광복</td>
                        <td>[롯데시네마 광복관 정상 영업 안내]</td>
                        <td>2022-06-02</td>
                        <td>531</td>
                    </tr>
                    <tr>
                        <td>44</td>
                        <td>광복</td>
                        <td>[롯데시네마 광복관 휴점 안내]</td>
                        <td>2022-05-30</td>
                        <td>564</td>
                    </tr>
                </tbody>
            </table>
            <div class="pasing2">
                <ul>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                </ul>
            </div>
        </div>
        <div class="ad_wrap">
            <div class="ad">
                <a href="#" class="banner_ad1">EBS 인기 애니 '엄마 까투리' 첫 극장판 탄생
                    도시로 간 까투리 가족
                    9월 8일, 까투리기차 출발합니다!</a>
                <a class="banner_ad2" href="#">현대해상 다이렉트 자동차보험
                신규 자동차 보험 30만원 이상 가입시
                롯데 3만원 상품권 지급!</a>
            </div>
        </div>
    </main>

    <footer id="footer" class="footer">
        <div class="term">
            <h2>사이트 이용안내</h2>
            <ul>
                <li class="term1"><a href="#">회원약관</a></li>
                <li class="term1 pi"><a href="#">개인정보처리방침</a></li>
                <li class="term1"><a href="#">이메일무단수집거부</a></li>
                <li class="term1"><a href="#">영상정보처리기기 운영및 관리방침</a></li>
                <li class="term1"><a href="#">L.POINT회원안내</a></li>
                <li class="term1"><a href="#">배정기준</a></li>
                <li class="term1"><a href="#">채용안내</a></li>
                <li class="term1"><a href="#">광고/임대문의</a></li>
                <li class="term1"><a href="#">윤리경영</a></li>
                <li><a href="#">기업정보</a></li>
            </ul>
        </div>

        <div class="fb">
            <div class="fb_txt1">
                <address>서울특별시 송파구 올림픽로 300 롯데월드타워 27층</address>
                <p>고객센터 1544-8855</p>
            </div>
            <div class="fb_txt2">
                <p>대표이사 최병환</p>
                <p>사업자등록번호 313-87-00979</p>
                <p>통신판매업신고번호 제1184호</p>
                개인정보 보호 최고 책임자 김무성
            </div>
            <p>COPYRIGHT©LOTTE CINEMA ALL RIGHT RESERVED.</p>
        </div>

        <div class="award">
            <h2 class="blind">수상내역</h2>
            <ul>
                <li><a href="#" class="award1">NCSI 영화관부문 7년 연속 1위</a></li>   
                <li><a href="#" class="award2">KCSI 영화관부문 7년 연속 1위(총12회)</a></li>
                <li><a href="#" class="award3">KS-SQI 영화관부문 10년 연속 1위(총13회)</a></li>
                <li><a href="#" class="award4">올해의 브랜드대상 영화관부문 10년 연속 1위</a></li>
                <li><a href="#" class="award5">그린스타 영화관 부문 4년 연속 1위</a></li>
                <li><a href="#" class="award6">대한민국 브랜드스타 영화관 부문 1위</a></li>
                <li><a href="#" class="award7">가족친화 인증기업 선정</a></li>
                <li><a href="#" class="award8">2020앤어워드 소셜미디어브랜드분야 WINNER수상</a></li>
            </ul>
        </div>
    </footer>
    </div>
</body>
</html>