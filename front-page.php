<?php
  get_header();
?>
<div class="sticky">
  <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/no_words_logo.png" />
  <nav>
    <ul>
      <li><a href="#"><i class="fa fa-home" style="margin-right:2.5px;"></i>Home</a></li>
      <li><a href="/Blog">Storytime</a></li>
      <li><a href="#">Budget Babe</a>
        <ul class="dd">
          <a href="#"><li>Makeup</li></a>
          <a href="#"><li>Clothes</li></a>
          <a href="#"><li>Shoes</li></a>
          <a href="#"><li>Accessories</li></a>
        </ul>
      </li>
      <li><a href="#">Fashion Finds</a>
        <ul class="dd">
          <a href="#"><li>Clothes</li></a>
          <a href="#"><li>Shoes</li></a>
          <a href="#"><li>Accessories</li></a>
        </ul>
      </li>
      <li><a href="#">Killer Curls</a>
        <ul class="dd">
          <a href="#"><li>Sexy Curls</li></a>
          <a href="#"><li>Sexier Curls</li></a>
          <a href="#"> <li>Sexiest Curls</li></a>
        </ul>
      </li>
      <li><a href="/Blog">Archives</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>
  <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label class="search">
      <span class="fa fa-search" aria-hidden="true"></span>
      <input type="search" class="bar"
          placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
          value="<?php echo get_search_query() ?>" name="s"
          title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
  </form>
