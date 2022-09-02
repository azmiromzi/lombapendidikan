@extends('layouts.app')

@section('content')
    <section class="site-banner overflow-hidden mb-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-12 site-title " data-aos="fade-up"
                data-aos-duration="1000">
                    <h3 class="title-text">WE ARE ITM</h3>
                    <p>ITM is a website where you can find information about programming, here you can also follow the existing material to create a website, and you can read various kinds of material or information that we have created, or if you want to provide material you can add it yourself. to share the information you have</p>

                    <div class="site-buttons">
                        <div class="d-flex flex-row flex-wrap">
                            <button type="button" class="btn button primary-button mr-4 text-uppercase">Read More</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 banner-image " data-aos="fade-down"
                data-aos-duration="1000">
                    <img src="{{ asset('img/marketing/Scenes/Scenes01.svg') }}" alt="banner-img" class="img-fluid">

                </div>
            </div>
        </div>
    </section>

    <section class="about-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-image" data-aos="fade-down"
                    data-aos-easing="linear"
                    data-aos-duration="500">
                        <img src="{{ asset('img/marketing/Scenes/Scenes08.svg') }}" alt="About us" class="img-fluid" style="width: 650px;" >
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 about-title">
                    <h2 class="text-uppercase pt-5" data-aos="fade-up"
                    data-aos-easing="linear"
                    data-aos-duration="500">
                        <span>Our</span>
                        <span>Background</span>
                    </h2>
                    <div class="paragraph py-4 w-75" data-aos="fade-up"
                    data-aos-easing="linear"
                    data-aos-duration="500"
                    data-aos-delay="100">
                        <p class="text-sm " style="font-weight: 500">
                            The background of the creation of this website is to provide information to students or the public who want to know about programming and want to learn it, here we provide basic information about programming for beginners who want to learn programming from the very bottom, and we also want to share knowledge so that our knowledge is not in vain and so that it can be conveyed to all people
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="visimisi-area">
        <div class="container-fluid p-5">
            <div class="row justify-content-evenly">
                <div class="col-lg-4 text-center align-items-center" data-aos="fade-down-right"
                data-aos-easing="linear"
                data-aos-duration="500"
                data-aos-delay="100">
                    <h3 class="mt-lg-5 mb-lg-5">Vision</h3>
                    <h5 class="mb-lg-3" style="letter-spacing: 1px">Shaping the future and humanity through technology</h5>
                    <p class="">We understand Technology is an important part of our society and will deliver us to a brighter future. But in the meantime, we also realized human is the most crucial part to encourage technology and make a brighter future for the world.</p>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="about-image " data-aos="fade-down-right"
                        data-aos-easing="linear"
                        data-aos-duration="500"
                        data-aos-delay="100"
                    >
                        {{-- <img src="{{ asset('img/marketing/Elements/Elements02.svg') }}" style="width: 350px" class="img-fluid" alt=""> --}}
                        <svg class="img-fluid" width="1080" height="1080" viewBox="0 0 1080 1080" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="elements02" clip-path="url(#clip0_1_2)">
                            <g id="phone">
                            <path id="Vector" d="M640.035 915.889H399.068C379.523 915.889 366.365 900.044 369.679 880.498L466.728 308.147C470.042 288.602 488.574 272.757 508.119 272.757H749.085C768.631 272.757 781.789 288.602 778.475 308.147L681.426 880.498C678.112 900.044 659.58 915.889 640.035 915.889Z" fill="#5CA4E6"/>
                            <path id="Vector_2" d="M609.938 915.889H368.971C349.426 915.889 336.267 900.044 339.582 880.498L436.631 308.147C439.945 288.602 458.476 272.757 478.022 272.757H718.988C738.534 272.757 751.692 288.602 748.378 308.147L651.329 880.498C648.015 900.044 629.483 915.889 609.938 915.889Z" fill="#D1E8F7"/>
                            <path id="Vector_3" d="M611.323 896.754H374.075C363.926 896.754 357.094 888.527 358.815 878.378L455.145 310.268C456.866 300.119 466.488 291.892 476.637 291.892H713.885C724.034 291.892 730.866 300.119 729.145 310.268L632.815 878.378C631.094 888.527 621.472 896.754 611.323 896.754Z" fill="white"/>
                            </g>
                            <g id="card1">
                            <path id="Vector_4" d="M633.779 483.307H406.93L430.573 352.691C432.122 344.727 439.834 338.271 447.797 338.271H661.987C669.951 338.271 675.151 344.727 673.602 352.691L651.003 468.887C649.454 476.851 641.743 483.307 633.779 483.307Z" fill="url(#paint0_linear_1_2)"/>
                            <path id="Vector_5" d="M615.495 466.5H275.888C267.924 466.5 262.724 460.044 264.273 452.08L286.872 335.885C288.421 327.921 296.132 321.465 304.096 321.465H643.702C651.666 321.465 656.867 327.921 655.318 335.885L632.719 452.08C631.17 460.044 623.458 466.5 615.495 466.5Z" fill="#FEBB94"/>
                            <path id="Vector_6" d="M435.129 413.068C435.129 413.068 452.595 409.389 458.135 417.883C463.675 426.377 469.214 442.334 481.771 440.265C494.328 438.196 503.931 396.462 516.488 396.832C529.045 397.201 523.505 424.531 537.17 424.9C550.835 425.269 547.511 409.758 558.591 409.758C569.671 409.758 565.977 442.997 580.381 443.366C594.784 443.736 593.307 400.525 615.097 401.263" stroke="white" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round"/>
                            <path id="Vector_7" d="M384.143 407.326C393.038 385.477 384.474 361.343 365.015 353.421C345.556 345.499 322.571 356.789 313.676 378.638C304.781 400.487 313.345 424.621 332.804 432.543C352.263 440.465 375.249 429.175 384.143 407.326Z" stroke="#FF967C" stroke-width="16.5208" stroke-miterlimit="10" stroke-linecap="round"/>
                            <path id="Vector_8" d="M367.028 428.468C356.761 435.24 344.18 437.175 332.804 432.543C313.345 424.621 304.781 400.487 313.676 378.638C322.571 356.789 345.556 345.499 365.015 353.421" stroke="white" stroke-width="16.5208" stroke-miterlimit="10" stroke-linecap="round"/>
                            <path id="Vector_9" d="M448.257 350.89H525.113" stroke="white" stroke-width="10" stroke-miterlimit="10" stroke-linecap="round"/>
                            <path id="Vector_10" opacity="0.6" d="M444.615 372.088H475.884" stroke="white" stroke-width="10" stroke-miterlimit="10" stroke-linecap="round"/>
                            </g>
                            <g id="card2">
                            <path id="Vector_11" d="M593.828 881.943L383.196 882.943C375.232 882.943 370.032 876.487 371.581 868.523L394.18 752.327C395.729 744.363 403.44 737.907 411.404 737.907L622.036 736.907C629.999 736.907 635.2 743.363 633.651 751.327L611.052 867.523C609.503 875.487 601.791 881.943 593.828 881.943Z" fill="#FEBB94"/>
                            <path id="Vector_12" d="M406.361 846.756C412.355 799.878 456.895 761.877 505.845 761.877C554.794 761.877 589.618 799.878 583.624 846.756" stroke="#FF967C" stroke-width="16.5208" stroke-miterlimit="10" stroke-linecap="round"/>
                            <path id="Vector_13" d="M406.361 846.756C412.355 799.878 456.895 761.877 505.845 761.877C530.072 761.877 550.838 771.186 564.909 786.273" stroke="white" stroke-width="16.5208" stroke-miterlimit="10" stroke-linecap="round"/>
                            <path id="Vector_35" d="M490.539 843.332H514.06" stroke="white" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round"/>
                            <path id="Vector_36" opacity="0.5" d="M495.328 853.539H507.089" stroke="white" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round"/>
                            <path id="Vector_37" d="M474.873 822.953L492.92 810.368L505.633 818.834L522.553 806.58" stroke="white" stroke-width="6.50414" stroke-linecap="round" stroke-linejoin="round"/>
                            <path id="Vector_38" d="M509.545 801.239H527.544V819.049" stroke="white" stroke-width="6.50414" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <g id="card-bl-1">
                            <path id="Vector_14" d="M568.64 720.479H417.822C409.772 720.479 404.331 713.953 405.67 705.903L437.522 514.311C438.86 506.261 446.471 499.735 454.52 499.735H605.338C613.388 499.735 618.829 506.261 617.491 514.311L585.638 705.903C584.3 713.953 576.69 720.479 568.64 720.479Z" fill="url(#paint1_linear_1_2)"/>
                            <path id="Vector_15" d="M464.264 601.052H443.701C442.57 601.09 441.485 601.512 440.626 602.249C439.767 602.985 439.184 603.993 438.974 605.105L427.806 672.282C427.697 672.779 427.704 673.295 427.825 673.789C427.946 674.284 428.179 674.744 428.505 675.135C428.831 675.526 429.242 675.837 429.706 676.045C430.171 676.253 430.676 676.353 431.185 676.336H451.748C452.879 676.297 453.964 675.875 454.823 675.138C455.683 674.402 456.265 673.394 456.476 672.282L467.644 605.105C467.752 604.608 467.745 604.092 467.624 603.598C467.503 603.104 467.27 602.643 466.944 602.253C466.618 601.862 466.208 601.55 465.743 601.342C465.279 601.134 464.773 601.035 464.264 601.052Z" fill="white"/>
                            <path id="Vector_16" d="M501.782 624.036H481.219C480.087 624.074 479.003 624.496 478.144 625.233C477.284 625.97 476.702 626.977 476.491 628.09L469.144 672.282C469.036 672.779 469.043 673.295 469.164 673.789C469.285 674.283 469.518 674.744 469.844 675.135C470.17 675.525 470.58 675.837 471.045 676.045C471.509 676.253 472.015 676.352 472.524 676.335H493.087C494.218 676.297 495.303 675.875 496.162 675.138C497.021 674.402 497.604 673.394 497.814 672.282L505.161 628.09C505.269 627.592 505.263 627.077 505.142 626.582C505.02 626.088 504.788 625.628 504.462 625.237C504.136 624.846 503.725 624.535 503.261 624.327C502.796 624.118 502.29 624.019 501.782 624.036Z" fill="white"/>
                            <path id="Vector_17" d="M551.447 559.367H530.884C529.753 559.405 528.669 559.827 527.809 560.564C526.95 561.301 526.367 562.308 526.157 563.421L508.059 672.282C507.951 672.78 507.957 673.295 508.078 673.789C508.2 674.284 508.432 674.744 508.758 675.135C509.084 675.526 509.495 675.837 509.959 676.045C510.424 676.253 510.93 676.353 511.438 676.336H532.001C533.133 676.298 534.217 675.875 535.076 675.139C535.936 674.402 536.518 673.394 536.729 672.282L554.827 563.421C554.935 562.923 554.928 562.408 554.807 561.913C554.686 561.419 554.454 560.959 554.128 560.568C553.802 560.177 553.391 559.866 552.926 559.658C552.462 559.45 551.956 559.35 551.447 559.367Z" fill="white"/>
                            <path id="Vector_18" d="M586.833 587.586H566.27C565.139 587.624 564.054 588.046 563.195 588.783C562.336 589.52 561.753 590.527 561.543 591.639L548.136 672.282C548.028 672.779 548.034 673.295 548.156 673.789C548.277 674.283 548.509 674.744 548.835 675.134C549.161 675.525 549.572 675.837 550.036 676.045C550.501 676.253 551.007 676.352 551.515 676.335H572.078C573.21 676.297 574.294 675.875 575.153 675.138C576.013 674.402 576.595 673.394 576.806 672.282L590.213 591.639C590.321 591.142 590.314 590.627 590.193 590.132C590.072 589.638 589.839 589.178 589.513 588.787C589.187 588.396 588.776 588.084 588.312 587.876C587.848 587.668 587.342 587.569 586.833 587.586Z" fill="white"/>
                            <path id="Vector_19" d="M452.573 523.306H508.246" stroke="white" stroke-width="10" stroke-miterlimit="10" stroke-linecap="round"/>
                            <path id="Vector_20" d="M449.43 542.21H477.267" stroke="white" stroke-width="10" stroke-miterlimit="10" stroke-linecap="round"/>
                            <path id="Vector_21" opacity="0.6" d="M433.807 690.024H444.575" stroke="white" stroke-width="6" stroke-miterlimit="10" stroke-linecap="round"/>
                            <path id="Vector_22" opacity="0.6" d="M475.146 690.024H485.913" stroke="white" stroke-width="6" stroke-miterlimit="10" stroke-linecap="round"/>
                            <path id="Vector_23" opacity="0.6" d="M514.06 690.024H524.828" stroke="white" stroke-width="6" stroke-miterlimit="10" stroke-linecap="round"/>
                            <path id="Vector_24" opacity="0.6" d="M554.137 690.024H564.905" stroke="white" stroke-width="6" stroke-miterlimit="10" stroke-linecap="round"/>
                            </g>
                            <g id="card-bl-2">
                            <path id="Vector_25" d="M766.47 720.479H615.653C607.603 720.479 602.162 713.953 603.5 705.903L635.353 514.311C636.691 506.261 644.301 499.735 652.351 499.735H803.169C811.219 499.735 816.66 506.261 815.321 514.311L783.469 705.903C782.131 713.953 774.52 720.479 766.47 720.479Z" fill="url(#paint2_linear_1_2)"/>
                            <path id="Vector_26" d="M658.188 629.934H637.625C636.494 629.972 635.409 630.394 634.55 631.131C633.691 631.867 633.108 632.875 632.898 633.987L625.636 672.282C625.528 672.779 625.535 673.294 625.656 673.789C625.777 674.283 626.01 674.743 626.336 675.134C626.661 675.525 627.072 675.836 627.537 676.045C628.001 676.253 628.507 676.352 629.016 676.335H649.579C650.71 676.297 651.795 675.875 652.654 675.138C653.513 674.401 654.096 673.394 654.306 672.282L661.568 633.987C661.676 633.49 661.669 632.974 661.548 632.48C661.427 631.985 661.194 631.525 660.868 631.134C660.542 630.744 660.131 630.432 659.667 630.224C659.202 630.016 658.697 629.917 658.188 629.934Z" fill="white"/>
                            <path id="Vector_27" d="M707.378 570.635H686.815C685.684 570.673 684.6 571.095 683.74 571.832C682.881 572.568 682.298 573.576 682.088 574.688L666.975 672.282C666.867 672.779 666.874 673.294 666.995 673.789C667.116 674.283 667.348 674.743 667.674 675.134C668 675.525 668.411 675.836 668.876 676.045C669.34 676.253 669.846 676.352 670.355 676.335H690.918C692.049 676.297 693.133 675.875 693.993 675.138C694.852 674.401 695.435 673.394 695.645 672.282L710.758 574.688C710.866 574.191 710.859 573.675 710.738 573.181C710.617 572.687 710.385 572.226 710.059 571.836C709.733 571.445 709.322 571.133 708.857 570.925C708.393 570.717 707.887 570.618 707.378 570.635Z" fill="white"/>
                            <path id="Vector_28" d="M742.474 598.5H721.911C720.78 598.538 719.695 598.96 718.836 599.697C717.977 600.434 717.394 601.441 717.184 602.553L705.889 672.282C705.781 672.779 705.788 673.295 705.909 673.789C706.03 674.283 706.263 674.744 706.589 675.134C706.915 675.525 707.325 675.837 707.79 676.045C708.254 676.253 708.76 676.352 709.269 676.335H729.832C730.963 676.297 732.048 675.875 732.907 675.138C733.766 674.402 734.349 673.394 734.559 672.282L745.854 602.553C745.962 602.056 745.955 601.541 745.834 601.046C745.713 600.552 745.481 600.092 745.155 599.701C744.829 599.31 744.418 598.999 743.953 598.79C743.489 598.582 742.983 598.483 742.474 598.5Z" fill="white"/>
                            <path id="Vector_29" d="M784.664 587.586H764.101C762.969 587.624 761.885 588.046 761.026 588.783C760.166 589.52 759.584 590.527 759.373 591.639L745.966 672.282C745.858 672.779 745.865 673.295 745.986 673.789C746.107 674.283 746.34 674.744 746.666 675.134C746.992 675.525 747.403 675.837 747.867 676.045C748.331 676.253 748.837 676.352 749.346 676.335H769.909C771.04 676.297 772.125 675.875 772.984 675.138C773.843 674.402 774.426 673.394 774.636 672.282L788.043 591.639C788.151 591.142 788.145 590.627 788.023 590.132C787.902 589.638 787.67 589.178 787.344 588.787C787.018 588.396 786.607 588.084 786.143 587.876C785.678 587.668 785.172 587.569 784.664 587.586Z" fill="white"/>
                            <path id="Vector_30" d="M650.403 523.306H706.077" stroke="white" stroke-width="10" stroke-miterlimit="10" stroke-linecap="round"/>
                            <path id="Vector_31" d="M647.261 542.21H675.097" stroke="white" stroke-width="10" stroke-miterlimit="10" stroke-linecap="round"/>
                            <path id="Vector_32" opacity="0.6" d="M631.638 690.024H642.405" stroke="white" stroke-width="6" stroke-miterlimit="10" stroke-linecap="round"/>
                            <path id="Vector_33" opacity="0.6" d="M672.976 690.024H683.744" stroke="white" stroke-width="6" stroke-miterlimit="10" stroke-linecap="round"/>
                            <path id="Vector_34" opacity="0.6" d="M711.891 690.024H722.658" stroke="white" stroke-width="6" stroke-miterlimit="10" stroke-linecap="round"/>
                            </g>
                            <g id="email">
                            <path id="Vector_39" d="M722.655 248.238H652.9C652.047 248.27 651.199 248.104 650.422 247.75C649.645 247.397 648.962 246.866 648.427 246.202C647.891 245.537 647.519 244.757 647.339 243.922C647.159 243.088 647.176 242.223 647.39 241.397L658.11 186.277C658.523 184.393 659.55 182.7 661.028 181.462C662.507 180.224 664.354 179.512 666.281 179.437H736.036C736.888 179.404 737.737 179.571 738.514 179.924C739.291 180.278 739.974 180.808 740.509 181.473C741.045 182.137 741.417 182.918 741.597 183.752C741.777 184.586 741.759 185.451 741.546 186.277L730.825 241.397C730.412 243.281 729.386 244.974 727.908 246.212C726.429 247.45 724.581 248.162 722.655 248.238Z" fill="#1C85E8"/>
                            <path id="Vector_40" d="M674.808 194.344L721.255 194.353C721.588 194.338 721.92 194.401 722.225 194.536C722.53 194.672 722.799 194.875 723.012 195.132C723.225 195.389 723.375 195.691 723.452 196.016C723.528 196.34 723.528 196.678 723.452 197.003L722.816 200.479C722.71 200.985 722.488 201.459 722.168 201.864C721.848 202.269 721.438 202.595 720.971 202.816L695.525 215.063C695.131 215.271 694.692 215.379 694.247 215.376C693.802 215.373 693.364 215.26 692.973 215.048L672.039 202.43C671.657 202.19 671.358 201.838 671.185 201.422C671.012 201.006 670.973 200.546 671.073 200.107L671.643 196.993C671.798 196.261 672.194 195.602 672.768 195.121C673.342 194.641 674.06 194.367 674.808 194.344Z" fill="white"/>
                            <path id="Vector_41" d="M672.503 207.005L692.529 219.567C692.801 219.72 693.108 219.801 693.42 219.801C693.732 219.801 694.039 219.721 694.311 219.568L718.93 207.014C720.254 206.339 721.588 207.196 721.339 208.561L717.679 228.571C717.4 229.886 716.688 231.07 715.657 231.933C714.626 232.796 713.335 233.288 711.991 233.33L669.817 233.322C669.218 233.348 668.622 233.235 668.074 232.992C667.527 232.749 667.043 232.383 666.661 231.922C666.278 231.461 666.008 230.917 665.871 230.334C665.733 229.751 665.733 229.144 665.87 228.561L669.529 208.551C669.586 208.232 669.716 207.931 669.908 207.67C670.1 207.409 670.349 207.196 670.636 207.047C670.924 206.898 671.241 206.816 671.565 206.809C671.889 206.802 672.21 206.869 672.503 207.005Z" fill="white"/>
                            <path id="Vector_42" d="M738.446 193.874C746.42 193.874 752.883 187.41 752.883 179.437C752.883 171.464 746.42 165 738.446 165C730.473 165 724.01 171.464 724.01 179.437C724.01 187.41 730.473 193.874 738.446 193.874Z" fill="#FF967C"/>
                            </g>
                            </g>
                            <defs>
                            <linearGradient id="paint0_linear_1_2" x1="533.757" y1="337.927" x2="552.02" y2="647.972" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white"/>
                            <stop offset="1" stop-color="#94B9FF"/>
                            </linearGradient>
                            <linearGradient id="paint1_linear_1_2" x1="487.011" y1="429.5" x2="563.442" y2="965.254" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white"/>
                            <stop offset="1" stop-color="#94B9FF"/>
                            </linearGradient>
                            <linearGradient id="paint2_linear_1_2" x1="684.842" y1="429.5" x2="761.272" y2="965.254" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white"/>
                            <stop offset="1" stop-color="#94B9FF"/>
                            </linearGradient>
                            <clipPath id="clip0_1_2">
                            <rect width="1080" height="1080" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>

                    </div>
                </div>
                <div class="col-lg-4 text-center" data-aos="fade-down-right"
                data-aos-easing="linear"
                data-aos-duration="500"
                data-aos-delay="100">
                    <h3 class="mt-lg-5 mb-lg-5">Mision</h3>
                    <div class="row jistify-content-between">
                        <div class="col-lg-4">
                            <i class="bi bi-code fs-1"></i>
                            <p>Web Development</p>
                        </div>
                        <div class="col-lg-4">
                            <i class="bi bi-code fs-1"></i>
                            <p>Web Development</p>
                        </div>
                        <div class="col-lg-4">
                            <i class="bi bi-code fs-1"></i>
                            <p>Web Development</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
