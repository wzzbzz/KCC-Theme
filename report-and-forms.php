<?php

/* Template Name: Report & Forms */ ?>

<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Groups</title>



    <!-- Favicon -->

    <link

      rel="shortcut icon"

      type="image/jpg"

      href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png"

    />



    <!-- css links -->

    <link

      href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css"

      rel="stylesheet"

    />

    <link

      href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css"

      rel="stylesheet"

    />

    <link

      href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css"

      rel="stylesheet"

    />

    <link

      href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css"

      rel="stylesheet"

    />

    <link

      rel="stylesheet"

      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"

    />

    <link

      href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css"

      rel="stylesheet"

    />

    <link

      href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css"

      rel="stylesheet"

    />

    <link

      href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css"

      rel="stylesheet"

    />

    <link

      href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleen.css"

      rel="stylesheet"

    />

    <link

      href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleenres.css"

      rel="stylesheet"

    />

	  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/wcc_custom_style.css" rel="stylesheet">



    <style>

      .table td,

      .table th {

        font-size: 14px;

      }



      .my_resources_table .table tr td:nth-child(8) {

        border-radius: 0;

      }



      .my_resources_table .table tr td:nth-child(9) {

        border-radius: 0 15px 15px 0;

      }



      .report_forms_btn {

        padding: 1.3vh 3vw;

        border-radius: 0.5rem;

      }



      .memebr_tab_pills ul.report_forms_nav {

        width: 100%;

        display: flex;

        justify-content: space-around;

      }



      .memebr_tab_pills .nav-item a.nav-link {

        padding: 2vh 2vw;

      }

    </style>

  </head>



  <body class="main_all_bg_Sec">

    <div class="main_side_bar_left">

      <div class="main_menu_sec">

        <div class="top_logo_sec">

          <a href="#" class="d-flex align-items-center">

            <img

              src="<?php echo get_template_directory_uri(); ?>/assets/images/small_logo.png"

              class="img-fluid small_logo"

            />

            <img

              src="<?php echo get_template_directory_uri(); ?>/assets/images/opn_menu_logo.png"

              class="img-fluid side_open_logo"

            />

          </a>

        </div>

        <div class="center_logo_sec">

          <div class="main_menu_Sec active">

            <a href="<?php echo get_site_url(); ?>/dashboard-home/">

              <div class="menu_icon">

                <img

                  src="<?php echo get_template_directory_uri(); ?>/assets/images/home_icon.png"

                  class="img-fluid normal_icon"

                />

                <img

                  src="<?php echo get_template_directory_uri(); ?>/assets/images/active_home_icon.png"

                  class="img-fluid active_icon"

                />

              </div>

              <div class="side_text_view">

                <p>Home</p>

              </div>

            </a>

          </div>

          <div class="main_menu_Sec">

            <a href="<?php echo get_site_url(); ?>/dashboard/">

              <div class="menu_icon">

                <img

                  src="<?php echo get_template_directory_uri(); ?>/assets/images/dashboard_icon.png"

                  class="img-fluid normal_icon"

                />

                <img

                  src="<?php echo get_template_directory_uri(); ?>/assets/images/active_dashboard_icon.png"

                  class="img-fluid active_icon"

                />

              </div>

              <div class="side_text_view">

                <p>My Dashboard</p>

              </div>

            </a>

          </div>



          <div class="main_menu_Sec">

            <a href="#">

              <div class="menu_icon">

                <img

                  src="<?php echo get_template_directory_uri(); ?>/assets/images/knowlage_icon.png"

                  class="img-fluid normal_icon"

                />

                <img

                  src="<?php echo get_template_directory_uri(); ?>/assets/images/active_knowlage_icon.png"

                  class="img-fluid active_icon"

                />

              </div>

              <div class="side_text_view">

                <p>Knowledge Center</p>

              </div>

            </a>

          </div>

          <div class="main_menu_Sec">

            <a href="<?php echo get_site_url(); ?>/dashboard-coordination-center/">

              <div class="menu_icon">

                <img

                  src="<?php echo get_template_directory_uri(); ?>/assets/images/coordination_icon.png"

                  class="img-fluid normal_icon"

                />

                <img

                  src="<?php echo get_template_directory_uri(); ?>/assets/images/active_coordination_icon.png"

                  class="img-fluid active_icon"

                />

              </div>

              <div class="side_text_view">

                <p>Coordination Center</p>

              </div>

            </a>

          </div>

          <div class="main_menu_Sec">

            <a href="<?php echo get_site_url(); ?>/event-calendar">

              <div class="menu_icon">

                <img

                  src="<?php echo get_template_directory_uri(); ?>/assets/images/calender_icon.png"

                  class="img-fluid normal_icon"

                />

                <img

                  src="<?php echo get_template_directory_uri(); ?>/assets/images/active_calender_icon.png"

                  class="img-fluid active_icon"

                />

              </div>

              <div class="side_text_view">

                <p>Calendar</p>

              </div>

            </a>

          </div>

          <div class="main_menu_Sec">

            <a href="#">

              <div class="menu_icon">

                <img

                  src="<?php echo get_template_directory_uri(); ?>/assets/images/resources_icon.png"

                  class="img-fluid normal_icon"

                />

                <img

                  src="<?php echo get_template_directory_uri(); ?>/assets/images/active_resources_icon.png"

                  class="img-fluid active_icon"

                />

              </div>

              <div class="side_text_view">

                <p>My Resources</p>

              </div>

            </a>

          </div>

        </div>

        <div class="bottom_logo_sec">

          <div class="main_menu_Sec">

            <a href="<?php echo get_site_url(); ?>/dashboard-donate/">

              <div class="menu_icon">

                <img

                  src="<?php echo get_template_directory_uri(); ?>/assets/images/donate_icon.png"

                  class="img-fluid"

                />

              </div>

              <div class="side_text_view">

                <p>Donate</p>

              </div>

            </a>

          </div>

          <div class="main_menu_Sec">

            <a href="<?php echo get_site_url(); ?>/my-tickets-support/">

              <div class="menu_icon">

                <img

                  src="<?php echo get_template_directory_uri(); ?>/assets/images/help_support_icon.png"

                  class="img-fluid"

                />

              </div>

              <div class="side_text_view">

                <p>Help & Support</p>

              </div>

            </a>

          </div>

          <div class="main_menu_Sec">

            <a href="#">

              <div class="menu_icon">

                <img

                  src="<?php echo get_template_directory_uri(); ?>/assets/images/setting_icon.png"

                  class="img-fluid"

                />

              </div>

              <div class="side_text_view">

                <p>Settings</p>

              </div>

            </a>

          </div>

        </div>

      </div>

    </div>



    <div class="col-xl-12">

      <div class="row justify-content-end mt-3">

        <?php include('user_topbar.php')?>

        <div class="col-xl-11 col-lg-11 col-md-11 col-10 my-4">

          <div class="donation_tab_pills col-xl-11">

            <div class="donate_details_main">

              <img

                src="<?php echo get_template_directory_uri(); ?>/assets/images/detail_click.png"

                class="img-fluid membergroup-img"

                alt="image"

              />

              <div class="donation_detail">

                <div class="d-flex align-items-center flex-wrap">

                  <h5>Group Name</h5>

                  <span>Member only</span>

                </div>

                <div class="donate_btn_right">

                  <button class="btn now_donate">

                    <img

                      src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png"

                    />

                    Join Group

                  </button>

                </div>

              </div>

            </div>

            <div class="d-flex align-items-center flex-wrap">

              <h5 class="parent-member parent-member col-lg-3 col-md-12 row">

                <img

                  class="image1"

                  src="<?php echo get_template_directory_uri(); ?>/assets/images/message_5_icon.png"

                />

                <img

                  class="image2"

                  src="<?php echo get_template_directory_uri(); ?>/assets/images/message_4_icon.png"

                />

                <img

                  class="image3"

                  src="<?php echo get_template_directory_uri(); ?>/assets/images/message_3_icon.png"

                />

                <img

                  class="image4"

                  src="<?php echo get_template_directory_uri(); ?>/assets/images/message_2_icon.png"

                />

                <img

                  class="image5"

                  src="<?php echo get_template_directory_uri(); ?>/assets/images/message_1_icon.png"

                />

                <span class="image6">+25K</span>

              </h5>

              <span>

                <b>Manager</b>

                <img

                  class="image1"

                  src="<?php echo get_template_directory_uri(); ?>/assets/images/message_5_icon.png"

                />

                <span>You</span></span

              >

            </div>

            <div class="about_donate">

              <p>

                Lorem Ipsum is simply dummy text of the printing and typesetting

                industry. Lorem Ipsum has been the industry's standard dummy

                text ever since the 1500s, when an unknown printer took a galley

                of type and scrambled it to make a type specimen book. It has

                survived not only five centuries, but also the leap into

                electronic typesetting, remaining essentially unchanged.

              </p>

            </div>

          </div>

        </div>

        <div class="col-xl-11 col-lg-11 col-md-11 col-10 my-4">

          <div class="memebr_tab_pills col-xl-11">

            <ul

              class="nav nav-pills mb-3 report_forms_nav"

              id="pills-tab"

              role="tablist"

            >

              <li class="nav-item">

                <a

                  class="nav-link"

                  id="pills-feeds-tab"

                  data-toggle="pill"

                  href="#pills-feeds"

                  role="tab"

                  aria-controls="pills-feeds"

                  aria-selected="true"

                  >Feeds</a

                >

              </li>

              <li class="nav-item">

                <a

                  class="nav-link"

                  id="pills-members-tab"

                  data-toggle="pill"

                  href="#pills-members"

                  role="tab"

                  aria-controls="pills-members"

                  aria-selected="false"

                  >Members</a

                >

              </li>

              <li class="nav-item">

                <a

                  class="nav-link"

                  id="pills-blogs-tab"

                  data-toggle="pill"

                  href="#pills-blogs"

                  role="tab"

                  aria-controls="pills-blogs"

                  aria-selected="false"

                  >Blogs</a

                >

              </li>

              <li class="nav-item">

                <a

                  class="nav-link"

                  id="pills-annoucements-tab"

                  data-toggle="pill"

                  href="#pills-annoucements"

                  role="tab"

                  aria-controls="pills-annoucements"

                  aria-selected="false"

                  >Annoucements</a

                >

              </li>

              <li class="nav-item">

                <a

                  class="nav-link active"

                  id="pills-reports-tab"

                  data-toggle="pill"

                  href="#pills-reports"

                  role="tab"

                  aria-controls="pills-reports"

                  aria-selected="false"

                  >Reports & Forms</a

                >

              </li>

              <li class="nav-item">

                <a

                  class="nav-link"

                  id="pills-media-tab"

                  data-toggle="pill"

                  href="#pills-media"

                  role="tab"

                  aria-controls="pills-media"

                  aria-selected="false"

                  >Media & Resources</a

                >

              </li>

            </ul>

            <div class="tab-content" id="pills-tabContent">

              <div

                class="tab-pane fade"

                id="pills-feeds"

                role="tabpanel"

                aria-labelledby="pills-feeds-tab"

              >

                ...

              </div>

              <div

                class="tab-pane fade show active"

                id="pills-reports"

                role="tabpanel"

                aria-labelledby="pills-reports-tab"

              >

                <ul

                  class="nav nav-pills nav-pills1 mb-3"

                  id="pills1-tab"

                  role="tablist"

                >

                  <li class="nav-item">

                    <a

                      class="nav-link nav2-link active"

                      id="pills-members1-tab"

                      data-toggle="pill"

                      href="#pills-members1"

                      role="tab"

                      aria-controls="pills-members1"

                      aria-selected="true"

                      >Disaster Situational Report</a

                    >

                  </li>

                  <li class="nav-item">

                    <a

                      class="nav-link nav2-link"

                      id="pills-joinmembers-tab"

                      data-toggle="pill"

                      href="#pills-joinmembers"

                      role="tab"

                      aria-controls="pills-joinmembers"

                      aria-selected="false"

                      >Organization Volunteer Request</a

                    >

                  </li>

                  <li class="nav-item">

                    <a

                      class="nav-link nav2-link"

                      id="pills-joinmembers-tab"

                      data-toggle="pill"

                      href="#pills-joinmembers"

                      role="tab"

                      aria-controls="pills-joinmembers"

                      aria-selected="false"

                      >Survivors Needs intake form</a

                    >

                  </li>

                  <li class="nav-item">

                    <a

                      class="nav-link nav2-link"

                      id="pills-joinmembers-tab"

                      data-toggle="pill"

                      href="#pills-joinmembers"

                      role="tab"

                      aria-controls="pills-joinmembers"

                      aria-selected="false"

                      >After Action Report</a

                    >

                  </li>

                </ul>



                <div class="tab-content" id="pills1-tabContent">

                  <div

                    class="tab-pane fade show active"

                    id="pills-members1"

                    role="tabpanel"

                    aria-labelledby="pills-members1-tab"

                  >

                    <div

                      class="d-flex align-items-center justify-content-between flex-wrap px-0"

                    >

                      <div class="my_resources_table">

                        <div class="main_table_sec">

                          <div class="table-responsive">

                            <table class="table">

                              <thead>

                                <tr>

                                  <th scope="col">Date</th>

                                  <th scope="col">Event</th>

                                  <th scope="col">City</th>

                                  <th scope="col">State</th>

                                  <th scope="col">Country</th>

                                  <th scope="col">Contact person</th>

                                  <th scope="col">Email</th>

                                  <th scope="col">Phone</th>

                                  <th scope="col"></th>

                                </tr>

                              </thead>

                              <tbody>

                                <tr>

                                  <td>Sep 06, 2022</td>

                                  <td>Covid 19</td>

                                  <td>Brooklym</td>

                                  <td>New york</td>

                                  <td>United States</td>

                                  <td>Tirrell Richardson</td>

                                  <td>rahimur.rahman@jjay.edu</td>

                                  <td>787 895 8745</td>

                                  <td>

                                    <button

                                      class="btn btn_view report_forms_btn"

                                    >

                                      View

                                    </button>

                                  </td>

                                </tr>



                                <tr>

                                  <td>Sep 06, 2022</td>

                                  <td>Covid 19</td>

                                  <td>Brooklym</td>

                                  <td>New york</td>

                                  <td>United States</td>

                                  <td>Tirrell Richardson</td>

                                  <td>rahimur.rahman@jjay.edu</td>

                                  <td>787 895 8745</td>

                                  <td>

                                    <button

                                      class="btn btn_view report_forms_btn"

                                    >

                                      View

                                    </button>

                                  </td>

                                </tr>



                                <tr>

                                  <td>Sep 06, 2022</td>

                                  <td>Covid 19</td>

                                  <td>Brooklym</td>

                                  <td>New york</td>

                                  <td>United States</td>

                                  <td>Tirrell Richardson</td>

                                  <td>rahimur.rahman@jjay.edu</td>

                                  <td>787 895 8745</td>

                                  <td>

                                    <button

                                      class="btn btn_view report_forms_btn"

                                    >

                                      View

                                    </button>

                                  </td>

                                </tr>



                                <tr>

                                  <td>Sep 06, 2022</td>

                                  <td>Covid 19</td>

                                  <td>Brooklym</td>

                                  <td>New york</td>

                                  <td>United States</td>

                                  <td>Tirrell Richardson</td>

                                  <td>rahimur.rahman@jjay.edu</td>

                                  <td>787 895 8745</td>

                                  <td>

                                    <button

                                      class="btn btn_view report_forms_btn"

                                    >

                                      View

                                    </button>

                                  </td>

                                </tr>

                              </tbody>

                            </table>

                          </div>

                        </div>

                      </div>

                    </div>

                  </div>

                  <div

                    class="tab-pane fade"

                    id="pills-joinmembers"

                    role="tabpanel"

                    aria-labelledby="pills-joinmembers-tab"

                  >

                    <div class="grid-container">

                      <div href="#" class="mt-1 mr-1">

                        <div class="member_box grid-item text-center">

                          <img

                            src="<?php echo get_template_directory_uri(); ?>/assets/images/message_5_icon.png"

                          />

                          <div class="">

                            <h5 class="mt-2">

                              Josephine <br />

                              Arden

                            </h5>

                            <h6

                              class="mt-2"

                              style="font-weight: normal; font-size: 11px"

                            >

                              15 connect

                            </h6>

                          </div>

                          <div class="to_donate">

                            <button class="btn btn_donate mt-2">Accept</button>

                            <button class="btn btn_white">Decline</button>

                          </div>

                        </div>

                      </div>

                      <div href="#" class="mt-1 mr-1">

                        <div class="member_box grid-item text-center">

                          <img

                            src="<?php echo get_template_directory_uri(); ?>/assets/images/message_4_icon.png"

                          />

                          <div class="">

                            <h5 class="mt-2">

                              Josephine <br />

                              Arden

                            </h5>

                            <h6

                              class="mt-2"

                              style="font-weight: normal; font-size: 11px"

                            >

                              15 connect

                            </h6>

                          </div>

                          <div class="to_donate">

                            <button class="btn btn_donate mt-2">Accept</button>

                            <button class="btn btn_white">Decline</button>

                          </div>

                        </div>

                      </div>

                      <div href="#" class="mt-1 mr-1">

                        <div class="member_box grid-item text-center">

                          <img

                            src="<?php echo get_template_directory_uri(); ?>/assets/images/message_3_icon.png"

                          />

                          <div class="">

                            <h5 class="mt-2">

                              Josephine <br />

                              Arden

                            </h5>

                            <h6

                              class="mt-2"

                              style="font-weight: normal; font-size: 11px"

                            >

                              15 connect

                            </h6>

                          </div>

                          <div class="to_donate">

                            <button class="btn btn_donate mt-2">Accept</button>

                            <button class="btn btn_white">Decline</button>

                          </div>

                        </div>

                      </div>

                      <div href="#" class="mt-1 mr-1">

                        <div class="member_box grid-item text-center">

                          <img

                            src="<?php echo get_template_directory_uri(); ?>/assets/images/message_2_icon.png"

                          />

                          <div class="">

                            <h5 class="mt-2">

                              Josephine <br />

                              Arden

                            </h5>

                            <h6

                              class="mt-2"

                              style="font-weight: normal; font-size: 11px"

                            >

                              15 connect

                            </h6>

                          </div>

                          <div class="to_donate">

                            <button class="btn btn_donate mt-2">Accept</button>

                            <button class="btn btn_white">Decline</button>

                          </div>

                        </div>

                      </div>

                      <div href="#" class="mt-1">

                        <div class="member_box grid-item text-center">

                          <img

                            src="<?php echo get_template_directory_uri(); ?>/assets/images/message_1_icon.png"

                          />

                          <div class="">

                            <h5 class="mt-2">

                              Josephine <br />

                              Arden

                            </h5>

                            <h6

                              class="mt-2"

                              style="font-weight: normal; font-size: 11px"

                            >

                              15 connect

                            </h6>

                          </div>

                          <div class="to_donate">

                            <button class="btn btn_donate mt-2">Accept</button>

                            <button class="btn btn_white">Decline</button>

                          </div>

                        </div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

              <div

                class="tab-pane fade"

                id="pills-blogs"

                role="tabpanel"

                aria-labelledby="pills-blogs-tab"

              >

                ...

              </div>

              <div

                class="tab-pane fade"

                id="pills-annoucements"

                role="tabpanel"

                aria-labelledby="pills-annoucements-tab"

              >

                ...

              </div>

              <div

                class="tab-pane fade"

                id="pills-reports"

                role="tabpanel"

                aria-labelledby="pills-reports-tab"

              >

                ...

              </div>

              <div

                class="tab-pane fade"

                id="pills-media"

                role="tabpanel"

                aria-labelledby="pills-media-tab"

              >

                ...

              </div>

            </div>

          </div>



          <!--    <div class="btm_pagination_sec">

                    <nav aria-label="Page navigation example">

                        <ul class="pagination justify-content-end">

                            

                        <li>1</li>

                        <li>1</li>

                        <li>1</li>

                        <li>1</li>

                        <li>1</li>

                        

                        </ul>

                      </nav>

                </div> -->

        </div>

        <div

          class="col-xl-11 col-lg-11 col-md-10 col-10 main_footer_sec d-flex align-items-center flex-wrap"

        >

          <div class="col-xl-3 col-lg-3 col-md-3 col-12">

            <div class="footer_logo">

              <img

                src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_logo.png"

                class="img-fluid"

              />

            </div>

          </div>

          <div class="col-xl-8 col-lg-9 col-md-9 col-12">

            <div class="side_right_footer">

              <div class="social_icon_sec">

                <a href="#"

                  ><img

                    src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_linkdin.png"

                    class="img-fluid"

                /></a>

                <a href="#"

                  ><img

                    src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_fb.png"

                    class="img-fluid"

                /></a>

                <a href="#"

                  ><img

                    src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_twitter.png"

                    class="img-fluid"

                /></a>

                <a href="#"

                  ><img

                    src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_instra.png"

                    class="img-fluid"

                /></a>

              </div>

              <div class="linked_pages">

                <a href="<?php echo get_site_url(); ?>/">HOME</a>

                <a href="<?php echo get_site_url(); ?>/what-we-do/">WHAT WE DO</a>

                <a href="<?php echo get_site_url(); ?>/world-cares-center/"

                  >WORLD CARES CENTER</a

                >

                <a href="<?php echo get_site_url(); ?>/training/">TRAINING</a>

                <a href="<?php echo get_site_url(); ?>/cordination/"

                  >COORDINATION</a

                >

                <a href="<?php echo get_site_url(); ?>/blogs/">BLOG</a>

                <a href="<?php echo get_site_url(); ?>/contact-us/">CONTACT US</a>

                <a href="#">DONATE</a>

              </div>

              <div class="privercy_pag">

                <a href="<?php echo get_site_url(); ?>/terms-of-use/"

                  >TERMS OF USE</a

                >

                <a href="<?php echo get_site_url(); ?>/privacy-policy/"

                  >PRIVACY POLICY

                </a>

                <a href="#">SITEMAP</a>

              </div>

            </div>

            <div class="copy_right_Sec">

              <p>COPYRIGHT © 2020 ALL RIGHTS RESERVED</p>

            </div>

          </div>

        </div>

      </div>

    </div>



    <div

      class="modal fade"

      id="myModal"

      tabindex="-1"

      role="dialog"

      aria-labelledby="exampleModalCenterTitle"

      aria-hidden="true"

    >

      <div

        class="modal-dialog modal-xl modal-dialog-centered create_tickit modal-dialog-scrollable"

        role="document"

      >

        <div class="modal-content">

          <div class="modal-body">

            <div class="blog_grid">

              <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-4 col-4"></div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-4 text-center">

                  <h5 class="modal-title" id="exampleModalLongTitle">

                    Add Member

                  </h5>

                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-4">

                  <button

                    type="button"

                    class="close"

                    style="

                      font-weight: unset;

                      font-size: unset;

                      width: 25px;

                      height: 25px;

                      background: grey;

                      color: white;

                      border-radius: 50%;

                    "

                    data-dismiss="modal"

                  >

                    &times;

                  </button>

                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-12">

                  <div class="serch_sec_top">

                    <input

                      type="text"

                      class="form-control"

                      id="exampleInputEmail1"

                      aria-describedby="emailHelp"

                      placeholder="Search member here"

                    />

                  </div>

                </div>

              </div>



              <br />

              <div class="grid-container">

                <div href="#" class="mt-1 mr-1">

                  <div class="member_box grid-item text-center">

                    <img

                      src="<?php echo get_template_directory_uri(); ?>/assets/images/message_5_icon.png"

                    />

                    <div class="">

                      <h5 class="mt-2">

                        Josephine <br />

                        Arden

                      </h5>

                      <h6

                        class="mt-2"

                        style="font-weight: normal; font-size: 11px"

                      >

                        15 connects

                      </h6>

                    </div>

                    <div class="to_donate">

                      <button class="btn btn_donate mt-2">Invite</button>

                    </div>

                  </div>

                </div>

                <div href="#" class="mt-1 mr-1">

                  <div class="member_box grid-item text-center">

                    <img

                      src="<?php echo get_template_directory_uri(); ?>/assets/images/message_4_icon.png"

                    />

                    <div class="">

                      <h5 class="mt-2">

                        Josephine <br />

                        Arden

                      </h5>

                      <h6

                        class="mt-2"

                        style="font-weight: normal; font-size: 11px"

                      >

                        15 connects

                      </h6>

                    </div>

                    <div class="to_donate">

                      <button class="btn btn_donate mt-2">Invite</button>

                    </div>

                  </div>

                </div>

                <div href="#" class="mt-1 mr-1">

                  <div class="member_box grid-item text-center">

                    <img

                      src="<?php echo get_template_directory_uri(); ?>/assets/images/message_3_icon.png"

                    />

                    <div class="">

                      <h5 class="mt-2">

                        Josephine <br />

                        Arden

                      </h5>

                      <h6

                        class="mt-2"

                        style="font-weight: normal; font-size: 11px"

                      >

                        15 connects

                      </h6>

                    </div>

                    <div class="to_donate">

                      <button class="btn btn_donate mt-2">Invite</button>

                    </div>

                  </div>

                </div>

                <div href="#" class="mt-1 mr-1">

                  <div class="member_box grid-item text-center">

                    <img

                      src="<?php echo get_template_directory_uri(); ?>/assets/images/message_2_icon.png"

                    />

                    <div class="">

                      <h5 class="mt-2">

                        Josephine <br />

                        Arden

                      </h5>

                      <h6

                        class="mt-2"

                        style="font-weight: normal; font-size: 11px"

                      >

                        15 connects

                      </h6>

                    </div>

                    <div class="to_donate">

                      <button class="btn btn_donate mt-2">Invite</button>

                    </div>

                  </div>

                </div>

                <div href="#" class="mt-1 mr-1">

                  <div class="member_box grid-item text-center">

                    <img

                      src="<?php echo get_template_directory_uri(); ?>/assets/images/message_1_icon.png"

                    />

                    <div class="">

                      <h5 class="mt-2">

                        Josephine <br />

                        Arden

                      </h5>

                      <h6

                        class="mt-2"

                        style="font-weight: normal; font-size: 11px"

                      >

                        15 connects

                      </h6>

                    </div>

                    <div class="to_donate">

                      <button class="btn btn_donate mt-2">Invite</button>

                    </div>

                  </div>

                </div>

                <div href="#" class="mt-1 mr-1">

                  <div class="member_box grid-item text-center">

                    <img

                      src="<?php echo get_template_directory_uri(); ?>/assets/images/message_5_icon.png"

                    />

                    <div class="">

                      <h5 class="mt-2">

                        Josephine <br />

                        Arden

                      </h5>

                      <h6

                        class="mt-2"

                        style="font-weight: normal; font-size: 11px"

                      >

                        15 connects

                      </h6>

                    </div>

                    <div class="to_donate">

                      <button class="btn btn_donate mt-2 disabled">

                        Invited

                      </button>

                    </div>

                  </div>

                </div>

                <div href="#" class="mt-1 mr-1">

                  <div class="member_box grid-item text-center">

                    <img

                      src="<?php echo get_template_directory_uri(); ?>/assets/images/message_5_icon.png"

                    />

                    <div class="">

                      <h5 class="mt-2">

                        Josephine <br />

                        Arden

                      </h5>

                      <h6

                        class="mt-2"

                        style="font-weight: normal; font-size: 11px"

                      >

                        15 connects

                      </h6>

                    </div>

                    <div class="to_donate">

                      <button class="btn btn_donate mt-2">Invite</button>

                    </div>

                  </div>

                </div>

                <div href="#" class="mt-1 mr-1">

                  <div class="member_box grid-item text-center">

                    <img

                      src="<?php echo get_template_directory_uri(); ?>/assets/images/message_5_icon.png"

                    />

                    <div class="">

                      <h5 class="mt-2">

                        Josephine <br />

                        Arden

                      </h5>

                      <h6

                        class="mt-2"

                        style="font-weight: normal; font-size: 11px"

                      >

                        15 connects

                      </h6>

                    </div>

                    <div class="to_donate">

                      <button class="btn btn_donate mt-2 disabled">

                        Invited

                      </button>

                    </div>

                  </div>

                </div>

              </div>

              <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-4 col-4"></div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-4">

                  <br />

                  <div class="apply_btn active">

                    <button class="btn btn_apply">Done</button>

                  </div>

                </div>

              </div>

            </div>

          </div>

          <!--   <div class="modal-footer" style="border-top:none;">

		

		  <center>

          <div class="apply_btn active">

                        <button class="btn btn_apply">Done</button>

                    </div>

					</center>

                    </div> -->

        </div>

      </div>

    </div>

    <div

      class="modal fade"

      id="removeModal"

      tabindex="-1"

      role="dialog"

      aria-labelledby="exampleModalCenterTitle"

      aria-hidden="true"

    >

      <div

        class="modal-dialog modal-dialog-centered create_tickit modal-dialog-scrollable"

        role="document"

      >

        <div class="modal-content">

          <div class="modal-body">

            <div class="blog_grid">

              <div class="row">

                <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center">

                  <h5

                    class="modal-title"

                    style="display: inline-block"

                    id="exampleModalLongTitle"

                  >

                    Remove Member

                  </h5>

                  <button

                    type="button"

                    class="close"

                    style="

                      float: right;

                      font-weight: unset;

                      font-size: unset;

                      width: 25px;

                      height: 25px;

                      background: grey;

                      color: white;

                      border-radius: 50%;

                    "

                    data-dismiss="modal"

                  >

                    &times;

                  </button>

                </div>

              </div>

              <br />

              <div class="row">

                <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center">

                  <i

                    class="fa fa-trash"

                    style="font-size: 70px; color: #f9671d"

                  ></i>

                  <br /><br />

                  <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-6 col-6">

                      <div class="apply_btn active">

                        <button class="btn btn_apply d-inline">

                          <i class="fa fa-check"></i> Confirm

                        </button>

                      </div>

                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-6">

                      <div class="apply_btn active">

                        <button

                          class="btn btn_apply"

                          style="color: #f9671d; background: #fff"

                        >

                          Cancel

                        </button>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

    <!-- js links -->

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>



    <script>

      $(document).ready(function () {

        $(".next").click(function () {

          let previous = $(this).closest("fieldset").attr("id");

          let next = $("#" + this.id)

            .closest("fieldset")

            .next("fieldset")

            .attr("id");

          if (previous == "step0") {

            console.log(previous);

            $("#" + next).show();

            $("#" + previous).hide();

          } else if (previous == "step1") {

            $("#" + next).show();

            $("#" + previous).hide();

          }

        });

      });

      $(".previous").click(function () {

        let current = $(this).closest("fieldset").attr("id");

        let previous = $("#" + this.id)

          .closest("fieldset")

          .prev("fieldset")

          .attr("id");

        $("#" + previous).show();

        $("#" + current).hide();

      });

    </script>



    <!-- Code injected by live-server -->

    <script>

      // <![CDATA[  <-- For SVG support

      if ("WebSocket" in window) {

        (function () {

          function refreshCSS() {

            var sheets = [].slice.call(document.getElementsByTagName("link"));

            var head = document.getElementsByTagName("head")[0];

            for (var i = 0; i < sheets.length; ++i) {

              var elem = sheets[i];

              var parent = elem.parentElement || head;

              parent.removeChild(elem);

              var rel = elem.rel;

              if (

                (elem.href && typeof rel != "string") ||

                rel.length == 0 ||

                rel.toLowerCase() == "stylesheet"

              ) {

                var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, "");

                elem.href =

                  url +

                  (url.indexOf("?") >= 0 ? "&" : "?") +

                  "_cacheOverride=" +

                  new Date().valueOf();

              }

              parent.appendChild(elem);

            }

          }

          var protocol =

            window.location.protocol === "http:" ? "ws://" : "wss://";

          var address =

            protocol + window.location.host + window.location.pathname + "/ws";

          var socket = new WebSocket(address);

          socket.onmessage = function (msg) {

            if (msg.data == "reload") window.location.reload();

            else if (msg.data == "refreshcss") refreshCSS();

          };

          if (

            sessionStorage &&

            !sessionStorage.getItem("IsThisFirstTime_Log_From_LiveServer")

          ) {

            console.log("Live reload enabled.");

            sessionStorage.setItem("IsThisFirstTime_Log_From_LiveServer", true);

          }

        })();

      } else {

        console.error(

          "Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading."

        );

      }

      // ]]>

    </script>

  </body>

</html>