</div>
<div id="bp-container" class="bp-container">
  <div class="top">
    <header class="bp-header">
      <h1 class="bp-logo">
        <svg class="bp-inner" width="100%" height="100%" viewBox="0 0 1729 646" preserveAspectRatio="xMidYMin meet" aria-labelledby="logo_title"
          preserveAspectRatio="xMidYMid meet">
          <g transform="translate(0.000000,646.000000) scale(0.100000,-0.100000)"
          fill="#000000" stroke="none">
          <path id="dark" d="M775 6326 c-288 -67 -537 -303 -553 -527 -6 -85 14 -145 64 -189 19
          -16 38 -30 42 -30 4 -1 27 -5 52 -10 86 -16 211 25 284 94 30 27 37 39 28 48 -9 9 -27 4
          -73 -20 -97 -50 -187 -41 -237 23 -66 83 -14 283 104 401 31 31 85 70 127 91 67 34 79 37
          177 41 94 3 122 0 265 -33 251 -58 382 -57 497 1 48 24 76 58 58 69 -5 3 -35 -2 -67 -11
          -51 -15 -70 -16 -158 -5 -55 7 -143 24 -195	37 -119 32 -323 41 -415 20z"/>
          <path id="dark" d="M1165 6143 c-149 -60 -312 -246 -455 -518 -157 -299 -278 -411 -455
          -423 -65 -4 -73 -2 -101 21 -29 26 -29 26 -11 57 37 67 9 130 -58 130 -60 0 -96 -64 -81 -145 25 -131 321 -153 543 -41 178 89 279 222 503 657 74 142 123
          209 171 235 32 16 35 9 17 -33 -12 -27 -351 -596 -471 -789 -31 -51 -59 -103 -62 -117 -6 -22 -3 -25 27 -30 18 -3 51 -3 73 1 36 7 42 13 73 71 54 105 202
          322 256 377 57 57 108 81 126 59 15 -19 0 -53 -81 -177 -149 -229 -165 -298  -75 -328 64 -21 123 6 219 98 l67 65 0 -36 c0 -53 15 -85 52 -107 75 -46 207
          -9 294 82 112 116 214 278 176 278 -4 0 -31 -33 -59 -72 -72 -103 -149 -185 -194 -208 -46 -24 -92 -26 -113 -4 -31 31 -14 117 30 155 11 8 51 28 89 44
          159 65 235 136 235 217 0 19 -7 44 -16 57 -15 21 -23 23 -73 19 -129 -9 -285 -125 -360 -268 -42 -79 -92 -138 -167 -196 -113 -88 -114 -44 -4 120 74 111
          130 222 130 261 0 21 -9 44 -23 61 -33 38 -99 36 -174 -6 l-56 -32 23 39 c13 21 59 95 101 165 99 160 134 231 125 253 -6 15 -15 17 -76 11 -47 -5 -70 -4
          -70 3 0 16 -49 12 -95 -6z m625 -477 c0 -34 -59 -115 -116 -158 -84 -64 -96 -49 -34 42 81 119 150 173 150 116z"/>
          <path id="dark" d="M4040 6064 c-19 -2 -84 -9 -145 -15 -299 -30 -735 -133 -995 -236
          -212 -84 -506 -246 -674 -373 -143 -107 -392 -337 -458 -422 -162 -209 -273 -444 -324 -683 -23 -111 -24 -328 -1 -415 30 -114 73 -188 156 -270 123 -121
          252 -171 441 -171 203 0 369 64 649 251 228 152 284 218 254 299 -8 22 -14 26 -50 25 -34 0 -64 -16 -179 -91 -237 -154 -339 -196 -479 -197 -68 0 -89 4
          -135 28 -72 36 -143 106 -172 170 -21 47 -23 64 -22 226 1 191 12 251 73 405 105 261 391 598 689 812 282 202 695 362 1092 422 413 63 689 43 910 -66 80
          -40 109 -61 185 -137 147 -148 205 -287 205 -495 0 -142 -18 -212 -95 -366 -183 -370 -520 -576 -1040 -636 -55 -6 -106 -16 -114 -23 -8 -6 -3 9 11 34 14
          25 63 110 108 190 163 287 352 547 539 742 116 121 195 185 292 233 72 37 102 71 97 113 -5 41 -47 56 -148 54 -123 -2 -223 -31 -388 -113 -236 -118 -334
          -189 -517 -373 -166 -166 -272 -292 -389 -459 -75 -108 -391 -625 -678 -1112 -104 -176 -227 -376 -273 -445 -227 -341 -446 -551 -697 -670 -159 -75 -249
          -94 -448 -95 -161 0 -166 1 -222 28 -72 35 -118 86 -118 130 0 24 14 49 55 100 60 74 70 108 62 196 -6 69 -32 123 -84 173 -134 130 -358 91 -436 -75 -66
          -139 -59 -297 18 -453 59 -121 140 -184 300 -233 260 -81 606 -64 1035 50 359 96 673 284 980 590 200 197 321 366 507 704 157 284 366 653 359 632 -3 -9 -1
          -28 4 -41 10 -26 45 -41 125 -51 88 -11 236 -54 296 -86 112 -60 210 -197 244 -341 19 -80 19 -255 1 -350 -79 -412 -385 -774 -751 -887 -289 -90 -536 -8
          -678 226 -33 55 -68 83 -101 83 -26 0 -65 -41 -72 -74 -9 -51 61 -191 123 -246 247 -220 642 -315 1013 -244 411 78 703 291 862 631 109 232 128 521 51
          768 -58 186 -194 364 -382 496 -34 24 -58 46 -54 49 5 4 77 26 162 49 274 76 379 119 526 216 215 143 340 333 394 602 51 251 12 483 -113 671 -150 227
          -399 386 -726 466 -186 45 -559 90 -660 80z"/>
          <path id="dark" d="M6999 5445 c-4 -3 -66 -10 -138 -15 -179 -11 -184 -15 -231 -179 -31
          -108 -123 -277 -274 -505 -73 -111 -224 -355 -335 -543 -244 -415 -297 -502
          -461 -753 -387 -593 -535 -921 -517 -1144 9 -99 24 -141 75 -198 85 -94 190
          -120 318 -78 150 48 269 125 486 316 l103 90 0 -100 c0 -127 21 -192 80 -251
          58 -59 122 -79 234 -73 65 3 100 10 143 30 97 45 247 165 411 330 86 87 157
          153 157 146 0 -7 -7 -48 -15 -91 -47 -246 19 -371 216 -408 100 -19 117 -16
          231 40 95 45 120 63 210 150 l103 99 0 -62 c1 -153 135 -240 370 -240 199 1
          401 98 571 276 237 247 318 463 444 1183 43 248 55 292 116 436 30 69 57 140
          60 157 7 36 -4 40 -66 22 -19 -6 -94 -14 -166 -19 -109 -7 -138 -12 -173 -32
          -49 -27 -114 -109 -262 -329 -209 -311 -450 -626 -640 -841 -52 -58 -151 -171
          -221 -252 -121 -138 -207 -220 -307 -289 -51 -36 -61 -29 -61 45 0 96 83 289
          210 487 37 58 107 177 155 265 48 88 124 216 168 285 198 307 245 391 269 483
          21 80 22 90 8 115 l-16 27 -164 2 c-173 2 -267 -12 -302 -43 -9 -9 -29 -48
          -44 -88 -109 -288 -113 -295 -327 -641 -210 -337 -479 -698 -622 -833 -141
          -133 -246 -181 -295 -132 -65 65 -13 197 232 577 74 114 159 251 188 303 30
          52 105 179 166 282 199 333 251 513 159 557 -25 12 -43 12 -117 2 -48 -7 -92
          -10 -97 -6 -21 13 -156 7 -193 -8 -40 -17 -39 -14 -57 -135 -8 -52 -25 -100
          -60 -170 -48 -96 -218 -379 -311 -517 -26 -38 -95 -142 -153 -230 -58 -88
          -144 -208 -191 -266 -101 -126 -257 -276 -341 -327 -51 -31 -69 -37 -119 -37
          -52 0 -61 3 -79 28 -45 59 -20 136 116 350 46 73 110 177 142 232 60 104 147
          251 305 515 51 85 177 283 280 440 103 157 255 398 337 535 82 138 219 363
          303 500 85 138 160 268 168 290 8 22 15 77 15 122 2 108 -6 117 -111 121 -42
          2 -80 1 -83 -3z m1775 -1943 c-8 -45 -27 -131 -43 -190 -119 -452 -146 -549
          -176 -639 -91 -272 -264 -503 -377 -503 -49 0 -82 31 -98 91 -44 173 -79 239
          -117 224 -15 -5 -15 -4 -1 12 112 132 300 371 358 458 70 105 462 636 466 632
          1 -1 -4 -39 -12 -85z"/>
          <path id="dark" d="M10915 5415 c-49 -7 -124 -14 -166 -14 -43 -1 -82 -6 -92 -13 -9 -7
          -26 -46 -37 -85 -31 -114 -85 -218 -260 -508 -90 -148 -233 -387 -318 -530
          -566 -951 -768 -1285 -1037 -1715 -181 -289 -256 -430 -257 -481 0 -22 5 -46
          11 -52 17 -17 273 -22 362 -7 57 10 79 19 108 45 38 35 43 44 114 195 43 93
          183 324 317 525 37 55 109 165 160 245 95 148 264 379 353 483 111 129 339
          277 428 277 34 0 42 -5 59 -32 11 -18 20 -50 20 -70 0 -72 -106 -271 -286
          -534 -150 -220 -378 -603 -415 -698 -26 -64 -33 -100 -36 -171 -4 -79 -2 -95
          19 -135 67 -129 262 -179 453 -117 145 48 315 176 548 415 54 55 95 92 93 83
          -35 -117 -34 -262 3 -347 42 -98 137 -164 235 -164 88 0 231 61 352 151 l57
          42 -27 -36 c-36 -47 -44 -105 -20 -135 18 -21 26 -22 205 -23 224 -2 225 -1
          311 114 93 125 340 499 468 710 132 216 178 280 347 479 153 181 256 285 347
          352 157 117 244 134 276 57 23 -57 -10 -142 -101 -258 -88 -112 -517 -773
          -573 -882 -78 -153 -107 -247 -108 -348 -1 -70 3 -90 27 -138 50 -103 140
          -142 305 -132 209 12 433 145 679 403 l111 116 0 -88 c0 -197 75 -320 224
          -370 63 -21 187 -14 270 15 66 24 188 95 254 150 60 49 105 81 114 81 13 0
          -17 -53 -122 -215 -53 -82 -138 -220 -190 -305 -231 -385 -355 -538 -560 -689
          -247 -184 -496 -232 -637 -125 -31 23 -63 71 -63 93 0 5 16 28 35 51 60 71 59
          144 -4 213 -65 72 -142 92 -233 62 -92 -32 -148 -122 -148 -241 0 -208 150
          -326 465 -364 154 -19 311 3 530 75 492 161 830 484 1320 1259 102 162 189
          298 475 746 86 135 223 355 305 488 81 134 186 292 232 350 93 119 114 157
          121 218 11 105 -63 130 -305 103 -122 -13 -136 -19 -207 -87 l-59 -56 -16 44
          c-30 81 -102 112 -267 111 -361 0 -583 -110 -958 -471 -190 -184 -313 -348
          -407 -545 -31 -66 -63 -138 -70 -159 -14 -39 -233 -311 -338 -419 -122 -126
          -309 -220 -372 -186 -54 28 -52 62 12 185 101 194 198 342 510 779 108 152
          190 305 214 400 18 70 20 198 4 246 -17 52 -85 116 -149 141 -81 32 -220 31
          -315 -1 -123 -42 -272 -126 -375 -211 -25 -20 -57 -45 -72 -55 l-28 -17 25 44
          c13 24 31 71 40 104 18 73 6 125 -36 157 -26 19 -33 19 -182 7 -85 -7 -168
          -10 -184 -7 -57 11 -85 -28 -108 -149 -8 -41 -24 -92 -35 -114 -23 -45 -184
          -306 -290 -470 -38 -58 -134 -213 -214 -344 -123 -199 -165 -259 -257 -362
          -134 -150 -189 -199 -254 -230 -59 -28 -126 -31 -150 -7 -30 30 -16 123 32
          223 82 167 406 703 629 1041 118 178 144 231 151 311 11 116 -33 137 -257 120
          -162 -12 -226 -30 -253 -74 -9 -12 -22 -60 -30 -105 -18 -95 -21 -101 -145
          -303 -370 -604 -589 -880 -871 -1098 -157 -122 -240 -163 -292 -147 -19 6 -21
          12 -16 59 8 76 50 160 174 347 239 358 453 720 503 851 39 102 55 203 41 268
          -21 97 -79 178 -150 207 -53 23 -156 26 -261 9 -118 -19 -251 -83 -387 -185
          -51 -38 -93 -68 -93 -65 0 3 26 46 57 97 51 84 76 125 145 241 13 22 79 127
          147 235 68 108 151 241 184 296 33 55 97 158 140 230 44 71 110 190 146 265
          59 121 66 141 66 196 0 83 -11 94 -89 93 -33 -1 -101 -7 -151 -14z m4624
          -1570 c84 -43 73 -226 -24 -430 -32 -67 -172 -281 -399 -610 -186 -269 -465
          -515 -603 -532 -62 -7 -104 13 -127 61 -33 71 -10 174 81 354 174 346 407 676
          643 913 157 158 226 210 317 239 72 23 77 24 112 5z"/>
          <path id="dark" d="M12473 5055 c-62 -31 -132 -104 -169 -176 -22 -43 -28 -68 -29 -121
          0 -58 4 -71 30 -109 42 -59 94 -84 175 -84 78 1 125 23 187 87 119 122 134
          326 29 401 -23 16 -48 23 -101 25 -59 3 -78 -1 -122 -23z"/>
          <path id="lite" d="M6360 1596 c-64 -18 -104 -41 -144 -82 -58 -60 -67 -102 -73 -339
          -11 -420 29 -550 188 -612 37 -15 77 -17 264 -17 203 1 224 2 277 23 103 40
          137 104 141 266 l2 90 -70 0 -70 0 -5 -90 c-3 -49 -11 -100 -18 -112 -21 -38
          -73 -47 -267 -48 -277 0 -275 -3 -284 345 -10 365 0 419 80 447 53 18 392 17
          428 -2 36 -18 51 -60 51 -141 l0 -64 75 0 75 0 0 58 c0 76 -25 168 -56 209
          -14 18 -44 43 -67 56 -39 21 -55 22 -262 24 -154 1 -233 -2 -265 -11z"/>
          <path id="lite" d="M8090 1594 c-94 -25 -156 -89 -188 -193 -23 -75 -25 -530 -3 -630 39
          -174 145 -230 441 -230 312 -1 410 56 446 258 16 92 18 447 3 540 -20 128 -84
          218 -176 251 -59 21 -451 24 -523 4z m487 -137 c53 -29 65 -65 75 -232 13
          -205 4 -404 -21 -460 -34 -77 -45 -80 -291 -80 -320 0 -305 -20 -305 395 0
          289 0 296 23 331 20 34 46 50 97 63 11 2 103 4 205 3 155 -2 190 -5 217 -20z"/>
          <path id="lite" d="M9910 1596 c-64 -18 -104 -41 -144 -82 -58 -60 -67 -102 -73 -339
          -11 -420 29 -550 188 -612 37 -15 77 -17 264 -17 203 1 224 2 277 23 103 40
          137 104 141 266 l2 90 -70 0 -70 0 -5 -90 c-3 -49 -11 -100 -18 -112 -21 -38
          -73 -47 -267 -48 -277 0 -275 -3 -284 345 -10 365 0 419 80 447 53 18 392 17
          428 -2 36 -18 51 -60 51 -141 l0 -64 75 0 75 0 0 58 c0 76 -25 168 -56 209
          -14 18 -44 43 -67 56 -39 21 -55 22 -262 24 -154 1 -233 -2 -265 -11z"/>
          <path id="lite" d="M1090 1080 l0 -520 70 0 70 0 0 200 0 200 239 0 c151 0 250 4 272 11
          97 33 147 115 156 257 13 205 -50 334 -177 361 -30 7 -168 11 -340 11 l-290 0
          0 -520z m617 370 c37 -24 45 -60 41 -183 -5 -174 -10 -177 -315 -177 l-203 0
          0 191 0 191 228 -4 c177 -2 232 -6 249 -18z"/>
          <path id="lite" d="M2810 1080 l0 -520 350 0 350 0 0 65 0 65 -280 0 -280 0 0 170 0 170
          268 2 267 3 3 63 3 62 -271 0 -270 0 0 155 0 155 280 0 280 0 0 65 0 65 -350
          0 -350 0 0 -520z"/>
          <path id="lite" d="M4721 1578 c-4 -13 -92 -244 -195 -515 -102 -270 -186 -495 -186
          -498 0 -3 34 -5 76 -3 l76 3 38 100 37 100 258 0 258 0 37 -100 38 -100 77 -3
          c70 -3 76 -1 71 15 -3 10 -93 243 -200 518 l-193 500 -92 3 c-87 3 -92 2 -100
          -20z m107 -676 c-111 -1 -202 -1 -204 1 -2 2 30 93 71 203 42 109 87 230 102
          268 l26 69 103 -269 102 -269 -200 -3z"/>
          <path id="lite" d="M11470 1080 l0 -520 70 0 70 0 0 235 0 235 41 0 c41 0 47 -5 284
          -235 l243 -235 98 0 99 0 -273 268 -274 267 241 247 c133 136 241 250 241 253
          0 3 -42 5 -92 5 l-93 -1 -210 -219 -210 -220 -47 0 -48 0 0 220 0 220 -70 0
          -70 0 0 -520z"/>
          </g>
        </svg>
      </h1>
      <div class="bp-loader">
        <svg width='60px' height='60px' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="uil-balls bp-inner"><rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect><g transform="rotate(0 50 50)">
          <circle r="7.5" cx="20" cy="50">
            <animateTransform attributeName="transform" type="translate" begin="0s" repeatCount="indefinite" dur="1s" values="0 0;44.99999999999999 -25.98076211353316" keyTimes="0;1"/>
            <animate attributeName="fill" dur="1s" begin="0s" repeatCount="indefinite"  keyTimes="0;1" values="#890978;#e12e73"/>
          </circle>
        </g><g transform="rotate(120 50 50)">
          <circle r="7.5" cx="20" cy="50">
            <animateTransform attributeName="transform" type="translate" begin="0s" repeatCount="indefinite" dur="1s" values="0 0;44.99999999999999 -25.98076211353316" keyTimes="0;1"/>
            <animate attributeName="fill" dur="1s" begin="0s" repeatCount="indefinite"  keyTimes="0;1" values="#e12e73;#fff"/>
          </circle>
        </g><g transform="rotate(240 50 50)">
          <circle r="7.5" cx="20" cy="50">
            <animateTransform attributeName="transform" type="translate" begin="0s" repeatCount="indefinite" dur="1s" values="0 0;44.99999999999999 -25.98076211353316" keyTimes="0;1"/>
            <animate attributeName="fill" dur="1s" begin="0s" repeatCount="indefinite"  keyTimes="0;1" values="#fff;#890978"/>
          </circle>
        </g></svg>
      </div>
    </header>
    <div class="bp-nav">
      <ul class="soc-ico">
        <li><a href="https://www.facebook.com/kimmybabytt"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
        <li><a href="https://twitter.com/kimrbailey"><span class="fa fa-twitter" aria-hidden="true"></span></a><li>
        <li><a href="https://www.linkedin.com/in/kim-bailey-64877521/?ppe=1"><span class="fa fa-linkedin" aria-hidden="true"></span></a><li>
        <li><a href="https://www.instagram.com/kimmybabytt/"><span class="fa fa-instagram" aria-hidden="true"></span></a><li>
        <li><a href="https://www.pinterest.com/kimrbailey/"><span class="fa fa-pinterest" aria-hidden="true"></span></a><li>
      </ul>
      <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
        <label class="search">
          <span class="fa fa-search" aria-hidden="true"></span>
          <input type="search" class="bar"
              placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
              value="<?php echo get_search_query() ?>" name="s"
              title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
        </label>
      </form>
    </div>
    <nav>
      <svg width="0" height="0">
        <defs>
          <clipPath id="clip-shape" clipPathUnits="objectBoundingBox">
            <polygon points="0.075 1.00, 0.925 1.00, 1.00 0, 0 0" />
          </clipPath>
        </defs>
      </svg>
      <div class="mask"></div>
      <ul id="nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">Storytime</a></li>
        <li><a href="#">Budget Babe</a>
          <ul class="dd">
            <a href="#"><li>Makeup</li></a>
            <a href="#"><li>Clothes</li></a>
            <a href="#"><li>Shoes</li></a>
            <a href="#"><li>Accessories</li></a>
          </ul>
        </li>
        <li><a href="#">Fashion Finds</a>
          <ul class="dd">
            <a href="#"><li>Clothes</li></a>
            <a href="#"><li>Shoes</li></a>
            <a href="#"><li>Accessories</li></a>
          </ul>
        </li>
        <li><a href="#">Killer Curls</a>
          <ul class="dd">
            <a href="#"><li>Sexy Curls</li></a>
            <a href="#"><li>Sexier Curls</li></a>
            <a href="#"> <li>Sexiest Curls</li></a>
          </ul>
        </li>
        <li><a href="/Blog">Archives</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </div>
  <div class="btm">
    <video poster="<?php echo get_template_directory_uri(); ?>/img/screencap.png" id="bgvid" playsinline autoplay muted loop>
      <source src="<?php echo get_template_directory_uri(); ?>/videos/FFeathers.mp4" type="video/mp4">
    </video>
    <div class="vidOverlay"></div>
    <div class="txtOverlay">
      <div class="splash">
        <span id="t1"> Always be yourself, </br></span>
        <span id="t2"> Unless you can be a Peacock... </br></span>
        <span id="t3"> ...then always be a Peacock! </br></span>
      </div>
      <button class="icon-scroll"/>
    </div>
  </div>
</div>

<div id="content">
  <div class="row" style="padding:0 10%; margin:0;">
      <div class="col-sm-7" style="padding:0;">
        <div style="margin-bottom:20px;">
          <div>
            <h2 style="position: relative; z-index:2; padding:0 10px;">Most Popular Posts</h2>
            <div style="position: absolute; z-index:1; top:47px; width:100%; height:2px; background-color:#e0e0e0;"></div>
          </div>
        </div>
          <div class="row" style="margin:0 0 20px">
            <div class="col-sm-7" style="padding:0 10px 0 0">
              <div class="row" style="margin:0 0 10px; background-color:#555; height:390px;">

              </div>
              <div class="row" style="margin:0 0 5px; background-color:#222; height:45px;">

              </div>
              <div class="row" style="margin:0; background-color:#333; height:150px;">

              </div>
            </div>
            <div class="col-sm-5" style="padding:0 0 0 10px">
              <div class="row" style="margin:0; background-color:#222; height:150px;">

              </div>
              <div class="row" style="margin: 5px 0; background-color:#111; height:40px;">

              </div>
              <div class="row" style="margin:0; background-color:#555; height:150px;">

              </div>
              <div class="row" style="margin: 5px 0; background-color:#111; height:40px;">

              </div>
              <div class="row" style="margin:0; background-color:#222; height:150px;">

              </div>
              <div class="row" style="margin: 5px 0; background-color:#111; height:40px;">

              </div>
            </div>
          </div>
          <div class="row" style=" margin:0; background-color:#555; height:400px;">

          </div>
      </div>
      <div class="col-sm-5" style=" padding-left:60px; height:100%">
        <div class="row sm">
          <div style="position:relative;">
            <h2 style="position: relative; z-index:2; padding:0 10px;">Social Media</h2>
            <div style="position: absolute; z-index:1; top:47px; width:100%; height:2px; background-color:#e0e0e0;"></div>
          </div>
          <ul>
            <li>
              <a style="" href="https://www.facebook.com/kimmybabytt"><span class="fa fa-facebook" aria-hidden="true"></span></a>
            </li>
            <li>
              <a style="" href="https://twitter.com/kimrbailey"><span class="fa fa-twitter" aria-hidden="true"></span></a>
            </li>
            <li>
              <a style="" href="https://www.linkedin.com/in/kim-bailey-64877521/?ppe=1"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
            </li>
            <li>
              <a style="" href="https://www.instagram.com/kimmybabytt/"><span class="fa fa-instagram" aria-hidden="true"></span></a>
            </li>
            <li>
              <a style="" href="https://www.pinterest.com/kimrbailey/"><span class="fa fa-pinterest" aria-hidden="true"></span></a>
            </li>
          </ul>
        </div>
        <div class="row gr">
          <div style="position:relative;">
            <h2 style="position: relative; z-index:2; padding:0 10px;">My Picks</h2>
            <div style="position: absolute; z-index:1; top:47px; width:100%; height:2px; background-color:#e0e0e0;"></div>
          </div>
          <div class="row">
            <?php list_grs(); ?>
          </div>
        </div>
        <div class="row cl">
          <div style="position:relative;">
            <h2 style="position: relative; z-index:2; padding:0 10px;">Categories</h2>
            <div style="position: absolute; z-index:1; top:47px; width:100%; height:2px; background-color:#e0e0e0;"></div>
          </div>
          <?php bpkrb_cats();?>
        </div>
        <div class="row">
          <div style="position:relative;">
            <h2 style="position: relative; z-index:2; padding:0 10px;">Tags</h2>
            <div style="position: absolute; z-index:1; top:47px; width:100%; height:2px; background-color:#e0e0e0;"></div>
          </div>
          <?php list_tags(); ?>
        </div>
      </div>
  </div>
  <div class="row" style="width:100%; margin:0; padding:0 10%;">
    <div style="position:relative; overflow:hidden; margin-bottom:20px;">
      <h2 style="position: relative; z-index:2; padding:0 10px;">Most Liked</h2>
      <div style="position: absolute; z-index:1; bottom:10px; width:100%; height:2px; background-color:#e0e0e0;"></div>
    </div>
    <div class="row lp">
      <div class="liked owl-carousel owl-theme">
        <div class="item" style="margin-right:20px"><h4>1</h4></div>
        <div class="item" style="margin-right:20px"><h4>2</h4></div>
        <div class="item" style="margin-right:20px"><h4>3</h4></div>
        <div class="item" style="margin-right:20px"><h4>1</h4></div>
        <div class="item" style="margin-right:20px"><h4>2</h4></div>
        <div class="item" style="margin-right:20px"><h4>3</h4></div>
        <div class="item" style="margin-right:20px"><h4>1</h4></div>
        <div class="item" style="margin-right:20px"><h4>2</h4></div>
        <div class="item" style="margin-right:20px"><h4>3</h4></div>
      </div>
    </div>
  </div>
  <div class="row" style="width:100%; margin:0; padding:0 10%;">
    <div style="position:relative; overflow:hidden; margin-bottom:20px;">
      <h2 style="position: relative; z-index:2; padding:0 10px;">New Posts</h2>
      <div style="position: absolute; z-index:1; bottom:10px; width:100%; height:2px; background-color:#e0e0e0;"></div>
    </div>
    <?php list_np(); ?>
  </div>
  <div class="row" style="width:100%; margin:0;">
    <div style="position:relative; padding:0 10%; overflow:hidden; margin-bottom:20px;">
      <h2 style="position: relative; z-index:2; padding:0 10px;">Fashion of the Week</h2>
      <div style="position: absolute; z-index:1; bottom:10px; width:80%; height:2px; background-color:#e0e0e0;"></div>
    </div>
    <div class="bg__bar">
      <div class="row ftw">
        <div class="fw owl-carousel owl-theme">
          <div class="item" style="margin-right:20px"><h4>1</h4></div>
          <div class="item" style="margin-right:20px"><h4>2</h4></div>
          <div class="item" style="margin-right:20px"><h4>3</h4></div>
        </div>
      </div>
    </div>
  </div>
  <div class="row" style="width:100%; padding:0 10%; height:auto; margin:0; margin-bottom:10%">
    <div class="col-sm-4">
      <img class="melg" src="<?php echo get_template_directory_uri(); ?>/img/me3.jpeg" />
    </div>
    <div class="col-sm-4" style="padding-right:10px; overflow:hidden;">
      <div style="margin-bottom:20px;">
        <div>
          <h2 style="position: relative; z-index:2; padding:0 10px;">About me</h2>
          <div style="position: absolute; z-index:1; top:47px; width:100%; height:2px; background-color:#e0e0e0;"></div>
        </div>
      </div>
      <p class="bm">Hi! My name is Kimmy and Welcome to my blog! I'm just and ordinary forty something island girl from Trinidad who loves Nutella, Eggs and Ham! (but not all together!)
        My goal here is just to brighten your day, if even for a minute,
        life is so much sweeter with smiles! </p>
    </div>
    <div class="col-sm-4" style="padding-right:10px; overflow:hidden;">
      <div style="margin-bottom:20px;">
        <div>
          <h2 style="position: relative; z-index:2; padding:0 10px;">Newsletter</h2>
          <div style="position: absolute; z-index:1; top:47px; width:100%; height:2px; background-color:#e0e0e0;"></div>
        </div>
      </div>
      <form role="snewsletter" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
        <label class="nl" style="width:100%;">
          <input type="text" class="bar"
              placeholder="Name"
              value="<?php echo get_search_query() ?>" name="s"
              title="Provide your name" /> <br/>
        <input type="text" class="bar"
            placeholder="Email"
            value="<?php echo get_search_query() ?>" name="s"
            title="Provide your email" /> <br/>
        <button type="submit" > Subscribe</button>
      </label>

      </form>
    </div>
  </div>
  <div class="row infd">
    <div id="instafeed" class="owl-carousel insta owl-theme">
    </div>
    <button >Follow me on Instagram</button>
  </div>
</div>
<!--/content -->

<?php get_footer(); ?>
