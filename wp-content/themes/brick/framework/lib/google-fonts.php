<?php

if ( ! function_exists( 'brick_qode_init_google_fonts_array' ) ) {
	function brick_qode_init_google_fonts_array() {
		global $brick_fonts_array;
		
		$google_fonts_json = '{
		 "kind": "webfonts#webfontList",
		 "items": [
		  {
		   "kind": "webfonts#webfont",
		   "family": "ABeeZee",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v11",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/abeezee/v11/esDR31xSG-6AGleN6tI.ttf",
		    "italic": "http://fonts.gstatic.com/s/abeezee/v11/esDT31xSG-6AGleN2tCklQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Abel",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/abel/v8/MwQ5bhbm2POE6Vg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Abhaya Libre",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "500",
		    "600",
		    "700",
		    "800"
		   ],
		   "subsets": [
		    "sinhala",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/abhayalibre/v3/e3tmeuGtX-Co5MNzeAOqinEgew.ttf",
		    "500": "http://fonts.gstatic.com/s/abhayalibre/v3/e3t5euGtX-Co5MNzeAOqinEYj2ryqg.ttf",
		    "600": "http://fonts.gstatic.com/s/abhayalibre/v3/e3t5euGtX-Co5MNzeAOqinEYo23yqg.ttf",
		    "700": "http://fonts.gstatic.com/s/abhayalibre/v3/e3t5euGtX-Co5MNzeAOqinEYx2zyqg.ttf",
		    "800": "http://fonts.gstatic.com/s/abhayalibre/v3/e3t5euGtX-Co5MNzeAOqinEY22_yqg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Abril Fatface",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/abrilfatface/v9/zOL64pLDlL1D99S8g8PtiKchm-A.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Aclonica",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/aclonica/v8/K2FyfZJVlfNNSEBXGb7T.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Acme",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/acme/v7/RrQfboBx-C5_bx0.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Actor",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/actor/v7/wEOzEBbCkc5cO3ek.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Adamina",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v11",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/adamina/v11/j8_r6-DH1bjoc-dwu-o.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Advent Pro",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "greek"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/adventpro/v7/V8mCoQfxVT4Dvddr_yOwjVmtLQ.ttf",
		    "200": "http://fonts.gstatic.com/s/adventpro/v7/V8mDoQfxVT4Dvddr_yOwjfWMDbY.ttf",
		    "300": "http://fonts.gstatic.com/s/adventpro/v7/V8mDoQfxVT4Dvddr_yOwjZGPDbY.ttf",
		    "regular": "http://fonts.gstatic.com/s/adventpro/v7/V8mAoQfxVT4Dvddr_yOwtT0.ttf",
		    "500": "http://fonts.gstatic.com/s/adventpro/v7/V8mDoQfxVT4Dvddr_yOwjcmODbY.ttf",
		    "600": "http://fonts.gstatic.com/s/adventpro/v7/V8mDoQfxVT4Dvddr_yOwjeWJDbY.ttf",
		    "700": "http://fonts.gstatic.com/s/adventpro/v7/V8mDoQfxVT4Dvddr_yOwjYGIDbY.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Aguafina Script",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/aguafinascript/v6/If2QXTv_ZzSxGIO30LemWEOmt1bHqg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Akronim",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/akronim/v7/fdN-9sqWtWZZlHRp-gA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Aladin",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/aladin/v6/ZgNSjPJFPrvJV5f16Q.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Aldrich",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/aldrich/v8/MCoTzAn-1s3IGyJMZaA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Alef",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "hebrew",
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/alef/v9/FeVfS0NQpLYgrjI.ttf",
		    "700": "http://fonts.gstatic.com/s/alef/v9/FeVQS0NQpLYglo50L5k.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Alegreya",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "greek-ext",
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v11",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/alegreya/v11/4UaBrEBBsBhlBjvfkRLm.ttf",
		    "italic": "http://fonts.gstatic.com/s/alegreya/v11/4UaHrEBBsBhlBjvfkSLkx60.ttf",
		    "500": "http://fonts.gstatic.com/s/alegreya/v11/4UaGrEBBsBhlBjvfkSoS5I3J.ttf",
		    "500italic": "http://fonts.gstatic.com/s/alegreya/v11/4UaErEBBsBhlBjvfkSLk_1nKwps.ttf",
		    "700": "http://fonts.gstatic.com/s/alegreya/v11/4UaGrEBBsBhlBjvfkSpa4o3J.ttf",
		    "700italic": "http://fonts.gstatic.com/s/alegreya/v11/4UaErEBBsBhlBjvfkSLk_xHMwps.ttf",
		    "800": "http://fonts.gstatic.com/s/alegreya/v11/4UaGrEBBsBhlBjvfkSpG4Y3J.ttf",
		    "800italic": "http://fonts.gstatic.com/s/alegreya/v11/4UaErEBBsBhlBjvfkSLk_w3Pwps.ttf",
		    "900": "http://fonts.gstatic.com/s/alegreya/v11/4UaGrEBBsBhlBjvfkSpi4I3J.ttf",
		    "900italic": "http://fonts.gstatic.com/s/alegreya/v11/4UaErEBBsBhlBjvfkSLk_ynOwps.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Alegreya SC",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "greek-ext",
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v9",
		   "lastModified": "2017-11-07",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/alegreyasc/v9/taiOGmRtCJ62-O0HhNEa-a6o.ttf",
		    "italic": "http://fonts.gstatic.com/s/alegreyasc/v9/taiMGmRtCJ62-O0HhNEa-Z6q2ZU.ttf",
		    "500": "http://fonts.gstatic.com/s/alegreyasc/v9/taiTGmRtCJ62-O0HhNEa-ZZc-rUx.ttf",
		    "500italic": "http://fonts.gstatic.com/s/alegreyasc/v9/taiRGmRtCJ62-O0HhNEa-Z6q4WEySK8.ttf",
		    "700": "http://fonts.gstatic.com/s/alegreyasc/v9/taiTGmRtCJ62-O0HhNEa-ZYU_LUx.ttf",
		    "700italic": "http://fonts.gstatic.com/s/alegreyasc/v9/taiRGmRtCJ62-O0HhNEa-Z6q4Sk0SK8.ttf",
		    "800": "http://fonts.gstatic.com/s/alegreyasc/v9/taiTGmRtCJ62-O0HhNEa-ZYI_7Ux.ttf",
		    "800italic": "http://fonts.gstatic.com/s/alegreyasc/v9/taiRGmRtCJ62-O0HhNEa-Z6q4TU3SK8.ttf",
		    "900": "http://fonts.gstatic.com/s/alegreyasc/v9/taiTGmRtCJ62-O0HhNEa-ZYs_rUx.ttf",
		    "900italic": "http://fonts.gstatic.com/s/alegreyasc/v9/taiRGmRtCJ62-O0HhNEa-Z6q4RE2SK8.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Alegreya Sans",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "100italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "greek-ext",
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v8",
		   "lastModified": "2017-11-09",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/alegreyasans/v8/5aUt9_-1phKLFgshYDvh6Vwt5TltuA.ttf",
		    "100italic": "http://fonts.gstatic.com/s/alegreyasans/v8/5aUv9_-1phKLFgshYDvh6Vwt7V9V3G1W.ttf",
		    "300": "http://fonts.gstatic.com/s/alegreyasans/v8/5aUu9_-1phKLFgshYDvh6Vwt5fFPmE0.ttf",
		    "300italic": "http://fonts.gstatic.com/s/alegreyasans/v8/5aUo9_-1phKLFgshYDvh6Vwt7V9VFE92jg.ttf",
		    "regular": "http://fonts.gstatic.com/s/alegreyasans/v8/5aUz9_-1phKLFgshYDvh6Vwt3V0.ttf",
		    "italic": "http://fonts.gstatic.com/s/alegreyasans/v8/5aUt9_-1phKLFgshYDvh6Vwt7V9tuA.ttf",
		    "500": "http://fonts.gstatic.com/s/alegreyasans/v8/5aUu9_-1phKLFgshYDvh6Vwt5alOmE0.ttf",
		    "500italic": "http://fonts.gstatic.com/s/alegreyasans/v8/5aUo9_-1phKLFgshYDvh6Vwt7V9VTE52jg.ttf",
		    "700": "http://fonts.gstatic.com/s/alegreyasans/v8/5aUu9_-1phKLFgshYDvh6Vwt5eFImE0.ttf",
		    "700italic": "http://fonts.gstatic.com/s/alegreyasans/v8/5aUo9_-1phKLFgshYDvh6Vwt7V9VBEh2jg.ttf",
		    "800": "http://fonts.gstatic.com/s/alegreyasans/v8/5aUu9_-1phKLFgshYDvh6Vwt5f1LmE0.ttf",
		    "800italic": "http://fonts.gstatic.com/s/alegreyasans/v8/5aUo9_-1phKLFgshYDvh6Vwt7V9VGEt2jg.ttf",
		    "900": "http://fonts.gstatic.com/s/alegreyasans/v8/5aUu9_-1phKLFgshYDvh6Vwt5dlKmE0.ttf",
		    "900italic": "http://fonts.gstatic.com/s/alegreyasans/v8/5aUo9_-1phKLFgshYDvh6Vwt7V9VPEp2jg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Alegreya Sans SC",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "100italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "greek-ext",
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v7",
		   "lastModified": "2017-11-07",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/alegreyasanssc/v7/mtGn4-RGJqfMvt7P8FUr0Q1j-Hf1Dipl8g.ttf",
		    "100italic": "http://fonts.gstatic.com/s/alegreyasanssc/v7/mtGl4-RGJqfMvt7P8FUr0Q1j-Hf1BkxdlgRB.ttf",
		    "300": "http://fonts.gstatic.com/s/alegreyasanssc/v7/mtGm4-RGJqfMvt7P8FUr0Q1j-Hf1DuJH0iQ.ttf",
		    "300italic": "http://fonts.gstatic.com/s/alegreyasanssc/v7/mtGk4-RGJqfMvt7P8FUr0Q1j-Hf1BkxdXiZhNQ.ttf",
		    "regular": "http://fonts.gstatic.com/s/alegreyasanssc/v7/mtGh4-RGJqfMvt7P8FUr0Q1j-Hf1Nk4.ttf",
		    "italic": "http://fonts.gstatic.com/s/alegreyasanssc/v7/mtGn4-RGJqfMvt7P8FUr0Q1j-Hf1Bkxl8g.ttf",
		    "500": "http://fonts.gstatic.com/s/alegreyasanssc/v7/mtGm4-RGJqfMvt7P8FUr0Q1j-Hf1DrpG0iQ.ttf",
		    "500italic": "http://fonts.gstatic.com/s/alegreyasanssc/v7/mtGk4-RGJqfMvt7P8FUr0Q1j-Hf1BkxdBidhNQ.ttf",
		    "700": "http://fonts.gstatic.com/s/alegreyasanssc/v7/mtGm4-RGJqfMvt7P8FUr0Q1j-Hf1DvJA0iQ.ttf",
		    "700italic": "http://fonts.gstatic.com/s/alegreyasanssc/v7/mtGk4-RGJqfMvt7P8FUr0Q1j-Hf1BkxdTiFhNQ.ttf",
		    "800": "http://fonts.gstatic.com/s/alegreyasanssc/v7/mtGm4-RGJqfMvt7P8FUr0Q1j-Hf1Du5D0iQ.ttf",
		    "800italic": "http://fonts.gstatic.com/s/alegreyasanssc/v7/mtGk4-RGJqfMvt7P8FUr0Q1j-Hf1BkxdUiJhNQ.ttf",
		    "900": "http://fonts.gstatic.com/s/alegreyasanssc/v7/mtGm4-RGJqfMvt7P8FUr0Q1j-Hf1DspC0iQ.ttf",
		    "900italic": "http://fonts.gstatic.com/s/alegreyasanssc/v7/mtGk4-RGJqfMvt7P8FUr0Q1j-Hf1BkxddiNhNQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Alex Brush",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/alexbrush/v9/SZc83FzrJKuqFbwMKk6EtUI.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Alfa Slab One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/alfaslabone/v7/6NUQ8FmMKwSEKjnm5-4v-4Jh6dU.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Alice",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/alice/v9/OpNCnoEEmtHa6FcJ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Alike",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v10",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/alike/v10/HI_EiYEYI6BIoEjB.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Alike Angular",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/alikeangular/v8/3qTrojWunjGQtEBlIcwMbSoI3kM.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Allan",
		   "category": "display",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v10",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/allan/v10/ea8XadU7WuTxEtb2.ttf",
		    "700": "http://fonts.gstatic.com/s/allan/v10/ea8aadU7WuTxEu5KEPCN.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Allerta",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/allerta/v8/TwMO-IAHRlkbx940UnE.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Allerta Stencil",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/allertastencil/v8/HTx0L209KT-LmIE9N7OR6eiycOeF-w.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Allura",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/allura/v6/9oRPNYsQpS4zjuAPjA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Almendra",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v10",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/almendra/v10/H4ckBXKAlMnTn0CskyY6.ttf",
		    "italic": "http://fonts.gstatic.com/s/almendra/v10/H4ciBXKAlMnTn0CskxY4yLs.ttf",
		    "700": "http://fonts.gstatic.com/s/almendra/v10/H4cjBXKAlMnTn0Cskx6G7Zu4.ttf",
		    "700italic": "http://fonts.gstatic.com/s/almendra/v10/H4chBXKAlMnTn0CskxY48Ae9oqY.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Almendra Display",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/almendradisplay/v8/0FlPVOGWl1Sb4O3tETtADHRRlZhzXS8.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Almendra SC",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/almendrasc/v8/Iure6Yx284eebowr7hbyTZZJ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Amarante",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/amarante/v5/xMQXuF1KTa6EvGx9bq-3.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Amaranth",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/amaranth/v8/KtkuALODe433f0j1zPnC.ttf",
		    "italic": "http://fonts.gstatic.com/s/amaranth/v8/KtkoALODe433f0j1zMnAHdU.ttf",
		    "700": "http://fonts.gstatic.com/s/amaranth/v8/KtkpALODe433f0j1zMF-OPWi.ttf",
		    "700italic": "http://fonts.gstatic.com/s/amaranth/v8/KtkrALODe433f0j1zMnAJWmn42Q.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Amatic SC",
		   "category": "handwriting",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "vietnamese",
		    "hebrew",
		    "latin-ext",
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v11",
		   "lastModified": "2017-11-07",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/amaticsc/v11/TUZyzwprpvBS1izr_vO0DQ.ttf",
		    "700": "http://fonts.gstatic.com/s/amaticsc/v11/TUZ3zwprpvBS1izr_vOMscG6eQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Amethysta",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/amethysta/v6/rP2Fp2K15kgb_F3ibfWIGA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Amiko",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/amiko/v2/WwkQxPq1DFK04tql.ttf",
		    "600": "http://fonts.gstatic.com/s/amiko/v2/WwkdxPq1DFK04uJ9XXrE.ttf",
		    "700": "http://fonts.gstatic.com/s/amiko/v2/WwkdxPq1DFK04uIZXHrE.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Amiri",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "arabic",
		    "latin"
		   ],
		   "version": "v11",
		   "lastModified": "2018-08-01",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/amiri/v11/J7aRnpd8CGxBHqUp.ttf",
		    "italic": "http://fonts.gstatic.com/s/amiri/v11/J7afnpd8CGxBHpUrtLY.ttf",
		    "700": "http://fonts.gstatic.com/s/amiri/v11/J7acnpd8CGxBHp2VkZY4.ttf",
		    "700italic": "http://fonts.gstatic.com/s/amiri/v11/J7aanpd8CGxBHpUrjAo9zps.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Amita",
		   "category": "handwriting",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/amita/v3/HhyaU5si9Om7PQlv.ttf",
		    "700": "http://fonts.gstatic.com/s/amita/v3/HhyXU5si9Om7PTHTLtCC.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Anaheim",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/anaheim/v5/8vII7w042Wp87g4G0UQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Andada",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/andada/v9/uK_y4riWaego3w9RCg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Andika",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/andika/v9/mem_Ya6iyW-LwqgAbQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Angkor",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "khmer"
		   ],
		   "version": "v10",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/angkor/v10/H4cmBXyAlsPdnlb-8g.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Annie Use Your Telescope",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/annieuseyourtelescope/v8/daaLSS4tI2qYYl3Jq9s_Hu74xwktnlKxH6osGVGjlA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Anonymous Pro",
		   "category": "monospace",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "greek"
		   ],
		   "version": "v11",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/anonymouspro/v11/rP2Bp2a15UIB7Un-bOeISG3pLlw.ttf",
		    "italic": "http://fonts.gstatic.com/s/anonymouspro/v11/rP2fp2a15UIB7Un-bOeISG3pHl428A.ttf",
		    "700": "http://fonts.gstatic.com/s/anonymouspro/v11/rP2cp2a15UIB7Un-bOeISG3pFuAT0Ck.ttf",
		    "700italic": "http://fonts.gstatic.com/s/anonymouspro/v11/rP2ap2a15UIB7Un-bOeISG3pHl4OTCzc6A.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Antic",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/antic/v9/TuGfUVB8XY5DRaZL.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Antic Didone",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/anticdidone/v6/RWmPoKKX6u8sp8fIWdnDKqDiqQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Antic Slab",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/anticslab/v6/bWt97fPFfRzkCa9Jlp6IWcI.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Anton",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/anton/v9/1Ptgg87LROyAm0K0.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Arapey",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/arapey/v6/-W__XJn-UDDA2RC6Zw.ttf",
		    "italic": "http://fonts.gstatic.com/s/arapey/v6/-W_9XJn-UDDA2RCKZdoY.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Arbutus",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/arbutus/v7/NaPYcZ7dG_5J3poob9I.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Arbutus Slab",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/arbutusslab/v6/oY1Z8e7OuLXkJGbXtr5ba7ZVaw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Architects Daughter",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/architectsdaughter/v8/KtkxAKiDZI_td1Lkx62xHZHDtgO_Y-bvfY4.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Archivo",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-11-21",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/archivo/v3/k3kQo8UDI-1M0wlSTd4.ttf",
		    "italic": "http://fonts.gstatic.com/s/archivo/v3/k3kSo8UDI-1M0wlSfdzoKw.ttf",
		    "500": "http://fonts.gstatic.com/s/archivo/v3/k3kVo8UDI-1M0wlSdSrLC0E.ttf",
		    "500italic": "http://fonts.gstatic.com/s/archivo/v3/k3kXo8UDI-1M0wlSfdzQ30LhKQ.ttf",
		    "600": "http://fonts.gstatic.com/s/archivo/v3/k3kVo8UDI-1M0wlSdQbMC0E.ttf",
		    "600italic": "http://fonts.gstatic.com/s/archivo/v3/k3kXo8UDI-1M0wlSfdzQ80XhKQ.ttf",
		    "700": "http://fonts.gstatic.com/s/archivo/v3/k3kVo8UDI-1M0wlSdWLNC0E.ttf",
		    "700italic": "http://fonts.gstatic.com/s/archivo/v3/k3kXo8UDI-1M0wlSfdzQl0ThKQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Archivo Black",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/archivoblack/v7/HTxqL289NzCGg4MzN6KJ7eW6OYs.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Archivo Narrow",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/archivonarrow/v8/tss0ApVBdCYD5Q7hcxTE1ArZ0Yb3.ttf",
		    "italic": "http://fonts.gstatic.com/s/archivonarrow/v8/tss2ApVBdCYD5Q7hcxTE1ArZ0bb1iXk.ttf",
		    "500": "http://fonts.gstatic.com/s/archivonarrow/v8/tss3ApVBdCYD5Q7hcxTE1ArZ0b4Dqlla.ttf",
		    "500italic": "http://fonts.gstatic.com/s/archivonarrow/v8/tssxApVBdCYD5Q7hcxTE1ArZ0bb1sY1Z-9c.ttf",
		    "600": "http://fonts.gstatic.com/s/archivonarrow/v8/tss3ApVBdCYD5Q7hcxTE1ArZ0b4vrVla.ttf",
		    "600italic": "http://fonts.gstatic.com/s/archivonarrow/v8/tssxApVBdCYD5Q7hcxTE1ArZ0bb1saFe-9c.ttf",
		    "700": "http://fonts.gstatic.com/s/archivonarrow/v8/tss3ApVBdCYD5Q7hcxTE1ArZ0b5LrFla.ttf",
		    "700italic": "http://fonts.gstatic.com/s/archivonarrow/v8/tssxApVBdCYD5Q7hcxTE1ArZ0bb1scVf-9c.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Aref Ruqaa",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "arabic",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2018-08-01",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/arefruqaa/v6/WwkbxPW1E165rajQKDulEIA.ttf",
		    "700": "http://fonts.gstatic.com/s/arefruqaa/v6/WwkYxPW1E165rajQKDulKDwNcNI.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Arima Madurai",
		   "category": "display",
		   "variants": [
		    "100",
		    "200",
		    "300",
		    "regular",
		    "500",
		    "700",
		    "800",
		    "900"
		   ],
		   "subsets": [
		    "tamil",
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/arimamadurai/v3/t5t4IRoeKYORG0WNMgnC3seB1V3Pqg.ttf",
		    "200": "http://fonts.gstatic.com/s/arimamadurai/v3/t5t7IRoeKYORG0WNMgnC3seB1fHuips.ttf",
		    "300": "http://fonts.gstatic.com/s/arimamadurai/v3/t5t7IRoeKYORG0WNMgnC3seB1ZXtips.ttf",
		    "regular": "http://fonts.gstatic.com/s/arimamadurai/v3/t5tmIRoeKYORG0WNMgnC3seB7Tk.ttf",
		    "500": "http://fonts.gstatic.com/s/arimamadurai/v3/t5t7IRoeKYORG0WNMgnC3seB1c3sips.ttf",
		    "700": "http://fonts.gstatic.com/s/arimamadurai/v3/t5t7IRoeKYORG0WNMgnC3seB1YXqips.ttf",
		    "800": "http://fonts.gstatic.com/s/arimamadurai/v3/t5t7IRoeKYORG0WNMgnC3seB1Znpips.ttf",
		    "900": "http://fonts.gstatic.com/s/arimamadurai/v3/t5t7IRoeKYORG0WNMgnC3seB1b3oips.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Arimo",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "greek-ext",
		    "vietnamese",
		    "hebrew",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v11",
		   "lastModified": "2017-10-11",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/arimo/v11/P5sMzZCDf9_T_20e.ttf",
		    "italic": "http://fonts.gstatic.com/s/arimo/v11/P5sCzZCDf9_T_10cxCQ.ttf",
		    "700": "http://fonts.gstatic.com/s/arimo/v11/P5sBzZCDf9_T_1Wi4QRE.ttf",
		    "700italic": "http://fonts.gstatic.com/s/arimo/v11/P5sHzZCDf9_T_10c_JhBrZc.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Arizonia",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/arizonia/v8/neIIzCemt4A5qa7mv6WG.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Armata",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/armata/v9/gokvH63_HV5jQ-E9lA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Arsenal",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/arsenal/v2/wXKrE3kQtZQ4pF3D118.ttf",
		    "italic": "http://fonts.gstatic.com/s/arsenal/v2/wXKpE3kQtZQ4pF3D513cBQ.ttf",
		    "700": "http://fonts.gstatic.com/s/arsenal/v2/wXKuE3kQtZQ4pF3D7-P5JeQ.ttf",
		    "700italic": "http://fonts.gstatic.com/s/arsenal/v2/wXKsE3kQtZQ4pF3D513kueEKnQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Artifika",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/artifika/v8/VEMyRoxzronptCuxu6Wt.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Arvo",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v10",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/arvo/v10/tDbD2oWUg0MKmSA.ttf",
		    "italic": "http://fonts.gstatic.com/s/arvo/v10/tDbN2oWUg0MKqSIQ6A.ttf",
		    "700": "http://fonts.gstatic.com/s/arvo/v10/tDbM2oWUg0MKoZw1yLQ.ttf",
		    "700italic": "http://fonts.gstatic.com/s/arvo/v10/tDbO2oWUg0MKqSIoVLHK9g.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Arya",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/arya/v3/ga6CawNG-HJd9UY.ttf",
		    "700": "http://fonts.gstatic.com/s/arya/v3/ga6NawNG-HJdzfra3b8.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Asap",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/asap/v8/KFOoCniXp96a-zw.ttf",
		    "italic": "http://fonts.gstatic.com/s/asap/v8/KFOmCniXp96ayz4e5Q.ttf",
		    "500": "http://fonts.gstatic.com/s/asap/v8/KFOnCniXp96aw8g9xUw.ttf",
		    "500italic": "http://fonts.gstatic.com/s/asap/v8/KFOlCniXp96ayz4mEU9vAw.ttf",
		    "600": "http://fonts.gstatic.com/s/asap/v8/KFOnCniXp96aw-Q6xUw.ttf",
		    "600italic": "http://fonts.gstatic.com/s/asap/v8/KFOlCniXp96ayz4mPUhvAw.ttf",
		    "700": "http://fonts.gstatic.com/s/asap/v8/KFOnCniXp96aw4A7xUw.ttf",
		    "700italic": "http://fonts.gstatic.com/s/asap/v8/KFOlCniXp96ayz4mWUlvAw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Asap Condensed",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-11-21",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/asapcondensed/v2/pxidypY1o9NHyXh3WvSbGSggdNeL.ttf",
		    "italic": "http://fonts.gstatic.com/s/asapcondensed/v2/pxifypY1o9NHyXh3WvSbGSggdOeJaEk.ttf",
		    "500": "http://fonts.gstatic.com/s/asapcondensed/v2/pxieypY1o9NHyXh3WvSbGSggdO9_S2lE.ttf",
		    "500italic": "http://fonts.gstatic.com/s/asapcondensed/v2/pxiYypY1o9NHyXh3WvSbGSggdOeJUL1Him4.ttf",
		    "600": "http://fonts.gstatic.com/s/asapcondensed/v2/pxieypY1o9NHyXh3WvSbGSggdO9TTGlE.ttf",
		    "600italic": "http://fonts.gstatic.com/s/asapcondensed/v2/pxiYypY1o9NHyXh3WvSbGSggdOeJUJFAim4.ttf",
		    "700": "http://fonts.gstatic.com/s/asapcondensed/v2/pxieypY1o9NHyXh3WvSbGSggdO83TWlE.ttf",
		    "700italic": "http://fonts.gstatic.com/s/asapcondensed/v2/pxiYypY1o9NHyXh3WvSbGSggdOeJUPVBim4.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Asar",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/asar/v5/sZlLdRyI6TBIXkY.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Asset",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/asset/v8/SLXGc1na-mM4cWIm.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Assistant",
		   "category": "sans-serif",
		   "variants": [
		    "200",
		    "300",
		    "regular",
		    "600",
		    "700",
		    "800"
		   ],
		   "subsets": [
		    "hebrew",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-10",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/assistant/v2/2sDZZGJYnIjSi6H75xk7p0ScAw.ttf",
		    "300": "http://fonts.gstatic.com/s/assistant/v2/2sDZZGJYnIjSi6H75xk7w0ecAw.ttf",
		    "regular": "http://fonts.gstatic.com/s/assistant/v2/2sDcZGJYnIjSi6H75xkDbw.ttf",
		    "600": "http://fonts.gstatic.com/s/assistant/v2/2sDZZGJYnIjSi6H75xk7t0GcAw.ttf",
		    "700": "http://fonts.gstatic.com/s/assistant/v2/2sDZZGJYnIjSi6H75xk700CcAw.ttf",
		    "800": "http://fonts.gstatic.com/s/assistant/v2/2sDZZGJYnIjSi6H75xk7z0OcAw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Astloch",
		   "category": "display",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/astloch/v8/TuGRUVJ8QI5GSeUjq9w.ttf",
		    "700": "http://fonts.gstatic.com/s/astloch/v8/TuGUUVJ8QI5GSeUjk2A-6MM.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Asul",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/asul/v7/VuJ-dNjKxYr46fM.ttf",
		    "700": "http://fonts.gstatic.com/s/asul/v7/VuJxdNjKxYr40U8qeKY.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Athiti",
		   "category": "sans-serif",
		   "variants": [
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "thai",
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-10",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/athiti/v2/pe0sMISdLIZIv1wAxDNyAg.ttf",
		    "300": "http://fonts.gstatic.com/s/athiti/v2/pe0sMISdLIZIv1wAoDByAg.ttf",
		    "regular": "http://fonts.gstatic.com/s/athiti/v2/pe0vMISdLIZIv1w4DA.ttf",
		    "500": "http://fonts.gstatic.com/s/athiti/v2/pe0sMISdLIZIv1wA-DFyAg.ttf",
		    "600": "http://fonts.gstatic.com/s/athiti/v2/pe0sMISdLIZIv1wA1DZyAg.ttf",
		    "700": "http://fonts.gstatic.com/s/athiti/v2/pe0sMISdLIZIv1wAsDdyAg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Atma",
		   "category": "display",
		   "variants": [
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "bengali",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-09",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/atma/v3/uK_z4rqWc-Eoo8JzKjc.ttf",
		    "regular": "http://fonts.gstatic.com/s/atma/v3/uK_84rqWc-Eom24.ttf",
		    "500": "http://fonts.gstatic.com/s/atma/v3/uK_z4rqWc-Eoo5pyKjc.ttf",
		    "600": "http://fonts.gstatic.com/s/atma/v3/uK_z4rqWc-Eoo7Z1Kjc.ttf",
		    "700": "http://fonts.gstatic.com/s/atma/v3/uK_z4rqWc-Eoo9J0Kjc.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Atomic Age",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v10",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/atomicage/v10/f0Xz0eug6sdmRFkYZZGL58E.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Aubrey",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v10",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/aubrey/v10/q5uGsou7NPBw-p7vug.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Audiowide",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/audiowide/v6/l7gdbjpo0cum0ckerWCtkQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Autour One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/autourone/v7/UqyVK80cP25l3fJgbdfbk5k.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Average",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/average/v6/fC1hPYBHe23MxA7rIeI.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Average Sans",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/averagesans/v6/1Ptpg8fLXP2dlAXR-HlJJNJPBQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Averia Gruesa Libre",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/averiagruesalibre/v6/NGSov4nEGEktOaDRKsY-1dhh8eEtIx3ZUmk.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Averia Libre",
		   "category": "display",
		   "variants": [
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/averialibre/v6/2V0FKIcMGZEnV6xygz7eNjEarovtbw.ttf",
		    "300italic": "http://fonts.gstatic.com/s/averialibre/v6/2V0HKIcMGZEnV6xygz7eNjESAJFhbUTp.ttf",
		    "regular": "http://fonts.gstatic.com/s/averialibre/v6/2V0aKIcMGZEnV6xygz7eNjEiAg.ttf",
		    "italic": "http://fonts.gstatic.com/s/averialibre/v6/2V0EKIcMGZEnV6xygz7eNjESAKnN.ttf",
		    "700": "http://fonts.gstatic.com/s/averialibre/v6/2V0FKIcMGZEnV6xygz7eNjEavoztbw.ttf",
		    "700italic": "http://fonts.gstatic.com/s/averialibre/v6/2V0HKIcMGZEnV6xygz7eNjESAJFxakTp.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Averia Sans Libre",
		   "category": "display",
		   "variants": [
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/averiasanslibre/v6/ga6SaxZG_G5OvCf_rt7FH3B6BHLMEd3lMKcQ.ttf",
		    "300italic": "http://fonts.gstatic.com/s/averiasanslibre/v6/ga6caxZG_G5OvCf_rt7FH3B6BHLMEdVLKisSL5c.ttf",
		    "regular": "http://fonts.gstatic.com/s/averiasanslibre/v6/ga6XaxZG_G5OvCf_rt7FH3B6BHLMEeVJ.ttf",
		    "italic": "http://fonts.gstatic.com/s/averiasanslibre/v6/ga6RaxZG_G5OvCf_rt7FH3B6BHLMEdVLEoc.ttf",
		    "700": "http://fonts.gstatic.com/s/averiasanslibre/v6/ga6SaxZG_G5OvCf_rt7FH3B6BHLMEd31N6cQ.ttf",
		    "700italic": "http://fonts.gstatic.com/s/averiasanslibre/v6/ga6caxZG_G5OvCf_rt7FH3B6BHLMEdVLKjsVL5c.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Averia Serif Libre",
		   "category": "display",
		   "variants": [
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/averiaseriflibre/v7/neIVzD2ms4wxr6GvjeD0X88SHPyX2xYGCSmqwQ.ttf",
		    "300italic": "http://fonts.gstatic.com/s/averiaseriflibre/v7/neIbzD2ms4wxr6GvjeD0X88SHPyX2xYOpzMmw60u.ttf",
		    "regular": "http://fonts.gstatic.com/s/averiaseriflibre/v7/neIWzD2ms4wxr6GvjeD0X88SHPyX2xY-pQ.ttf",
		    "italic": "http://fonts.gstatic.com/s/averiaseriflibre/v7/neIUzD2ms4wxr6GvjeD0X88SHPyX2xYOpwuK.ttf",
		    "700": "http://fonts.gstatic.com/s/averiaseriflibre/v7/neIVzD2ms4wxr6GvjeD0X88SHPyX2xYGGS6qwQ.ttf",
		    "700italic": "http://fonts.gstatic.com/s/averiaseriflibre/v7/neIbzD2ms4wxr6GvjeD0X88SHPyX2xYOpzM2xK0u.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Bad Script",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/badscript/v6/6NUT8F6PJgbFWQn47_x7lOw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Bahiana",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/bahiana/v2/uU9PCBUV4YenPWJU7xM.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Bai Jamjuree",
		   "category": "sans-serif",
		   "variants": [
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "thai",
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v1",
		   "lastModified": "2018-09-26",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/baijamjuree/v1/LDIqapSCOBt_aeQQ7ftydoa0kePukw.ttf",
		    "200italic": "http://fonts.gstatic.com/s/baijamjuree/v1/LDIoapSCOBt_aeQQ7ftydoa8W_oGkpox.ttf",
		    "300": "http://fonts.gstatic.com/s/baijamjuree/v1/LDIqapSCOBt_aeQQ7ftydoa09eDukw.ttf",
		    "300italic": "http://fonts.gstatic.com/s/baijamjuree/v1/LDIoapSCOBt_aeQQ7ftydoa8W_pikZox.ttf",
		    "regular": "http://fonts.gstatic.com/s/baijamjuree/v1/LDI1apSCOBt_aeQQ7ftydoaMWQ.ttf",
		    "italic": "http://fonts.gstatic.com/s/baijamjuree/v1/LDIrapSCOBt_aeQQ7ftydoa8W8LO.ttf",
		    "500": "http://fonts.gstatic.com/s/baijamjuree/v1/LDIqapSCOBt_aeQQ7ftydoa0reHukw.ttf",
		    "500italic": "http://fonts.gstatic.com/s/baijamjuree/v1/LDIoapSCOBt_aeQQ7ftydoa8W_o6kJox.ttf",
		    "600": "http://fonts.gstatic.com/s/baijamjuree/v1/LDIqapSCOBt_aeQQ7ftydoa0gebukw.ttf",
		    "600italic": "http://fonts.gstatic.com/s/baijamjuree/v1/LDIoapSCOBt_aeQQ7ftydoa8W_oWl5ox.ttf",
		    "700": "http://fonts.gstatic.com/s/baijamjuree/v1/LDIqapSCOBt_aeQQ7ftydoa05efukw.ttf",
		    "700italic": "http://fonts.gstatic.com/s/baijamjuree/v1/LDIoapSCOBt_aeQQ7ftydoa8W_pylpox.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Baloo",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "devanagari",
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-11-21",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/baloo/v3/6xKhdSpJJ92I9PWI.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Baloo Bhai",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "gujarati"
		   ],
		   "version": "v3",
		   "lastModified": "2017-11-21",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/baloobhai/v3/ZgNWjP5GM7bCUdmXgWyVjGU.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Baloo Bhaijaan",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "arabic",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2018-08-29",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/baloobhaijaan/v4/RWmRoKCU5fcqq8fOWNzFLqSjx4EC.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Baloo Bhaina",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "oriya"
		   ],
		   "version": "v3",
		   "lastModified": "2017-11-21",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/baloobhaina/v3/Noa16Uzzzp2FIkfhq5vm9thxPA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Baloo Chettan",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "malayalam",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-11-21",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/baloochettan/v3/0QImMXRN8o2gTC2YTr4665DA07w.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Baloo Da",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "bengali",
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-11-21",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/balooda/v3/LhWmMVnXOfIZO795FXkf.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Baloo Paaji",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "gurmukhi",
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/baloopaaji/v4/8AttGsyxM5KQQU-Y4MTwVZnT.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Baloo Tamma",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "kannada"
		   ],
		   "version": "v4",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/balootamma/v4/JTUTjIk68Cy27gWhOWIghE5B.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Baloo Tammudu",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "telugu"
		   ],
		   "version": "v4",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/balootammudu/v4/mFT3Wb8Qza7c_Z5HTsC_5nxW8Eo.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Baloo Thambi",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "tamil",
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-11-21",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/baloothambi/v3/va9B4kXJzNhTFoA7CYcS8sHuQQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Balthazar",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/balthazar/v7/d6lKkaajS8Gm4CVQjFEvyQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Bangers",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v10",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/bangers/v10/FeVQS0BTqb0h60ACL5k.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Barlow",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "100italic",
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v1",
		   "lastModified": "2017-11-21",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/barlow/v1/7cHrv4kjgoGqM7E3b8s8.ttf",
		    "100italic": "http://fonts.gstatic.com/s/barlow/v1/7cHtv4kjgoGqM7E_CfNYwHo.ttf",
		    "200": "http://fonts.gstatic.com/s/barlow/v1/7cHqv4kjgoGqM7E3w-oc4A.ttf",
		    "200italic": "http://fonts.gstatic.com/s/barlow/v1/7cHsv4kjgoGqM7E_CfP04Vop.ttf",
		    "300": "http://fonts.gstatic.com/s/barlow/v1/7cHqv4kjgoGqM7E3p-kc4A.ttf",
		    "300italic": "http://fonts.gstatic.com/s/barlow/v1/7cHsv4kjgoGqM7E_CfOQ4lop.ttf",
		    "regular": "http://fonts.gstatic.com/s/barlow/v1/7cHpv4kjgoGqM7EPCw.ttf",
		    "italic": "http://fonts.gstatic.com/s/barlow/v1/7cHrv4kjgoGqM7E_Ccs8.ttf",
		    "500": "http://fonts.gstatic.com/s/barlow/v1/7cHqv4kjgoGqM7E3_-gc4A.ttf",
		    "500italic": "http://fonts.gstatic.com/s/barlow/v1/7cHsv4kjgoGqM7E_CfPI41op.ttf",
		    "600": "http://fonts.gstatic.com/s/barlow/v1/7cHqv4kjgoGqM7E30-8c4A.ttf",
		    "600italic": "http://fonts.gstatic.com/s/barlow/v1/7cHsv4kjgoGqM7E_CfPk5Fop.ttf",
		    "700": "http://fonts.gstatic.com/s/barlow/v1/7cHqv4kjgoGqM7E3t-4c4A.ttf",
		    "700italic": "http://fonts.gstatic.com/s/barlow/v1/7cHsv4kjgoGqM7E_CfOA5Vop.ttf",
		    "800": "http://fonts.gstatic.com/s/barlow/v1/7cHqv4kjgoGqM7E3q-0c4A.ttf",
		    "800italic": "http://fonts.gstatic.com/s/barlow/v1/7cHsv4kjgoGqM7E_CfOc5lop.ttf",
		    "900": "http://fonts.gstatic.com/s/barlow/v1/7cHqv4kjgoGqM7E3j-wc4A.ttf",
		    "900italic": "http://fonts.gstatic.com/s/barlow/v1/7cHsv4kjgoGqM7E_CfO451op.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Barlow Condensed",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "100italic",
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v1",
		   "lastModified": "2017-11-21",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/barlowcondensed/v1/HTxxL3I-JCGChYJ8VI-L6OO_au7B43LT3w.ttf",
		    "100italic": "http://fonts.gstatic.com/s/barlowcondensed/v1/HTxzL3I-JCGChYJ8VI-L6OO_au7B6xTru1H2.ttf",
		    "200": "http://fonts.gstatic.com/s/barlowcondensed/v1/HTxwL3I-JCGChYJ8VI-L6OO_au7B497y_3E.ttf",
		    "200italic": "http://fonts.gstatic.com/s/barlowcondensed/v1/HTxyL3I-JCGChYJ8VI-L6OO_au7B6xTrF3DWvA.ttf",
		    "300": "http://fonts.gstatic.com/s/barlowcondensed/v1/HTxwL3I-JCGChYJ8VI-L6OO_au7B47rx_3E.ttf",
		    "300italic": "http://fonts.gstatic.com/s/barlowcondensed/v1/HTxyL3I-JCGChYJ8VI-L6OO_au7B6xTrc3PWvA.ttf",
		    "regular": "http://fonts.gstatic.com/s/barlowcondensed/v1/HTx3L3I-JCGChYJ8VI-L6OO_au7B2xY.ttf",
		    "italic": "http://fonts.gstatic.com/s/barlowcondensed/v1/HTxxL3I-JCGChYJ8VI-L6OO_au7B6xTT3w.ttf",
		    "500": "http://fonts.gstatic.com/s/barlowcondensed/v1/HTxwL3I-JCGChYJ8VI-L6OO_au7B4-Lw_3E.ttf",
		    "500italic": "http://fonts.gstatic.com/s/barlowcondensed/v1/HTxyL3I-JCGChYJ8VI-L6OO_au7B6xTrK3LWvA.ttf",
		    "600": "http://fonts.gstatic.com/s/barlowcondensed/v1/HTxwL3I-JCGChYJ8VI-L6OO_au7B4873_3E.ttf",
		    "600italic": "http://fonts.gstatic.com/s/barlowcondensed/v1/HTxyL3I-JCGChYJ8VI-L6OO_au7B6xTrB3XWvA.ttf",
		    "700": "http://fonts.gstatic.com/s/barlowcondensed/v1/HTxwL3I-JCGChYJ8VI-L6OO_au7B46r2_3E.ttf",
		    "700italic": "http://fonts.gstatic.com/s/barlowcondensed/v1/HTxyL3I-JCGChYJ8VI-L6OO_au7B6xTrY3TWvA.ttf",
		    "800": "http://fonts.gstatic.com/s/barlowcondensed/v1/HTxwL3I-JCGChYJ8VI-L6OO_au7B47b1_3E.ttf",
		    "800italic": "http://fonts.gstatic.com/s/barlowcondensed/v1/HTxyL3I-JCGChYJ8VI-L6OO_au7B6xTrf3fWvA.ttf",
		    "900": "http://fonts.gstatic.com/s/barlowcondensed/v1/HTxwL3I-JCGChYJ8VI-L6OO_au7B45L0_3E.ttf",
		    "900italic": "http://fonts.gstatic.com/s/barlowcondensed/v1/HTxyL3I-JCGChYJ8VI-L6OO_au7B6xTrW3bWvA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Barlow Semi Condensed",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "100italic",
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2018-10-08",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/barlowsemicondensed/v2/wlphgxjLBV1hqnzfr-F8sEYMB0Yybp0mudRfG4qv.ttf",
		    "100italic": "http://fonts.gstatic.com/s/barlowsemicondensed/v2/wlpjgxjLBV1hqnzfr-F8sEYMB0Yybp0mudRXfbLLIEs.ttf",
		    "200": "http://fonts.gstatic.com/s/barlowsemicondensed/v2/wlpigxjLBV1hqnzfr-F8sEYMB0Yybp0mudRft6uPAA.ttf",
		    "200italic": "http://fonts.gstatic.com/s/barlowsemicondensed/v2/wlpkgxjLBV1hqnzfr-F8sEYMB0Yybp0mudRXfbJnAWsg.ttf",
		    "300": "http://fonts.gstatic.com/s/barlowsemicondensed/v2/wlpigxjLBV1hqnzfr-F8sEYMB0Yybp0mudRf06iPAA.ttf",
		    "300italic": "http://fonts.gstatic.com/s/barlowsemicondensed/v2/wlpkgxjLBV1hqnzfr-F8sEYMB0Yybp0mudRXfbIDAmsg.ttf",
		    "regular": "http://fonts.gstatic.com/s/barlowsemicondensed/v2/wlpvgxjLBV1hqnzfr-F8sEYMB0Yybp0mudRnfw.ttf",
		    "italic": "http://fonts.gstatic.com/s/barlowsemicondensed/v2/wlphgxjLBV1hqnzfr-F8sEYMB0Yybp0mudRXfYqv.ttf",
		    "500": "http://fonts.gstatic.com/s/barlowsemicondensed/v2/wlpigxjLBV1hqnzfr-F8sEYMB0Yybp0mudRfi6mPAA.ttf",
		    "500italic": "http://fonts.gstatic.com/s/barlowsemicondensed/v2/wlpkgxjLBV1hqnzfr-F8sEYMB0Yybp0mudRXfbJbA2sg.ttf",
		    "600": "http://fonts.gstatic.com/s/barlowsemicondensed/v2/wlpigxjLBV1hqnzfr-F8sEYMB0Yybp0mudRfp66PAA.ttf",
		    "600italic": "http://fonts.gstatic.com/s/barlowsemicondensed/v2/wlpkgxjLBV1hqnzfr-F8sEYMB0Yybp0mudRXfbJ3BGsg.ttf",
		    "700": "http://fonts.gstatic.com/s/barlowsemicondensed/v2/wlpigxjLBV1hqnzfr-F8sEYMB0Yybp0mudRfw6-PAA.ttf",
		    "700italic": "http://fonts.gstatic.com/s/barlowsemicondensed/v2/wlpkgxjLBV1hqnzfr-F8sEYMB0Yybp0mudRXfbITBWsg.ttf",
		    "800": "http://fonts.gstatic.com/s/barlowsemicondensed/v2/wlpigxjLBV1hqnzfr-F8sEYMB0Yybp0mudRf36yPAA.ttf",
		    "800italic": "http://fonts.gstatic.com/s/barlowsemicondensed/v2/wlpkgxjLBV1hqnzfr-F8sEYMB0Yybp0mudRXfbIPBmsg.ttf",
		    "900": "http://fonts.gstatic.com/s/barlowsemicondensed/v2/wlpigxjLBV1hqnzfr-F8sEYMB0Yybp0mudRf-62PAA.ttf",
		    "900italic": "http://fonts.gstatic.com/s/barlowsemicondensed/v2/wlpkgxjLBV1hqnzfr-F8sEYMB0Yybp0mudRXfbIrB2sg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Barrio",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/barrio/v2/wEO8EBXBk8hBIDiEdQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Basic",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/basic/v7/xfu_0WLxV2_XKQN3.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Battambang",
		   "category": "display",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "khmer"
		   ],
		   "version": "v11",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/battambang/v11/uk-mEGe7raEw-HjkzZabDnU.ttf",
		    "700": "http://fonts.gstatic.com/s/battambang/v11/uk-lEGe7raEw-HjkzZabNsmMxyQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Baumans",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/baumans/v7/-W_-XJj9QyTd3QfpR_o.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Bayon",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "khmer"
		   ],
		   "version": "v11",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/bayon/v11/9XUrlJNmn0LPFl-p.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Belgrano",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/belgrano/v8/55xvey5tM9rwKWrJZcMF.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Bellefair",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "hebrew",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-11-21",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/bellefair/v3/kJExBuYY6AAuhiXUxG19_w.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Belleza",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/belleza/v6/0nkoC9_pNeMfhX4BtcY.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "BenchNine",
		   "category": "sans-serif",
		   "variants": [
		    "300",
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/benchnine/v6/ahcev8612zF4jxrwMosT--tRhQ.ttf",
		    "regular": "http://fonts.gstatic.com/s/benchnine/v6/ahcbv8612zF4jxrwMosrVw.ttf",
		    "700": "http://fonts.gstatic.com/s/benchnine/v6/ahcev8612zF4jxrwMosT6-xRhQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Bentham",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/bentham/v8/VdGeAZQPEpYfmHglKWw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Berkshire Swash",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/berkshireswash/v6/ptRRTi-cavZOGqCvnNJDl5m5XmNPrQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Bevan",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/bevan/v9/4iCj6KZ0a9NXjF8a.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Bigelow Rules",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/bigelowrules/v6/RrQWboly8iR_I3KWSzeRuN0zT4c.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Bigshot One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/bigshotone/v8/u-470qukhRkkO6BD_7cM_gxu.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Bilbo",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/bilbo/v7/o-0EIpgpwWwZ210h.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Bilbo Swash Caps",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v10",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/bilboswashcaps/v10/zrf-0GXbz-H3Wb4XBsGrTgq2PVmdqAM.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "BioRhyme",
		   "category": "serif",
		   "variants": [
		    "200",
		    "300",
		    "regular",
		    "700",
		    "800"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-10",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/biorhyme/v2/1cX3aULHBpDMsHYW_ESOjnGA.ttf",
		    "300": "http://fonts.gstatic.com/s/biorhyme/v2/1cX3aULHBpDMsHYW_ETqjXGA.ttf",
		    "regular": "http://fonts.gstatic.com/s/biorhyme/v2/1cXwaULHBpDMsHYW_HxG.ttf",
		    "700": "http://fonts.gstatic.com/s/biorhyme/v2/1cX3aULHBpDMsHYW_ET6inGA.ttf",
		    "800": "http://fonts.gstatic.com/s/biorhyme/v2/1cX3aULHBpDMsHYW_ETmiXGA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "BioRhyme Expanded",
		   "category": "serif",
		   "variants": [
		    "200",
		    "300",
		    "regular",
		    "700",
		    "800"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2018-11-08",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/biorhymeexpanded/v4/i7dVIE1zZzytGswgU577CDY9LjbffxxcblSHSdTXrb_z.ttf",
		    "300": "http://fonts.gstatic.com/s/biorhymeexpanded/v4/i7dVIE1zZzytGswgU577CDY9Ljbffxw4bVSHSdTXrb_z.ttf",
		    "regular": "http://fonts.gstatic.com/s/biorhymeexpanded/v4/i7dQIE1zZzytGswgU577CDY9LjbffySURXCPYsje.ttf",
		    "700": "http://fonts.gstatic.com/s/biorhymeexpanded/v4/i7dVIE1zZzytGswgU577CDY9LjbffxwoalSHSdTXrb_z.ttf",
		    "800": "http://fonts.gstatic.com/s/biorhymeexpanded/v4/i7dVIE1zZzytGswgU577CDY9Ljbffxw0aVSHSdTXrb_z.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Biryani",
		   "category": "sans-serif",
		   "variants": [
		    "200",
		    "300",
		    "regular",
		    "600",
		    "700",
		    "800",
		    "900"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/biryani/v3/hv-TlzNxIFoO84YddYQyGTA.ttf",
		    "300": "http://fonts.gstatic.com/s/biryani/v3/hv-TlzNxIFoO84YddeAxGTA.ttf",
		    "regular": "http://fonts.gstatic.com/s/biryani/v3/hv-WlzNxIFoO84YdTUw.ttf",
		    "600": "http://fonts.gstatic.com/s/biryani/v3/hv-TlzNxIFoO84YddZQ3GTA.ttf",
		    "700": "http://fonts.gstatic.com/s/biryani/v3/hv-TlzNxIFoO84YddfA2GTA.ttf",
		    "800": "http://fonts.gstatic.com/s/biryani/v3/hv-TlzNxIFoO84Yddew1GTA.ttf",
		    "900": "http://fonts.gstatic.com/s/biryani/v3/hv-TlzNxIFoO84Yddcg0GTA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Bitter",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v13",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/bitter/v13/rax8HiqOu8IVPmnLeA.ttf",
		    "italic": "http://fonts.gstatic.com/s/bitter/v13/rax-HiqOu8IVPmn7eoxs.ttf",
		    "700": "http://fonts.gstatic.com/s/bitter/v13/rax_HiqOu8IVPmnzxKlMBA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Black And White Picture",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "korean",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2018-08-29",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/blackandwhitepicture/v4/TwMe-JAERlQd3ooUHBUXGmrmioKjjnRSFO-NqI5H.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Black Han Sans",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "korean",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2018-08-29",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/blackhansans/v4/ea8Aad44WunzF9a-dL6toA8r8nqV.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Black Ops One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/blackopsone/v9/qWcsB6-ypo7xBdr6Xshe96H3WDw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Bokor",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "khmer"
		   ],
		   "version": "v10",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/bokor/v10/m8JcjfpeeaqTiR2W.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Bonbon",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/bonbon/v9/0FlVVPeVlFec4ee_cA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Boogaloo",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/boogaloo/v9/kmK-Zq45GAvOdnaW6x1F.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Bowlby One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/bowlbyone/v9/taiPGmVuC4y96PFeqp8smo4.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Bowlby One SC",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/bowlbyonesc/v9/DtVlJxerQqQm37tzN3wMug9Pzgg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Brawler",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/brawler/v8/xn7gYHE3xXewAscGsgA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Bree Serif",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/breeserif/v7/4UaHrEJCrhhnVA3DgluAx60.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Bubblegum Sans",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/bubblegumsans/v6/AYCSpXb_Z9EORv1M5QTjEzMEtdaH.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Bubbler One",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/bubblerone/v6/f0Xy0eqj68ppQV9KBLmAouHH.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Buda",
		   "category": "display",
		   "variants": [
		    "300"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/buda/v8/GFDqWAN8mnyIJSSrG7U.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Buenard",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/buenard/v9/OD5DuM6Cyma8FnnsPzc.ttf",
		    "700": "http://fonts.gstatic.com/s/buenard/v9/OD5GuM6Cyma8FnnsB4vSjGA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Bungee",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/bungee/v3/N0bU2SZBIuF2PU_ECg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Bungee Hairline",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/bungeehairline/v3/snfys0G548t04270a_ljTLUVrv-7YA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Bungee Inline",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/bungeeinline/v3/Gg8zN58UcgnlCweMrih332VuDGI.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Bungee Outline",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/bungeeoutline/v3/_6_mEDvmVP24UvU2MyiGDslL3Qg3.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Bungee Shade",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/bungeeshade/v3/DtVkJxarWL0t2KdzK3oI_jks7g.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Butcherman",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/butcherman/v9/2EbiL-thF0loflXUBOdb1zU.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Butterfly Kids",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/butterflykids/v6/ll8lK2CWTjuqAsXDqlnIbMNs5S4a.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Cabin",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v12",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/cabin/v12/u-4x0qWljRw-Pe83.ttf",
		    "italic": "http://fonts.gstatic.com/s/cabin/v12/u-4_0qWljRw-Pd81__g.ttf",
		    "500": "http://fonts.gstatic.com/s/cabin/v12/u-480qWljRw-PdfD3Nhi.ttf",
		    "500italic": "http://fonts.gstatic.com/s/cabin/v12/u-460qWljRw-Pd81xwxhuyw.ttf",
		    "600": "http://fonts.gstatic.com/s/cabin/v12/u-480qWljRw-Pdfv29hi.ttf",
		    "600italic": "http://fonts.gstatic.com/s/cabin/v12/u-460qWljRw-Pd81xyBmuyw.ttf",
		    "700": "http://fonts.gstatic.com/s/cabin/v12/u-480qWljRw-PdeL2thi.ttf",
		    "700italic": "http://fonts.gstatic.com/s/cabin/v12/u-460qWljRw-Pd81x0Rnuyw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Cabin Condensed",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v11",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/cabincondensed/v11/nwpMtK6mNhBK2err_hqkYhHRqmwaYA.ttf",
		    "500": "http://fonts.gstatic.com/s/cabincondensed/v11/nwpJtK6mNhBK2err_hqkYhHRqmwilMH97A.ttf",
		    "600": "http://fonts.gstatic.com/s/cabincondensed/v11/nwpJtK6mNhBK2err_hqkYhHRqmwiuMb97A.ttf",
		    "700": "http://fonts.gstatic.com/s/cabincondensed/v11/nwpJtK6mNhBK2err_hqkYhHRqmwi3Mf97A.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Cabin Sketch",
		   "category": "display",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v11",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/cabinsketch/v11/QGYpz_kZZAGCONcK2A4bGOjMnw.ttf",
		    "700": "http://fonts.gstatic.com/s/cabinsketch/v11/QGY2z_kZZAGCONcK2A4bGOj0I_1o4Q.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Caesar Dressing",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/caesardressing/v6/yYLx0hLa3vawqtwdswbotmK4vrR3cQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Cagliostro",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/cagliostro/v6/ZgNWjP5HM73BV5amnX-TjGU.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Cairo",
		   "category": "sans-serif",
		   "variants": [
		    "200",
		    "300",
		    "regular",
		    "600",
		    "700",
		    "900"
		   ],
		   "subsets": [
		    "latin-ext",
		    "arabic",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2018-08-01",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/cairo/v4/SLXLc1nY6Hkvalrub76M.ttf",
		    "300": "http://fonts.gstatic.com/s/cairo/v4/SLXLc1nY6HkvalqKbL6M.ttf",
		    "regular": "http://fonts.gstatic.com/s/cairo/v4/SLXGc1nY6HkvamIm.ttf",
		    "600": "http://fonts.gstatic.com/s/cairo/v4/SLXLc1nY6Hkvalr-ar6M.ttf",
		    "700": "http://fonts.gstatic.com/s/cairo/v4/SLXLc1nY6Hkvalqaa76M.ttf",
		    "900": "http://fonts.gstatic.com/s/cairo/v4/SLXLc1nY6Hkvalqiab6M.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Calligraffitti",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/calligraffitti/v9/46k2lbT3XjDVqJw3DCmCFjE0vnFZ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Cambay",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/cambay/v4/SLXJc1rY6H0_ZDsGbg.ttf",
		    "italic": "http://fonts.gstatic.com/s/cambay/v4/SLXLc1rY6H0_ZDs2bL6M.ttf",
		    "700": "http://fonts.gstatic.com/s/cambay/v4/SLXKc1rY6H0_ZDs-0pusxw.ttf",
		    "700italic": "http://fonts.gstatic.com/s/cambay/v4/SLXMc1rY6H0_ZDs2bIYwwvN0.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Cambo",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/cambo/v6/IFSqHeNEk8FJk416.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Candal",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/candal/v7/XoHn2YH6T7-t_8cNAQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Cantarell",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/cantarell/v7/B50NF7ZDq37KMUvlO01Jiw.ttf",
		    "italic": "http://fonts.gstatic.com/s/cantarell/v7/B50LF7ZDq37KMUvlO015iaJu.ttf",
		    "700": "http://fonts.gstatic.com/s/cantarell/v7/B50IF7ZDq37KMUvlO01xN4dOFA.ttf",
		    "700italic": "http://fonts.gstatic.com/s/cantarell/v7/B50WF7ZDq37KMUvlO015iZrSEY6a.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Cantata One",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/cantataone/v7/PlI5Fl60Nb5obNzNe2jslVxE.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Cantora One",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/cantoraone/v7/gyB4hws1JdgnKy56GB_JX6zd.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Capriola",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/capriola/v5/wXKoE3YSppcvo1PDln_8.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Cardo",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700"
		   ],
		   "subsets": [
		    "greek-ext",
		    "latin-ext",
		    "latin",
		    "greek"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/cardo/v9/wlp_gwjKBV1pqiv_.ttf",
		    "italic": "http://fonts.gstatic.com/s/cardo/v9/wlpxgwjKBV1pqhv93IQ.ttf",
		    "700": "http://fonts.gstatic.com/s/cardo/v9/wlpygwjKBV1pqhND-aQR.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Carme",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/carme/v8/ptRHTiWdbvZIDOjG.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Carrois Gothic",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/carroisgothic/v8/Z9XPDmFATg-N1PLtLOOxvIHl9ZmD.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Carrois Gothic SC",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/carroisgothicsc/v7/ZgNJjOVHM6jfUZCmyUqT2A2HVKjc-28n.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Carter One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/carterone/v9/q5uCsoe5IOB2-pXv9UcNIxQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Catamaran",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700",
		    "800",
		    "900"
		   ],
		   "subsets": [
		    "tamil",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2017-11-21",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/catamaran/v4/o-0OIpQoyXQa2RxT7-5jhjRF.ttf",
		    "200": "http://fonts.gstatic.com/s/catamaran/v4/o-0NIpQoyXQa2RxT7-5jKhVlYw.ttf",
		    "300": "http://fonts.gstatic.com/s/catamaran/v4/o-0NIpQoyXQa2RxT7-5jThZlYw.ttf",
		    "regular": "http://fonts.gstatic.com/s/catamaran/v4/o-0IIpQoyXQa2RxT7-5b4g.ttf",
		    "500": "http://fonts.gstatic.com/s/catamaran/v4/o-0NIpQoyXQa2RxT7-5jFhdlYw.ttf",
		    "600": "http://fonts.gstatic.com/s/catamaran/v4/o-0NIpQoyXQa2RxT7-5jOhBlYw.ttf",
		    "700": "http://fonts.gstatic.com/s/catamaran/v4/o-0NIpQoyXQa2RxT7-5jXhFlYw.ttf",
		    "800": "http://fonts.gstatic.com/s/catamaran/v4/o-0NIpQoyXQa2RxT7-5jQhJlYw.ttf",
		    "900": "http://fonts.gstatic.com/s/catamaran/v4/o-0NIpQoyXQa2RxT7-5jZhNlYw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Caudex",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "greek-ext",
		    "latin-ext",
		    "latin",
		    "greek"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/caudex/v7/esDQ311QOP6BJUrIyg.ttf",
		    "italic": "http://fonts.gstatic.com/s/caudex/v7/esDS311QOP6BJUr4yPKE.ttf",
		    "700": "http://fonts.gstatic.com/s/caudex/v7/esDT311QOP6BJUrwdteklQ.ttf",
		    "700italic": "http://fonts.gstatic.com/s/caudex/v7/esDV311QOP6BJUr4yMo4kJ8G.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Caveat",
		   "category": "handwriting",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v4",
		   "lastModified": "2017-11-07",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/caveat/v4/Wnz6HAc5bAfYB2QLYQ.ttf",
		    "700": "http://fonts.gstatic.com/s/caveat/v4/Wnz5HAc5bAfYB2Qz3RM9og.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Caveat Brush",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/caveatbrush/v3/EYq0maZfwr9S9-ETZc3fKXtMWw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Cedarville Cursive",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/cedarvillecursive/v9/yYL00g_a2veiudhUmxjo5VKkoqA-B_neJQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Ceviche One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/cevicheone/v8/gyB4hws1IcA6JzR-GB_JX6zd.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Chakra Petch",
		   "category": "sans-serif",
		   "variants": [
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "thai",
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v1",
		   "lastModified": "2018-09-26",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/chakrapetch/v1/cIflMapbsEk7TDLdtEz1BwkeNIhFQA.ttf",
		    "300italic": "http://fonts.gstatic.com/s/chakrapetch/v1/cIfnMapbsEk7TDLdtEz1BwkWmpLJQp_A.ttf",
		    "regular": "http://fonts.gstatic.com/s/chakrapetch/v1/cIf6MapbsEk7TDLdtEz1BwkmmA.ttf",
		    "italic": "http://fonts.gstatic.com/s/chakrapetch/v1/cIfkMapbsEk7TDLdtEz1BwkWmqpl.ttf",
		    "500": "http://fonts.gstatic.com/s/chakrapetch/v1/cIflMapbsEk7TDLdtEz1BwkebIlFQA.ttf",
		    "500italic": "http://fonts.gstatic.com/s/chakrapetch/v1/cIfnMapbsEk7TDLdtEz1BwkWmpKRQ5_A.ttf",
		    "600": "http://fonts.gstatic.com/s/chakrapetch/v1/cIflMapbsEk7TDLdtEz1BwkeQI5FQA.ttf",
		    "600italic": "http://fonts.gstatic.com/s/chakrapetch/v1/cIfnMapbsEk7TDLdtEz1BwkWmpK9RJ_A.ttf",
		    "700": "http://fonts.gstatic.com/s/chakrapetch/v1/cIflMapbsEk7TDLdtEz1BwkeJI9FQA.ttf",
		    "700italic": "http://fonts.gstatic.com/s/chakrapetch/v1/cIfnMapbsEk7TDLdtEz1BwkWmpLZRZ_A.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Changa",
		   "category": "sans-serif",
		   "variants": [
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700",
		    "800"
		   ],
		   "subsets": [
		    "latin-ext",
		    "arabic",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2018-08-01",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/changa/v5/2-cl9JNi2YuVOUcsqb2bUg.ttf",
		    "300": "http://fonts.gstatic.com/s/changa/v5/2-cl9JNi2YuVOUcszb6bUg.ttf",
		    "regular": "http://fonts.gstatic.com/s/changa/v5/2-cm9JNi2YuVOUcUYQ.ttf",
		    "500": "http://fonts.gstatic.com/s/changa/v5/2-cl9JNi2YuVOUcslb-bUg.ttf",
		    "600": "http://fonts.gstatic.com/s/changa/v5/2-cl9JNi2YuVOUcsubibUg.ttf",
		    "700": "http://fonts.gstatic.com/s/changa/v5/2-cl9JNi2YuVOUcs3bmbUg.ttf",
		    "800": "http://fonts.gstatic.com/s/changa/v5/2-cl9JNi2YuVOUcswbqbUg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Changa One",
		   "category": "display",
		   "variants": [
		    "regular",
		    "italic"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v10",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/changaone/v10/xfu00W3wXn3QLUJXhzq46AY.ttf",
		    "italic": "http://fonts.gstatic.com/s/changaone/v10/xfu20W3wXn3QLUJXhzq42ATivA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Chango",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/chango/v6/2V0cKI0OB5U7WaJyzw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Charmonman",
		   "category": "handwriting",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "thai",
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v1",
		   "lastModified": "2018-09-26",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/charmonman/v1/MjQDmiR3vP_nuxDv47jiWJE.ttf",
		    "700": "http://fonts.gstatic.com/s/charmonman/v1/MjQAmiR3vP_nuxDv47jiYC2HmL8.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Chathura",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "300",
		    "regular",
		    "700",
		    "800"
		   ],
		   "subsets": [
		    "latin",
		    "telugu"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-09",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/chathura/v3/_gP91R7-rzUuVjim42dEq0Q.ttf",
		    "300": "http://fonts.gstatic.com/s/chathura/v3/_gP81R7-rzUuVjim42eMiWSx.ttf",
		    "regular": "http://fonts.gstatic.com/s/chathura/v3/_gP71R7-rzUuVjim418g.ttf",
		    "700": "http://fonts.gstatic.com/s/chathura/v3/_gP81R7-rzUuVjim42ecjmSx.ttf",
		    "800": "http://fonts.gstatic.com/s/chathura/v3/_gP81R7-rzUuVjim42eAjWSx.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Chau Philomene One",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/chauphilomeneone/v7/55xxezRsPtfie1vPY49qzdgSlJiHRQFsnA.ttf",
		    "italic": "http://fonts.gstatic.com/s/chauphilomeneone/v7/55xzezRsPtfie1vPY49qzdgSlJiHRQFcnoZ_.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Chela One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/chelaone/v6/6ae-4KC7Uqgdz_JZdPIy3w.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Chelsea Market",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/chelseamarket/v5/BCawqZsHqfr89WNP_IApC8tzKBhl.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Chenla",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "khmer"
		   ],
		   "version": "v10",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/chenla/v10/SZc43FDpIKu8WZ9eXw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Cherry Cream Soda",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/cherrycreamsoda/v8/UMBIrOxBrW6w2FFyi9paG0fdVdRciTd6.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Cherry Swash",
		   "category": "display",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/cherryswash/v6/i7dNIFByZjaNAMxtZcnfAy58QA.ttf",
		    "700": "http://fonts.gstatic.com/s/cherryswash/v6/i7dSIFByZjaNAMxtZcnfAy5E_FeaGw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Chewy",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/chewy/v9/uK_94ruUb-k-wk5x.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Chicle",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/chicle/v6/lJwG-pw9i2dqU-BDyQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Chivo",
		   "category": "sans-serif",
		   "variants": [
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "700",
		    "700italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/chivo/v9/va9F4kzIxd1KFrjDY8Z_.ttf",
		    "300italic": "http://fonts.gstatic.com/s/chivo/v9/va9D4kzIxd1KFrBteUp9sKg.ttf",
		    "regular": "http://fonts.gstatic.com/s/chivo/v9/va9I4kzIxd1KFoBv.ttf",
		    "italic": "http://fonts.gstatic.com/s/chivo/v9/va9G4kzIxd1KFrBtQeY.ttf",
		    "700": "http://fonts.gstatic.com/s/chivo/v9/va9F4kzIxd1KFrjTZMZ_.ttf",
		    "700italic": "http://fonts.gstatic.com/s/chivo/v9/va9D4kzIxd1KFrBteVp6sKg.ttf",
		    "900": "http://fonts.gstatic.com/s/chivo/v9/va9F4kzIxd1KFrjrZsZ_.ttf",
		    "900italic": "http://fonts.gstatic.com/s/chivo/v9/va9D4kzIxd1KFrBteWJ4sKg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Chonburi",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "thai",
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/chonburi/v2/8AtqGs-wOpGRTBq66IWa.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Cinzel",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "700",
		    "900"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/cinzel/v7/8vIJ7ww63mVu7gtL8Q.ttf",
		    "700": "http://fonts.gstatic.com/s/cinzel/v7/8vIK7ww63mVu7gtzTUHeFA.ttf",
		    "900": "http://fonts.gstatic.com/s/cinzel/v7/8vIK7ww63mVu7gtzdUPeFA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Cinzel Decorative",
		   "category": "display",
		   "variants": [
		    "regular",
		    "700",
		    "900"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/cinzeldecorative/v6/daaCSScvJGqLYhG8nNt8KPPswUAPnh7U.ttf",
		    "700": "http://fonts.gstatic.com/s/cinzeldecorative/v6/daaHSScvJGqLYhG8nNt8KPPswUAPniZoaelD.ttf",
		    "900": "http://fonts.gstatic.com/s/cinzeldecorative/v6/daaHSScvJGqLYhG8nNt8KPPswUAPniZQa-lD.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Clicker Script",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/clickerscript/v5/raxkHiKPvt8CMH6ZWP8PdlEq72rY.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Coda",
		   "category": "display",
		   "variants": [
		    "regular",
		    "800"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v13",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/coda/v13/SLXHc1jY5nQ8JUI.ttf",
		    "800": "http://fonts.gstatic.com/s/coda/v13/SLXIc1jY5nQ8HeIgTp4.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Coda Caption",
		   "category": "sans-serif",
		   "variants": [
		    "800"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v11",
		   "lastModified": "2017-10-10",
		   "files": {
		    "800": "http://fonts.gstatic.com/s/codacaption/v11/ieVm2YRII2GMY7SyXSoDRiQGqcx6xw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Codystar",
		   "category": "display",
		   "variants": [
		    "300",
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/codystar/v5/FwZf7-Q1xVk-40qxOuYsyuyr.ttf",
		    "regular": "http://fonts.gstatic.com/s/codystar/v5/FwZY7-Q1xVk-40qxOt6A.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Coiny",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "tamil",
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/coiny/v3/gyByhwU1K989PXwb.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Combo",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/combo/v6/BXRlvF3Jh_fIhg0i.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Comfortaa",
		   "category": "display",
		   "variants": [
		    "300",
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v12",
		   "lastModified": "2017-11-07",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/comfortaa/v12/1Ptpg8LJRfWJmhDAuUsw5qNPBQ.ttf",
		    "regular": "http://fonts.gstatic.com/s/comfortaa/v12/1Ptsg8LJRfWJmhDAuUsISg.ttf",
		    "700": "http://fonts.gstatic.com/s/comfortaa/v12/1Ptpg8LJRfWJmhDAuUsw9qRPBQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Coming Soon",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/comingsoon/v8/qWcuB6mzpYL7AJ2VfdQR1u-S.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Concert One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/concertone/v8/VEM1Ro9xs5PjtzCu-srDqRTl.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Condiment",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/condiment/v5/pONk1hggFNmwvXALyH6Sqw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Content",
		   "category": "display",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "khmer"
		   ],
		   "version": "v10",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/content/v10/zrfl0HLayePhU_AwUaA.ttf",
		    "700": "http://fonts.gstatic.com/s/content/v10/zrfg0HLayePhU_AwaRzdBio.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Contrail One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/contrailone/v7/eLGbP-j_JA-kG0_Zo51noafdZQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Convergence",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/convergence/v6/rax5HiePvdgXPmmMHcIPYRha.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Cookie",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/cookie/v9/syky-y18lb0tSbfNlQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Copse",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/copse/v7/11hPGpDKz1rGb0dj.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Corben",
		   "category": "display",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v11",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/corben/v11/LYjDdGzzklQtCMp9oA.ttf",
		    "700": "http://fonts.gstatic.com/s/corben/v11/LYjAdGzzklQtCMpFHCZgrQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Cormorant",
		   "category": "serif",
		   "variants": [
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v6",
		   "lastModified": "2017-11-21",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/cormorant/v6/H4cgBXOCl9bbnla_nHIiRLmYgg.ttf",
		    "300italic": "http://fonts.gstatic.com/s/cormorant/v6/H4c-BXOCl9bbnla_nHIq6qMUgIa2.ttf",
		    "regular": "http://fonts.gstatic.com/s/cormorant/v6/H4clBXOCl9bbnla_nHIa6A.ttf",
		    "italic": "http://fonts.gstatic.com/s/cormorant/v6/H4cjBXOCl9bbnla_nHIq6pu4.ttf",
		    "500": "http://fonts.gstatic.com/s/cormorant/v6/H4cgBXOCl9bbnla_nHIiHLiYgg.ttf",
		    "500italic": "http://fonts.gstatic.com/s/cormorant/v6/H4c-BXOCl9bbnla_nHIq6qNMgYa2.ttf",
		    "600": "http://fonts.gstatic.com/s/cormorant/v6/H4cgBXOCl9bbnla_nHIiML-Ygg.ttf",
		    "600italic": "http://fonts.gstatic.com/s/cormorant/v6/H4c-BXOCl9bbnla_nHIq6qNghoa2.ttf",
		    "700": "http://fonts.gstatic.com/s/cormorant/v6/H4cgBXOCl9bbnla_nHIiVL6Ygg.ttf",
		    "700italic": "http://fonts.gstatic.com/s/cormorant/v6/H4c-BXOCl9bbnla_nHIq6qMEh4a2.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Cormorant Garamond",
		   "category": "serif",
		   "variants": [
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v5",
		   "lastModified": "2017-11-21",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/cormorantgaramond/v5/co3YmX5slCNuHLi8bLeY9MK7whWMhyjQAllvuQ.ttf",
		    "300italic": "http://fonts.gstatic.com/s/cormorantgaramond/v5/co3WmX5slCNuHLi8bLeY9MK7whWMhyjYrEPjuw-N.ttf",
		    "regular": "http://fonts.gstatic.com/s/cormorantgaramond/v5/co3bmX5slCNuHLi8bLeY9MK7whWMhyjorg.ttf",
		    "italic": "http://fonts.gstatic.com/s/cormorantgaramond/v5/co3ZmX5slCNuHLi8bLeY9MK7whWMhyjYrHtP.ttf",
		    "500": "http://fonts.gstatic.com/s/cormorantgaramond/v5/co3YmX5slCNuHLi8bLeY9MK7whWMhyjQWlhvuQ.ttf",
		    "500italic": "http://fonts.gstatic.com/s/cormorantgaramond/v5/co3WmX5slCNuHLi8bLeY9MK7whWMhyjYrEO7ug-N.ttf",
		    "600": "http://fonts.gstatic.com/s/cormorantgaramond/v5/co3YmX5slCNuHLi8bLeY9MK7whWMhyjQdl9vuQ.ttf",
		    "600italic": "http://fonts.gstatic.com/s/cormorantgaramond/v5/co3WmX5slCNuHLi8bLeY9MK7whWMhyjYrEOXvQ-N.ttf",
		    "700": "http://fonts.gstatic.com/s/cormorantgaramond/v5/co3YmX5slCNuHLi8bLeY9MK7whWMhyjQEl5vuQ.ttf",
		    "700italic": "http://fonts.gstatic.com/s/cormorantgaramond/v5/co3WmX5slCNuHLi8bLeY9MK7whWMhyjYrEPzvA-N.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Cormorant Infant",
		   "category": "serif",
		   "variants": [
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v6",
		   "lastModified": "2018-10-08",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/cormorantinfant/v6/HhyIU44g9vKiM1sORYSiWeAsLN9951w3_DM.ttf",
		    "300italic": "http://fonts.gstatic.com/s/cormorantinfant/v6/HhyKU44g9vKiM1sORYSiWeAsLN997_ItcDEhRg.ttf",
		    "regular": "http://fonts.gstatic.com/s/cormorantinfant/v6/HhyPU44g9vKiM1sORYSiWeAsLN993_A.ttf",
		    "italic": "http://fonts.gstatic.com/s/cormorantinfant/v6/HhyJU44g9vKiM1sORYSiWeAsLN997_IV3A.ttf",
		    "500": "http://fonts.gstatic.com/s/cormorantinfant/v6/HhyIU44g9vKiM1sORYSiWeAsLN995wQ2_DM.ttf",
		    "500italic": "http://fonts.gstatic.com/s/cormorantinfant/v6/HhyKU44g9vKiM1sORYSiWeAsLN997_ItKDAhRg.ttf",
		    "600": "http://fonts.gstatic.com/s/cormorantinfant/v6/HhyIU44g9vKiM1sORYSiWeAsLN995ygx_DM.ttf",
		    "600italic": "http://fonts.gstatic.com/s/cormorantinfant/v6/HhyKU44g9vKiM1sORYSiWeAsLN997_ItBDchRg.ttf",
		    "700": "http://fonts.gstatic.com/s/cormorantinfant/v6/HhyIU44g9vKiM1sORYSiWeAsLN9950ww_DM.ttf",
		    "700italic": "http://fonts.gstatic.com/s/cormorantinfant/v6/HhyKU44g9vKiM1sORYSiWeAsLN997_ItYDYhRg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Cormorant SC",
		   "category": "serif",
		   "variants": [
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v6",
		   "lastModified": "2018-10-08",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/cormorantsc/v6/0ybmGD4kxqXBmOVLG30OGwsmABIU_Q.ttf",
		    "regular": "http://fonts.gstatic.com/s/cormorantsc/v6/0yb5GD4kxqXBmOVLG30OGwserA.ttf",
		    "500": "http://fonts.gstatic.com/s/cormorantsc/v6/0ybmGD4kxqXBmOVLG30OGwsmWBMU_Q.ttf",
		    "600": "http://fonts.gstatic.com/s/cormorantsc/v6/0ybmGD4kxqXBmOVLG30OGwsmdBQU_Q.ttf",
		    "700": "http://fonts.gstatic.com/s/cormorantsc/v6/0ybmGD4kxqXBmOVLG30OGwsmEBUU_Q.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Cormorant Unicase",
		   "category": "serif",
		   "variants": [
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v6",
		   "lastModified": "2018-10-08",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/cormorantunicase/v6/HI_ViZUaILtOqhqgDeXoF_n1_fTGX9N_tucv.ttf",
		    "regular": "http://fonts.gstatic.com/s/cormorantunicase/v6/HI_QiZUaILtOqhqgDeXoF_n1_fTGX-vT.ttf",
		    "500": "http://fonts.gstatic.com/s/cormorantunicase/v6/HI_ViZUaILtOqhqgDeXoF_n1_fTGX9Mnt-cv.ttf",
		    "600": "http://fonts.gstatic.com/s/cormorantunicase/v6/HI_ViZUaILtOqhqgDeXoF_n1_fTGX9MLsOcv.ttf",
		    "700": "http://fonts.gstatic.com/s/cormorantunicase/v6/HI_ViZUaILtOqhqgDeXoF_n1_fTGX9Nvsecv.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Cormorant Upright",
		   "category": "serif",
		   "variants": [
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2017-10-09",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/cormorantupright/v4/VuJudM3I2Y35poFONtLdafkUCHw1y1N5phDs.ttf",
		    "regular": "http://fonts.gstatic.com/s/cormorantupright/v4/VuJrdM3I2Y35poFONtLdafkUCHw1y2vV.ttf",
		    "500": "http://fonts.gstatic.com/s/cormorantupright/v4/VuJudM3I2Y35poFONtLdafkUCHw1y1MhpxDs.ttf",
		    "600": "http://fonts.gstatic.com/s/cormorantupright/v4/VuJudM3I2Y35poFONtLdafkUCHw1y1MNoBDs.ttf",
		    "700": "http://fonts.gstatic.com/s/cormorantupright/v4/VuJudM3I2Y35poFONtLdafkUCHw1y1NpoRDs.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Courgette",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/courgette/v5/wEO_EBrAnc9BLjLQAUkFUQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Cousine",
		   "category": "monospace",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "greek-ext",
		    "vietnamese",
		    "hebrew",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v12",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/cousine/v12/d6lIkaiiRdih4SpPzSM.ttf",
		    "italic": "http://fonts.gstatic.com/s/cousine/v12/d6lKkaiiRdih4SpP_SEvyQ.ttf",
		    "700": "http://fonts.gstatic.com/s/cousine/v12/d6lNkaiiRdih4SpP9Z8K6T4.ttf",
		    "700italic": "http://fonts.gstatic.com/s/cousine/v12/d6lPkaiiRdih4SpP_SEXdTvM1w.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Coustard",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "900"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/coustard/v8/3XFpErgg3YsZ5fqUU9UP.ttf",
		    "900": "http://fonts.gstatic.com/s/coustard/v8/3XFuErgg3YsZ5fqUU-2LkEHm.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Covered By Your Grace",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/coveredbyyourgrace/v7/QGYwz-AZahWOJJI9kykWW9mD6opopoqXSOS0Fg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Crafty Girls",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/craftygirls/v7/va9B4kXI39VaDdlPJo8N_NvuQQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Creepster",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/creepster/v6/AlZy_zVUqJz4yMrniH4hdQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Crete Round",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/creteround/v6/55xoey1sJNPjPiv1ZZZrxJ18.ttf",
		    "italic": "http://fonts.gstatic.com/s/creteround/v6/55xqey1sJNPjPiv1ZZZrxK1-0bg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Crimson Text",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/crimsontext/v8/wlp2gwHKFkZgtmSR3NB0oRJvaA.ttf",
		    "italic": "http://fonts.gstatic.com/s/crimsontext/v8/wlpogwHKFkZgtmSR3NB0oRJfaghW.ttf",
		    "600": "http://fonts.gstatic.com/s/crimsontext/v8/wlppgwHKFkZgtmSR3NB0oRJXsCx2Cw.ttf",
		    "600italic": "http://fonts.gstatic.com/s/crimsontext/v8/wlprgwHKFkZgtmSR3NB0oRJfajCOD9NV.ttf",
		    "700": "http://fonts.gstatic.com/s/crimsontext/v8/wlppgwHKFkZgtmSR3NB0oRJX1C12Cw.ttf",
		    "700italic": "http://fonts.gstatic.com/s/crimsontext/v8/wlprgwHKFkZgtmSR3NB0oRJfajDqDtNV.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Croissant One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/croissantone/v5/3y9n6bU9bTPg4m8NDy3Kq24UM3o.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Crushed",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/crushed/v8/U9Mc6dym6WXImTlFT1k.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Cuprum",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/cuprum/v9/dg4k_pLmvrkcOkB9IQ.ttf",
		    "italic": "http://fonts.gstatic.com/s/cuprum/v9/dg4m_pLmvrkcOkBNI-tH.ttf",
		    "700": "http://fonts.gstatic.com/s/cuprum/v9/dg4n_pLmvrkcOkBFnc5njw.ttf",
		    "700italic": "http://fonts.gstatic.com/s/cuprum/v9/dg4h_pLmvrkcOkBNI9P7ipwt.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Cute Font",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "korean",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2018-11-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/cutefont/v5/Noaw6Uny2oWPbSHMrY6vmJNVNC9hkw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Cutive",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/cutive/v9/NaPZcZ_fHOhV3Ip7Tw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Cutive Mono",
		   "category": "monospace",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/cutivemono/v6/m8JWjfRfY7WVjVi2E-K9H5RF.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Damion",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/damion/v7/hv-XlzJ3KEUe_YZUbQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Dancing Script",
		   "category": "handwriting",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/dancingscript/v9/If2RXTr6YS-zF4S-kcSWSVi_swLn.ttf",
		    "700": "http://fonts.gstatic.com/s/dancingscript/v9/If2SXTr6YS-zF4S-kcSWSVi_szpbr8Qt.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Dangrek",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "khmer"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/dangrek/v9/LYjCdG30nEgoH8E2gCM.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "David Libre",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "500",
		    "700"
		   ],
		   "subsets": [
		    "vietnamese",
		    "hebrew",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/davidlibre/v2/snfus0W_99N64iuYSvp4W_l8.ttf",
		    "500": "http://fonts.gstatic.com/s/davidlibre/v2/snfzs0W_99N64iuYSvp4W8GIw7qb.ttf",
		    "700": "http://fonts.gstatic.com/s/davidlibre/v2/snfzs0W_99N64iuYSvp4W8HAxbqb.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Dawning of a New Day",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/dawningofanewday/v8/t5t_IQMbOp2SEwuncwLRjMfIg1yYit_nAz8b.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Days One",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/daysone/v7/mem9YaCnxnKRiYZOCLYV.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Dekko",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/dekko/v4/46khlb_wWjfSrttF.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Delius",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/delius/v7/PN_xRfK0pW_9e1rtYQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Delius Swash Caps",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/deliusswashcaps/v9/oY1E8fPLr7v4JWCExZpWebxVKORpXXed.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Delius Unicase",
		   "category": "handwriting",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v11",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/deliusunicase/v11/845BNMEwEIOVT8BmgfSzIr_6mmLH.ttf",
		    "700": "http://fonts.gstatic.com/s/deliusunicase/v11/845CNMEwEIOVT8BmgfSzIr_6mlp7WMr_.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Della Respira",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/dellarespira/v5/RLp5K5v44KaueWI6iEJQBiGPRfk.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Denk One",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/denkone/v5/dg4m_pzhrqcFb2IzROtH.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Devonshire",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/devonshire/v6/46kqlbDwWirWr4gtBD2BX0U.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Dhurjati",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin",
		    "telugu"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/dhurjati/v5/_6_8ED3gSeatXfFiFX3y.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Didact Gothic",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "greek-ext",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v11",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/didactgothic/v11/ahcfv8qz1zt6hCC5G4F_P4ASpUw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Diplomata",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/diplomata/v9/Cn-0JtiMXwhNwp-wKxyfYA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Diplomata SC",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/diplomatasc/v6/buExpoi3ecvs3kidKgBJo2kf-A.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Do Hyeon",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "korean",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2018-10-16",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/dohyeon/v7/TwMN-I8CRRU2zM86HFE3.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Dokdo",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "korean",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2018-11-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/dokdo/v5/esDf315XNuCBLxLo4NaMlKcH.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Domine",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/domine/v5/L0x8DFMnlVwD4h3RvA.ttf",
		    "700": "http://fonts.gstatic.com/s/domine/v5/L0x_DFMnlVwD4h3pAN-CTQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Donegal One",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/donegalone/v5/m8JWjfRYea-ZnFz6fsK9FZRF.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Doppio One",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/doppioone/v5/Gg8wN5gSaBfyBw2MqCh-lgs.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Dorsa",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/dorsa/v8/yYLn0hjd0OGwqo49.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Dosis",
		   "category": "sans-serif",
		   "variants": [
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700",
		    "800"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/dosis/v7/HhyXU5sn9vOmLzGnKtCC.ttf",
		    "300": "http://fonts.gstatic.com/s/dosis/v7/HhyXU5sn9vOmLzHDKdCC.ttf",
		    "regular": "http://fonts.gstatic.com/s/dosis/v7/HhyaU5sn9vOmLwlv.ttf",
		    "500": "http://fonts.gstatic.com/s/dosis/v7/HhyXU5sn9vOmLzGbKNCC.ttf",
		    "600": "http://fonts.gstatic.com/s/dosis/v7/HhyXU5sn9vOmLzG3L9CC.ttf",
		    "700": "http://fonts.gstatic.com/s/dosis/v7/HhyXU5sn9vOmLzHTLtCC.ttf",
		    "800": "http://fonts.gstatic.com/s/dosis/v7/HhyXU5sn9vOmLzHPLdCC.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Dr Sugiyama",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/drsugiyama/v7/HTxoL2k4N3O9n5I1boGI7abR.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Duru Sans",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v11",
		   "lastModified": "2018-08-01",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/durusans/v11/xn7iYH8xwmSyTvEV_HOxTw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Dynalight",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/dynalight/v6/1Ptsg8LOU_aOmQvTsF4ISg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "EB Garamond",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic"
		   ],
		   "subsets": [
		    "greek-ext",
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v9",
		   "lastModified": "2017-11-07",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/ebgaramond/v9/SlGUmQSNjdsmc35JDF1K5FRy.ttf",
		    "italic": "http://fonts.gstatic.com/s/ebgaramond/v9/SlGWmQSNjdsmc35JDF1K5GRwSDw.ttf",
		    "500": "http://fonts.gstatic.com/s/ebgaramond/v9/SlGJmQSNjdsmc35JDF1K5GyGaxwV.ttf",
		    "500italic": "http://fonts.gstatic.com/s/ebgaramond/v9/SlGLmQSNjdsmc35JDF1K5GRwcMgWQgs.ttf",
		    "600": "http://fonts.gstatic.com/s/ebgaramond/v9/SlGJmQSNjdsmc35JDF1K5GyqbBwV.ttf",
		    "600italic": "http://fonts.gstatic.com/s/ebgaramond/v9/SlGLmQSNjdsmc35JDF1K5GRwcOQRQgs.ttf",
		    "700": "http://fonts.gstatic.com/s/ebgaramond/v9/SlGJmQSNjdsmc35JDF1K5GzObRwV.ttf",
		    "700italic": "http://fonts.gstatic.com/s/ebgaramond/v9/SlGLmQSNjdsmc35JDF1K5GRwcIAQQgs.ttf",
		    "800": "http://fonts.gstatic.com/s/ebgaramond/v9/SlGJmQSNjdsmc35JDF1K5GzSbhwV.ttf",
		    "800italic": "http://fonts.gstatic.com/s/ebgaramond/v9/SlGLmQSNjdsmc35JDF1K5GRwcJwTQgs.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Eagle Lake",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/eaglelake/v5/ptRMTiqbbuNJDOiKj9wG5O4.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "East Sea Dokdo",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "korean",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2018-08-29",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/eastseadokdo/v4/xfuo0Wn2V2_KanASqXSZp22m05_a.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Eater",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/eater/v6/mtG04_FCK7bOvpu2.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Economica",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/economica/v5/Qw3fZQZaHCLgIWa29ZBrMQ.ttf",
		    "italic": "http://fonts.gstatic.com/s/economica/v5/Qw3ZZQZaHCLgIWa29ZBbM8IE.ttf",
		    "700": "http://fonts.gstatic.com/s/economica/v5/Qw3aZQZaHCLgIWa29ZBTjeckCg.ttf",
		    "700italic": "http://fonts.gstatic.com/s/economica/v5/Qw3EZQZaHCLgIWa29ZBbM_q4D3x9.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Eczar",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "500",
		    "600",
		    "700",
		    "800"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/eczar/v6/BXRlvF3Pi-DLmw0i.ttf",
		    "500": "http://fonts.gstatic.com/s/eczar/v6/BXRovF3Pi-DLmzXWL8t6.ttf",
		    "600": "http://fonts.gstatic.com/s/eczar/v6/BXRovF3Pi-DLmzX6KMt6.ttf",
		    "700": "http://fonts.gstatic.com/s/eczar/v6/BXRovF3Pi-DLmzWeKct6.ttf",
		    "800": "http://fonts.gstatic.com/s/eczar/v6/BXRovF3Pi-DLmzWCKst6.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "El Messiri",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "arabic",
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v4",
		   "lastModified": "2018-08-01",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/elmessiri/v4/K2F0fZBRmr9vQ1pHEey6Aoo.ttf",
		    "500": "http://fonts.gstatic.com/s/elmessiri/v4/K2F3fZBRmr9vQ1pHEey6On6jJyo.ttf",
		    "600": "http://fonts.gstatic.com/s/elmessiri/v4/K2F3fZBRmr9vQ1pHEey6OlKkJyo.ttf",
		    "700": "http://fonts.gstatic.com/s/elmessiri/v4/K2F3fZBRmr9vQ1pHEey6OjalJyo.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Electrolize",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/electrolize/v6/cIf5Ma1dtE0zSiGSiED7AUEG.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Elsie",
		   "category": "display",
		   "variants": [
		    "regular",
		    "900"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/elsie/v7/BCanqZABrez54yYu.ttf",
		    "900": "http://fonts.gstatic.com/s/elsie/v7/BCaqqZABrez54x6q2-1I.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Elsie Swash Caps",
		   "category": "display",
		   "variants": [
		    "regular",
		    "900"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/elsieswashcaps/v6/845DNN8xGZyVX5MVo_upKf7KnjK0feo.ttf",
		    "900": "http://fonts.gstatic.com/s/elsieswashcaps/v6/845ENN8xGZyVX5MVo_upKf7KnjK0RW74DG0.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Emblema One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/emblemaone/v6/nKKT-GQ0F5dSY8vzG0rOEIRB.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Emilys Candy",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/emilyscandy/v5/2EbgL-1mD1Rnb0OGKudbk0y5rw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Encode Sans",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700",
		    "800",
		    "900"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-11-21",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/encodesans/v2/LDI0apOFNxEwR-Bd1O9uYPvIeeI.ttf",
		    "200": "http://fonts.gstatic.com/s/encodesans/v2/LDIrapOFNxEwR-Bd1O9uYPtkWMLO.ttf",
		    "300": "http://fonts.gstatic.com/s/encodesans/v2/LDIrapOFNxEwR-Bd1O9uYPsAW8LO.ttf",
		    "regular": "http://fonts.gstatic.com/s/encodesans/v2/LDI2apOFNxEwR-Bd1O9uYMOs.ttf",
		    "500": "http://fonts.gstatic.com/s/encodesans/v2/LDIrapOFNxEwR-Bd1O9uYPtYWsLO.ttf",
		    "600": "http://fonts.gstatic.com/s/encodesans/v2/LDIrapOFNxEwR-Bd1O9uYPt0XcLO.ttf",
		    "700": "http://fonts.gstatic.com/s/encodesans/v2/LDIrapOFNxEwR-Bd1O9uYPsQXMLO.ttf",
		    "800": "http://fonts.gstatic.com/s/encodesans/v2/LDIrapOFNxEwR-Bd1O9uYPsMX8LO.ttf",
		    "900": "http://fonts.gstatic.com/s/encodesans/v2/LDIrapOFNxEwR-Bd1O9uYPsoXsLO.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Encode Sans Condensed",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700",
		    "800",
		    "900"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-11-21",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/encodesanscondensed/v2/j8_76_LD37rqfuwxyIuaZhE6cRXOLtm2gfT-5a-J.ttf",
		    "200": "http://fonts.gstatic.com/s/encodesanscondensed/v2/j8_46_LD37rqfuwxyIuaZhE6cRXOLtm2gfT-SY6pBw.ttf",
		    "300": "http://fonts.gstatic.com/s/encodesanscondensed/v2/j8_46_LD37rqfuwxyIuaZhE6cRXOLtm2gfT-LY2pBw.ttf",
		    "regular": "http://fonts.gstatic.com/s/encodesanscondensed/v2/j8_16_LD37rqfuwxyIuaZhE6cRXOLtm2gfTGgQ.ttf",
		    "500": "http://fonts.gstatic.com/s/encodesanscondensed/v2/j8_46_LD37rqfuwxyIuaZhE6cRXOLtm2gfT-dYypBw.ttf",
		    "600": "http://fonts.gstatic.com/s/encodesanscondensed/v2/j8_46_LD37rqfuwxyIuaZhE6cRXOLtm2gfT-WYupBw.ttf",
		    "700": "http://fonts.gstatic.com/s/encodesanscondensed/v2/j8_46_LD37rqfuwxyIuaZhE6cRXOLtm2gfT-PYqpBw.ttf",
		    "800": "http://fonts.gstatic.com/s/encodesanscondensed/v2/j8_46_LD37rqfuwxyIuaZhE6cRXOLtm2gfT-IYmpBw.ttf",
		    "900": "http://fonts.gstatic.com/s/encodesanscondensed/v2/j8_46_LD37rqfuwxyIuaZhE6cRXOLtm2gfT-BYipBw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Encode Sans Expanded",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700",
		    "800",
		    "900"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-11-21",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/encodesansexpanded/v2/c4mx1mF4GcnstG_Jh1QH6ac4hNLeNyeYUpJGKQM.ttf",
		    "200": "http://fonts.gstatic.com/s/encodesansexpanded/v2/c4mw1mF4GcnstG_Jh1QH6ac4hNLeNyeYUpLqCCNI.ttf",
		    "300": "http://fonts.gstatic.com/s/encodesansexpanded/v2/c4mw1mF4GcnstG_Jh1QH6ac4hNLeNyeYUpKOCyNI.ttf",
		    "regular": "http://fonts.gstatic.com/s/encodesansexpanded/v2/c4m_1mF4GcnstG_Jh1QH6ac4hNLeNyeYUqoi.ttf",
		    "500": "http://fonts.gstatic.com/s/encodesansexpanded/v2/c4mw1mF4GcnstG_Jh1QH6ac4hNLeNyeYUpLWCiNI.ttf",
		    "600": "http://fonts.gstatic.com/s/encodesansexpanded/v2/c4mw1mF4GcnstG_Jh1QH6ac4hNLeNyeYUpL6DSNI.ttf",
		    "700": "http://fonts.gstatic.com/s/encodesansexpanded/v2/c4mw1mF4GcnstG_Jh1QH6ac4hNLeNyeYUpKeDCNI.ttf",
		    "800": "http://fonts.gstatic.com/s/encodesansexpanded/v2/c4mw1mF4GcnstG_Jh1QH6ac4hNLeNyeYUpKCDyNI.ttf",
		    "900": "http://fonts.gstatic.com/s/encodesansexpanded/v2/c4mw1mF4GcnstG_Jh1QH6ac4hNLeNyeYUpKmDiNI.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Encode Sans Semi Condensed",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700",
		    "800",
		    "900"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-11-21",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/encodesanssemicondensed/v2/3qT6oiKqnDuUtQUEHMoXcmspmy55SFWrXFRp9FTOG1T19ME.ttf",
		    "200": "http://fonts.gstatic.com/s/encodesanssemicondensed/v2/3qT7oiKqnDuUtQUEHMoXcmspmy55SFWrXFRp9FTOG1RZ1eFH.ttf",
		    "300": "http://fonts.gstatic.com/s/encodesanssemicondensed/v2/3qT7oiKqnDuUtQUEHMoXcmspmy55SFWrXFRp9FTOG1Q91uFH.ttf",
		    "regular": "http://fonts.gstatic.com/s/encodesanssemicondensed/v2/3qT4oiKqnDuUtQUEHMoXcmspmy55SFWrXFRp9FTOG2yR.ttf",
		    "500": "http://fonts.gstatic.com/s/encodesanssemicondensed/v2/3qT7oiKqnDuUtQUEHMoXcmspmy55SFWrXFRp9FTOG1Rl1-FH.ttf",
		    "600": "http://fonts.gstatic.com/s/encodesanssemicondensed/v2/3qT7oiKqnDuUtQUEHMoXcmspmy55SFWrXFRp9FTOG1RJ0OFH.ttf",
		    "700": "http://fonts.gstatic.com/s/encodesanssemicondensed/v2/3qT7oiKqnDuUtQUEHMoXcmspmy55SFWrXFRp9FTOG1Qt0eFH.ttf",
		    "800": "http://fonts.gstatic.com/s/encodesanssemicondensed/v2/3qT7oiKqnDuUtQUEHMoXcmspmy55SFWrXFRp9FTOG1Qx0uFH.ttf",
		    "900": "http://fonts.gstatic.com/s/encodesanssemicondensed/v2/3qT7oiKqnDuUtQUEHMoXcmspmy55SFWrXFRp9FTOG1QV0-FH.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Encode Sans Semi Expanded",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700",
		    "800",
		    "900"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2018-10-08",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/encodesanssemiexpanded/v3/ke8xOhAPMEZs-BDuzwftTNJ85JvwMOzE9d9Cca5TM-41Kw.ttf",
		    "200": "http://fonts.gstatic.com/s/encodesanssemiexpanded/v3/ke8yOhAPMEZs-BDuzwftTNJ85JvwMOzE9d9Cca5TM0IUCyA.ttf",
		    "300": "http://fonts.gstatic.com/s/encodesanssemiexpanded/v3/ke8yOhAPMEZs-BDuzwftTNJ85JvwMOzE9d9Cca5TMyYXCyA.ttf",
		    "regular": "http://fonts.gstatic.com/s/encodesanssemiexpanded/v3/ke83OhAPMEZs-BDuzwftTNJ85JvwMOzE9d9Cca5TC4o.ttf",
		    "500": "http://fonts.gstatic.com/s/encodesanssemiexpanded/v3/ke8yOhAPMEZs-BDuzwftTNJ85JvwMOzE9d9Cca5TM34WCyA.ttf",
		    "600": "http://fonts.gstatic.com/s/encodesanssemiexpanded/v3/ke8yOhAPMEZs-BDuzwftTNJ85JvwMOzE9d9Cca5TM1IRCyA.ttf",
		    "700": "http://fonts.gstatic.com/s/encodesanssemiexpanded/v3/ke8yOhAPMEZs-BDuzwftTNJ85JvwMOzE9d9Cca5TMzYQCyA.ttf",
		    "800": "http://fonts.gstatic.com/s/encodesanssemiexpanded/v3/ke8yOhAPMEZs-BDuzwftTNJ85JvwMOzE9d9Cca5TMyoTCyA.ttf",
		    "900": "http://fonts.gstatic.com/s/encodesanssemiexpanded/v3/ke8yOhAPMEZs-BDuzwftTNJ85JvwMOzE9d9Cca5TMw4SCyA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Engagement",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/engagement/v7/x3dlckLDZbqa7RUs9MFVXNo.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Englebert",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/englebert/v5/xn7iYH8w2XGrC8AR4HSxTw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Enriqueta",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/enriqueta/v6/goksH6L7AUFrRvV44HVTSw.ttf",
		    "700": "http://fonts.gstatic.com/s/enriqueta/v6/gokpH6L7AUFrRvV44HVr92-HmA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Erica One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/ericaone/v8/WBLnrEXccV9VGrOKmGD1Ww.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Esteban",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/esteban/v6/r05bGLZE-bdGdN-GdOs.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Euphoria Script",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/euphoriascript/v6/mFTpWb0X2bLb_cx6To2B8GpKoD5akw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Ewert",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/ewert/v5/va9I4kzO2tFODYBv.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Exo",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "100italic",
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2018-09-19",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/exo/v7/4UaMrEtFpBIaEH6m.ttf",
		    "100italic": "http://fonts.gstatic.com/s/exo/v7/4UaCrEtFpBISdkbC0DI.ttf",
		    "200": "http://fonts.gstatic.com/s/exo/v7/4UaDrEtFpBIavF-G8A.ttf",
		    "200italic": "http://fonts.gstatic.com/s/exo/v7/4UaBrEtFpBISdkZu8RLm.ttf",
		    "300": "http://fonts.gstatic.com/s/exo/v7/4UaDrEtFpBIa2FyG8A.ttf",
		    "300italic": "http://fonts.gstatic.com/s/exo/v7/4UaBrEtFpBISdkYK8hLm.ttf",
		    "regular": "http://fonts.gstatic.com/s/exo/v7/4UaOrEtFpBIidA.ttf",
		    "italic": "http://fonts.gstatic.com/s/exo/v7/4UaMrEtFpBISdn6m.ttf",
		    "500": "http://fonts.gstatic.com/s/exo/v7/4UaDrEtFpBIagF2G8A.ttf",
		    "500italic": "http://fonts.gstatic.com/s/exo/v7/4UaBrEtFpBISdkZS8xLm.ttf",
		    "600": "http://fonts.gstatic.com/s/exo/v7/4UaDrEtFpBIarFqG8A.ttf",
		    "600italic": "http://fonts.gstatic.com/s/exo/v7/4UaBrEtFpBISdkZ-9BLm.ttf",
		    "700": "http://fonts.gstatic.com/s/exo/v7/4UaDrEtFpBIayFuG8A.ttf",
		    "700italic": "http://fonts.gstatic.com/s/exo/v7/4UaBrEtFpBISdkYa9RLm.ttf",
		    "800": "http://fonts.gstatic.com/s/exo/v7/4UaDrEtFpBIa1FiG8A.ttf",
		    "800italic": "http://fonts.gstatic.com/s/exo/v7/4UaBrEtFpBISdkYG9hLm.ttf",
		    "900": "http://fonts.gstatic.com/s/exo/v7/4UaDrEtFpBIa8FmG8A.ttf",
		    "900italic": "http://fonts.gstatic.com/s/exo/v7/4UaBrEtFpBISdkYi9xLm.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Exo 2",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "100italic",
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v4",
		   "lastModified": "2017-10-10",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/exo2/v4/7cHov4okm5zmbt5LK-s.ttf",
		    "100italic": "http://fonts.gstatic.com/s/exo2/v4/7cHqv4okm5zmbtYtE48c4A.ttf",
		    "200": "http://fonts.gstatic.com/s/exo2/v4/7cHrv4okm5zmbt7nCss8.ttf",
		    "200italic": "http://fonts.gstatic.com/s/exo2/v4/7cHtv4okm5zmbtYtEyM9wHo.ttf",
		    "300": "http://fonts.gstatic.com/s/exo2/v4/7cHrv4okm5zmbt6DCcs8.ttf",
		    "300italic": "http://fonts.gstatic.com/s/exo2/v4/7cHtv4okm5zmbtYtE0c-wHo.ttf",
		    "regular": "http://fonts.gstatic.com/s/exo2/v4/7cHmv4okm5zmbuYv.ttf",
		    "italic": "http://fonts.gstatic.com/s/exo2/v4/7cHov4okm5zmbtYtK-s.ttf",
		    "500": "http://fonts.gstatic.com/s/exo2/v4/7cHrv4okm5zmbt7bCMs8.ttf",
		    "500italic": "http://fonts.gstatic.com/s/exo2/v4/7cHtv4okm5zmbtYtEx8_wHo.ttf",
		    "600": "http://fonts.gstatic.com/s/exo2/v4/7cHrv4okm5zmbt73D8s8.ttf",
		    "600italic": "http://fonts.gstatic.com/s/exo2/v4/7cHtv4okm5zmbtYtEzM4wHo.ttf",
		    "700": "http://fonts.gstatic.com/s/exo2/v4/7cHrv4okm5zmbt6TDss8.ttf",
		    "700italic": "http://fonts.gstatic.com/s/exo2/v4/7cHtv4okm5zmbtYtE1c5wHo.ttf",
		    "800": "http://fonts.gstatic.com/s/exo2/v4/7cHrv4okm5zmbt6PDcs8.ttf",
		    "800italic": "http://fonts.gstatic.com/s/exo2/v4/7cHtv4okm5zmbtYtE0s6wHo.ttf",
		    "900": "http://fonts.gstatic.com/s/exo2/v4/7cHrv4okm5zmbt6rDMs8.ttf",
		    "900italic": "http://fonts.gstatic.com/s/exo2/v4/7cHtv4okm5zmbtYtE287wHo.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Expletus Sans",
		   "category": "display",
		   "variants": [
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v11",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/expletussans/v11/RLp5K5v5_bqufTYdnhFzDj2dRfk.ttf",
		    "italic": "http://fonts.gstatic.com/s/expletussans/v11/RLpnK5v5_bqufTYdnhFzDj2ddfsYvw.ttf",
		    "500": "http://fonts.gstatic.com/s/expletussans/v11/RLpkK5v5_bqufTYdnhFzDj2dfQ07n6k.ttf",
		    "500italic": "http://fonts.gstatic.com/s/expletussans/v11/RLpiK5v5_bqufTYdnhFzDj2ddfsgS6oPVA.ttf",
		    "600": "http://fonts.gstatic.com/s/expletussans/v11/RLpkK5v5_bqufTYdnhFzDj2dfSE8n6k.ttf",
		    "600italic": "http://fonts.gstatic.com/s/expletussans/v11/RLpiK5v5_bqufTYdnhFzDj2ddfsgZ60PVA.ttf",
		    "700": "http://fonts.gstatic.com/s/expletussans/v11/RLpkK5v5_bqufTYdnhFzDj2dfUU9n6k.ttf",
		    "700italic": "http://fonts.gstatic.com/s/expletussans/v11/RLpiK5v5_bqufTYdnhFzDj2ddfsgA6wPVA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Fahkwang",
		   "category": "sans-serif",
		   "variants": [
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "thai",
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v1",
		   "lastModified": "2018-09-26",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/fahkwang/v1/Noa26Uj3zpmBOgbNpOJHmZlR.ttf",
		    "200italic": "http://fonts.gstatic.com/s/fahkwang/v1/Noa06Uj3zpmBOgbNpOqNgHFQHC4.ttf",
		    "300": "http://fonts.gstatic.com/s/fahkwang/v1/Noa26Uj3zpmBOgbNpOIjmplR.ttf",
		    "300italic": "http://fonts.gstatic.com/s/fahkwang/v1/Noa06Uj3zpmBOgbNpOqNgBVTHC4.ttf",
		    "regular": "http://fonts.gstatic.com/s/fahkwang/v1/Noax6Uj3zpmBOgbNpNqP.ttf",
		    "italic": "http://fonts.gstatic.com/s/fahkwang/v1/Noa36Uj3zpmBOgbNpOqNuLk.ttf",
		    "500": "http://fonts.gstatic.com/s/fahkwang/v1/Noa26Uj3zpmBOgbNpOJ7m5lR.ttf",
		    "500italic": "http://fonts.gstatic.com/s/fahkwang/v1/Noa06Uj3zpmBOgbNpOqNgE1SHC4.ttf",
		    "600": "http://fonts.gstatic.com/s/fahkwang/v1/Noa26Uj3zpmBOgbNpOJXnJlR.ttf",
		    "600italic": "http://fonts.gstatic.com/s/fahkwang/v1/Noa06Uj3zpmBOgbNpOqNgGFVHC4.ttf",
		    "700": "http://fonts.gstatic.com/s/fahkwang/v1/Noa26Uj3zpmBOgbNpOIznZlR.ttf",
		    "700italic": "http://fonts.gstatic.com/s/fahkwang/v1/Noa06Uj3zpmBOgbNpOqNgAVUHC4.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Fanwood Text",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/fanwoodtext/v7/3XFtErwl05Ad_vSCF6Fq7xXGRQ.ttf",
		    "italic": "http://fonts.gstatic.com/s/fanwoodtext/v7/3XFzErwl05Ad_vSCF6Fq7xX2R9zc.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Farsan",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "gujarati"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/farsan/v3/VEMwRoJ0vY_zsyz62g.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Fascinate",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/fascinate/v6/z7NWdRrufC8XJK0IIEli1A.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Fascinate Inline",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/fascinateinline/v7/jVyR7mzzB3zc-jp6QCAu60poNqIy1g0.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Faster One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2018-08-01",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/fasterone/v9/H4ciBXCHmdfClFb-vWhfyLs.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Fasthand",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "khmer"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/fasthand/v8/0yb9GDohyKTYn_ZEESku.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Fauna One",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/faunaone/v5/wlpzgwTPBVpjpCuwkuEx2Q.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Faustina",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-11-21",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/faustina/v2/XLYlIZPxYpJfTbZAFW-4.ttf",
		    "italic": "http://fonts.gstatic.com/s/faustina/v2/XLYjIZPxYpJfTbZAFV-6Hck.ttf",
		    "500": "http://fonts.gstatic.com/s/faustina/v2/XLYiIZPxYpJfTbZAFVdMPulC.ttf",
		    "500italic": "http://fonts.gstatic.com/s/faustina/v2/XLYgIZPxYpJfTbZAFV-6JT1Bhnc.ttf",
		    "600": "http://fonts.gstatic.com/s/faustina/v2/XLYiIZPxYpJfTbZAFVdgOelC.ttf",
		    "600italic": "http://fonts.gstatic.com/s/faustina/v2/XLYgIZPxYpJfTbZAFV-6JRFGhnc.ttf",
		    "700": "http://fonts.gstatic.com/s/faustina/v2/XLYiIZPxYpJfTbZAFVcEOOlC.ttf",
		    "700italic": "http://fonts.gstatic.com/s/faustina/v2/XLYgIZPxYpJfTbZAFV-6JXVHhnc.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Federant",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/federant/v9/2sDdZGNfip_eirT0_U0j.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Federo",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/federo/v9/iJWFBX-cbD_ETsbmjQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Felipa",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/felipa/v5/FwZa7-owz1Eu4F_wSA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Fenix",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/fenix/v5/XoHo2YL_S7-g5ost.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Finger Paint",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/fingerpaint/v7/0QInMXVJ-o-oRn_7dron8YWO8w.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Fira Mono",
		   "category": "monospace",
		   "variants": [
		    "regular",
		    "500",
		    "700"
		   ],
		   "subsets": [
		    "greek-ext",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/firamono/v6/N0bX2SlFPv1weGeLZDtQIQ.ttf",
		    "500": "http://fonts.gstatic.com/s/firamono/v6/N0bS2SlFPv1weGeLZDto1d33mQ.ttf",
		    "700": "http://fonts.gstatic.com/s/firamono/v6/N0bS2SlFPv1weGeLZDtondv3mQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Fira Sans",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "100italic",
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "greek-ext",
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/firasans/v8/va9C4kDNxMZdWfMOD5Vn9IjO.ttf",
		    "100italic": "http://fonts.gstatic.com/s/firasans/v8/va9A4kDNxMZdWfMOD5VvkrCqYTc.ttf",
		    "200": "http://fonts.gstatic.com/s/firasans/v8/va9B4kDNxMZdWfMOD5VnWKnuQQ.ttf",
		    "200italic": "http://fonts.gstatic.com/s/firasans/v8/va9f4kDNxMZdWfMOD5VvkrAGQBf_.ttf",
		    "300": "http://fonts.gstatic.com/s/firasans/v8/va9B4kDNxMZdWfMOD5VnPKruQQ.ttf",
		    "300italic": "http://fonts.gstatic.com/s/firasans/v8/va9f4kDNxMZdWfMOD5VvkrBiQxf_.ttf",
		    "regular": "http://fonts.gstatic.com/s/firasans/v8/va9E4kDNxMZdWfMOD5VfkA.ttf",
		    "italic": "http://fonts.gstatic.com/s/firasans/v8/va9C4kDNxMZdWfMOD5VvkojO.ttf",
		    "500": "http://fonts.gstatic.com/s/firasans/v8/va9B4kDNxMZdWfMOD5VnZKvuQQ.ttf",
		    "500italic": "http://fonts.gstatic.com/s/firasans/v8/va9f4kDNxMZdWfMOD5VvkrA6Qhf_.ttf",
		    "600": "http://fonts.gstatic.com/s/firasans/v8/va9B4kDNxMZdWfMOD5VnSKzuQQ.ttf",
		    "600italic": "http://fonts.gstatic.com/s/firasans/v8/va9f4kDNxMZdWfMOD5VvkrAWRRf_.ttf",
		    "700": "http://fonts.gstatic.com/s/firasans/v8/va9B4kDNxMZdWfMOD5VnLK3uQQ.ttf",
		    "700italic": "http://fonts.gstatic.com/s/firasans/v8/va9f4kDNxMZdWfMOD5VvkrByRBf_.ttf",
		    "800": "http://fonts.gstatic.com/s/firasans/v8/va9B4kDNxMZdWfMOD5VnMK7uQQ.ttf",
		    "800italic": "http://fonts.gstatic.com/s/firasans/v8/va9f4kDNxMZdWfMOD5VvkrBuRxf_.ttf",
		    "900": "http://fonts.gstatic.com/s/firasans/v8/va9B4kDNxMZdWfMOD5VnFK_uQQ.ttf",
		    "900italic": "http://fonts.gstatic.com/s/firasans/v8/va9f4kDNxMZdWfMOD5VvkrBKRhf_.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Fira Sans Condensed",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "100italic",
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "greek-ext",
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-10",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/firasanscondensed/v2/wEOjEADFm8hSaQTFG18FErVhsC9x-tarWZXtqA.ttf",
		    "100italic": "http://fonts.gstatic.com/s/firasanscondensed/v2/wEOtEADFm8hSaQTFG18FErVhsC9x-tarUfPVzONU.ttf",
		    "200": "http://fonts.gstatic.com/s/firasanscondensed/v2/wEOsEADFm8hSaQTFG18FErVhsC9x-tarWTnMiMM.ttf",
		    "200italic": "http://fonts.gstatic.com/s/firasanscondensed/v2/wEOuEADFm8hSaQTFG18FErVhsC9x-tarUfPVYMJ0dw.ttf",
		    "300": "http://fonts.gstatic.com/s/firasanscondensed/v2/wEOsEADFm8hSaQTFG18FErVhsC9x-tarWV3PiMM.ttf",
		    "300italic": "http://fonts.gstatic.com/s/firasanscondensed/v2/wEOuEADFm8hSaQTFG18FErVhsC9x-tarUfPVBMF0dw.ttf",
		    "regular": "http://fonts.gstatic.com/s/firasanscondensed/v2/wEOhEADFm8hSaQTFG18FErVhsC9x-tarYfE.ttf",
		    "italic": "http://fonts.gstatic.com/s/firasanscondensed/v2/wEOjEADFm8hSaQTFG18FErVhsC9x-tarUfPtqA.ttf",
		    "500": "http://fonts.gstatic.com/s/firasanscondensed/v2/wEOsEADFm8hSaQTFG18FErVhsC9x-tarWQXOiMM.ttf",
		    "500italic": "http://fonts.gstatic.com/s/firasanscondensed/v2/wEOuEADFm8hSaQTFG18FErVhsC9x-tarUfPVXMB0dw.ttf",
		    "600": "http://fonts.gstatic.com/s/firasanscondensed/v2/wEOsEADFm8hSaQTFG18FErVhsC9x-tarWSnJiMM.ttf",
		    "600italic": "http://fonts.gstatic.com/s/firasanscondensed/v2/wEOuEADFm8hSaQTFG18FErVhsC9x-tarUfPVcMd0dw.ttf",
		    "700": "http://fonts.gstatic.com/s/firasanscondensed/v2/wEOsEADFm8hSaQTFG18FErVhsC9x-tarWU3IiMM.ttf",
		    "700italic": "http://fonts.gstatic.com/s/firasanscondensed/v2/wEOuEADFm8hSaQTFG18FErVhsC9x-tarUfPVFMZ0dw.ttf",
		    "800": "http://fonts.gstatic.com/s/firasanscondensed/v2/wEOsEADFm8hSaQTFG18FErVhsC9x-tarWVHLiMM.ttf",
		    "800italic": "http://fonts.gstatic.com/s/firasanscondensed/v2/wEOuEADFm8hSaQTFG18FErVhsC9x-tarUfPVCMV0dw.ttf",
		    "900": "http://fonts.gstatic.com/s/firasanscondensed/v2/wEOsEADFm8hSaQTFG18FErVhsC9x-tarWXXKiMM.ttf",
		    "900italic": "http://fonts.gstatic.com/s/firasanscondensed/v2/wEOuEADFm8hSaQTFG18FErVhsC9x-tarUfPVLMR0dw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Fira Sans Extra Condensed",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "100italic",
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "greek-ext",
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-10",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/firasansextracondensed/v2/NaPMcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda3Zyuvw.ttf",
		    "100italic": "http://fonts.gstatic.com/s/firasansextracondensed/v2/NaPOcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda1fqW21-e.ttf",
		    "200": "http://fonts.gstatic.com/s/firasansextracondensed/v2/NaPPcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda3TCPn38.ttf",
		    "200italic": "http://fonts.gstatic.com/s/firasansextracondensed/v2/NaPxcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda1fqWd36-pA.ttf",
		    "300": "http://fonts.gstatic.com/s/firasansextracondensed/v2/NaPPcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda3VSMn38.ttf",
		    "300italic": "http://fonts.gstatic.com/s/firasansextracondensed/v2/NaPxcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda1fqWE32-pA.ttf",
		    "regular": "http://fonts.gstatic.com/s/firasansextracondensed/v2/NaPKcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda5fg.ttf",
		    "italic": "http://fonts.gstatic.com/s/firasansextracondensed/v2/NaPMcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda1fquvw.ttf",
		    "500": "http://fonts.gstatic.com/s/firasansextracondensed/v2/NaPPcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda3QyNn38.ttf",
		    "500italic": "http://fonts.gstatic.com/s/firasansextracondensed/v2/NaPxcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda1fqWS3y-pA.ttf",
		    "600": "http://fonts.gstatic.com/s/firasansextracondensed/v2/NaPPcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda3SCKn38.ttf",
		    "600italic": "http://fonts.gstatic.com/s/firasansextracondensed/v2/NaPxcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda1fqWZ3u-pA.ttf",
		    "700": "http://fonts.gstatic.com/s/firasansextracondensed/v2/NaPPcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda3USLn38.ttf",
		    "700italic": "http://fonts.gstatic.com/s/firasansextracondensed/v2/NaPxcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda1fqWA3q-pA.ttf",
		    "800": "http://fonts.gstatic.com/s/firasansextracondensed/v2/NaPPcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda3ViIn38.ttf",
		    "800italic": "http://fonts.gstatic.com/s/firasansextracondensed/v2/NaPxcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda1fqWH3m-pA.ttf",
		    "900": "http://fonts.gstatic.com/s/firasansextracondensed/v2/NaPPcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda3XyJn38.ttf",
		    "900italic": "http://fonts.gstatic.com/s/firasansextracondensed/v2/NaPxcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda1fqWO3i-pA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Fjalla One",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/fjallaone/v5/Yq6R-LCAWCX3-6Ky7FAFnOY.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Fjord One",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/fjordone/v6/zOL-4pbEnKBY_9S1jNKr6Q.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Flamenco",
		   "category": "display",
		   "variants": [
		    "300",
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/flamenco/v8/neIPzCehqYguo67ssZ0qNIky.ttf",
		    "regular": "http://fonts.gstatic.com/s/flamenco/v8/neIIzCehqYguo67ssaWG.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Flavors",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/flavors/v6/FBV2dDrhxqmveJTpbkw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Fondamento",
		   "category": "handwriting",
		   "variants": [
		    "regular",
		    "italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/fondamento/v8/4UaHrEJGsxNmFTPDnkaJx60.ttf",
		    "italic": "http://fonts.gstatic.com/s/fondamento/v8/4UaFrEJGsxNmFTPDnkaJ96_p4g.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Fontdiner Swanky",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/fontdinerswanky/v8/ijwOs4XgRNsiaI5-hcVb4hQgMvCD4uE.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Forum",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/forum/v8/6aey4Ky-Vb8Ew_IW.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Francois One",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v12",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/francoisone/v12/_Xmr-H4zszafZw3A-KPSZutNxg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Frank Ruhl Libre",
		   "category": "serif",
		   "variants": [
		    "300",
		    "regular",
		    "500",
		    "700",
		    "900"
		   ],
		   "subsets": [
		    "hebrew",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-11-21",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/frankruhllibre/v3/j8_36_fAw7jrcalD7oKYNX0QfAnPUxvHxJA.ttf",
		    "regular": "http://fonts.gstatic.com/s/frankruhllibre/v3/j8_w6_fAw7jrcalD7oKYNX0QfAnPa7c.ttf",
		    "500": "http://fonts.gstatic.com/s/frankruhllibre/v3/j8_36_fAw7jrcalD7oKYNX0QfAnPU0PGxJA.ttf",
		    "700": "http://fonts.gstatic.com/s/frankruhllibre/v3/j8_36_fAw7jrcalD7oKYNX0QfAnPUwvAxJA.ttf",
		    "900": "http://fonts.gstatic.com/s/frankruhllibre/v3/j8_36_fAw7jrcalD7oKYNX0QfAnPUzPCxJA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Freckle Face",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/freckleface/v6/AMOWz4SXrmKHCvXTohxY-YI0Uw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Fredericka the Great",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/frederickathegreat/v6/9Bt33CxNwt7aOctW2xjbCstzwVKsIBVV-9Sk.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Fredoka One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/fredokaone/v5/k3kUo8kEI-tA1RRcTZGmTmHB.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Freehand",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "khmer"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/freehand/v9/cIf-Ma5eqk01VjKTgAmB.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Fresca",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/fresca/v6/6ae94K--SKgCzbM2Gg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Frijole",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/frijole/v6/uU9PCBUR8oakM2BQ7xM.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Fruktur",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v10",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/fruktur/v10/SZc53FHsOru5QYsMfz0.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Fugaz One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/fugazone/v7/rax_HiWKp9EAITukFslMBA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "GFS Didot",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "greek"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/gfsdidot/v7/Jqzh5TybZ9vZMWFssvwiFw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "GFS Neohellenic",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "greek"
		   ],
		   "version": "v10",
		   "lastModified": "2018-08-01",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/gfsneohellenic/v10/8QIRdiDOrfiq0b7R8O1Iw9WLcY5TLQ.ttf",
		    "italic": "http://fonts.gstatic.com/s/gfsneohellenic/v10/8QITdiDOrfiq0b7R8O1Iw9WLcY5jL6JL.ttf",
		    "700": "http://fonts.gstatic.com/s/gfsneohellenic/v10/8QIUdiDOrfiq0b7R8O1Iw9WLcY5rkYdr6w.ttf",
		    "700italic": "http://fonts.gstatic.com/s/gfsneohellenic/v10/8QIWdiDOrfiq0b7R8O1Iw9WLcY5jL5r37oQb.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Gabriela",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/gabriela/v6/qkBWXvsO6sreR8E-b_m-.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Gaegu",
		   "category": "handwriting",
		   "variants": [
		    "300",
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "korean",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2018-08-29",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/gaegu/v4/TuGSUVB6Up9NU57nifw7.ttf",
		    "regular": "http://fonts.gstatic.com/s/gaegu/v4/TuGfUVB6Up9NU6ZL.ttf",
		    "700": "http://fonts.gstatic.com/s/gaegu/v4/TuGSUVB6Up9NU573jvw7.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Gafata",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/gafata/v6/XRXV3I6Cn0VJKon4Mg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Galada",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "bengali",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/galada/v3/H4cmBXyGmcjXlUX-8g.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Galdeano",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/galdeano/v7/uU9MCBoQ4YOqOW1boDPx.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Galindo",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/galindo/v5/HI_KiYMeLqVKqwyuQ5E.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Gamja Flower",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "korean",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2018-08-29",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/gamjaflower/v4/6NUR8FiKJg-Pa0rM6uN40Z4kyQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Gentium Basic",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/gentiumbasic/v9/Wnz9HAw9aB_JD2VGQVR80We3HAo.ttf",
		    "italic": "http://fonts.gstatic.com/s/gentiumbasic/v9/WnzjHAw9aB_JD2VGQVR80We3LAiJjQ.ttf",
		    "700": "http://fonts.gstatic.com/s/gentiumbasic/v9/WnzgHAw9aB_JD2VGQVR80We3JLasrTo.ttf",
		    "700italic": "http://fonts.gstatic.com/s/gentiumbasic/v9/WnzmHAw9aB_JD2VGQVR80We3LAixMT8eaA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Gentium Book Basic",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/gentiumbookbasic/v8/pe0zMJCbPYBVokB1LHA9bbyaQb8ZGjcIVw.ttf",
		    "italic": "http://fonts.gstatic.com/s/gentiumbookbasic/v8/pe0xMJCbPYBVokB1LHA9bbyaQb8ZGjc4VbF_.ttf",
		    "700": "http://fonts.gstatic.com/s/gentiumbookbasic/v8/pe0wMJCbPYBVokB1LHA9bbyaQb8ZGjcw65Rfyw.ttf",
		    "700italic": "http://fonts.gstatic.com/s/gentiumbookbasic/v8/pe0-MJCbPYBVokB1LHA9bbyaQb8ZGjc4VYnDzofc.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Geo",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/geo/v9/CSRz4zRZlufVLw.ttf",
		    "italic": "http://fonts.gstatic.com/s/geo/v9/CSRx4zRZluflLXpi.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Geostar",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/geostar/v8/sykz-yx4n701VLOftSo.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Geostar Fill",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/geostarfill/v8/AMOWz4SWuWiXFfjEohxQ9os0Uw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Germania One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/germaniaone/v5/Fh4yPjrqIyv2ucM2qzBjeS3ezA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Gidugu",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin",
		    "telugu"
		   ],
		   "version": "v4",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/gidugu/v4/L0x8DFMkk1Uf6w3RvA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Gilda Display",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/gildadisplay/v5/t5tmIRoYMoaYG0WEOh7HwMeR7Tk.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Give You Glory",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/giveyouglory/v7/8QIQdiHOgt3vv4LR7ahjw9-XYc1z.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Glass Antiqua",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/glassantiqua/v5/xfu30Wr0Wn3NOQM2piC0uXOjnL8.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Glegoo",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/glegoo/v7/_Xmt-HQyrTKWaw2Jiw.ttf",
		    "700": "http://fonts.gstatic.com/s/glegoo/v7/_Xmu-HQyrTKWaw2xN4a9CA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Gloria Hallelujah",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/gloriahallelujah/v9/LYjYdHv3kUk9BMV96EIswT9DIbW-MLSy.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Goblin One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/goblinone/v7/CSR64z1ZnOqZRjRCBVY_TOc.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Gochi Hand",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/gochihand/v8/hES06XlsOjtJsgCkx1PkTo4.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Gorditas",
		   "category": "display",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/gorditas/v5/ll8_K2aTVD26DsPEtQDo.ttf",
		    "700": "http://fonts.gstatic.com/s/gorditas/v5/ll84K2aTVD26DsPEtThUIooI.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Gothic A1",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700",
		    "800",
		    "900"
		   ],
		   "subsets": [
		    "korean",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2018-08-29",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/gothica1/v4/CSR74z5ZnPydRjlCCwlCCMcq.ttf",
		    "200": "http://fonts.gstatic.com/s/gothica1/v4/CSR44z5ZnPydRjlCCwlCpOYKSA.ttf",
		    "300": "http://fonts.gstatic.com/s/gothica1/v4/CSR44z5ZnPydRjlCCwlCwOUKSA.ttf",
		    "regular": "http://fonts.gstatic.com/s/gothica1/v4/CSR94z5ZnPydRjlCCwl6bA.ttf",
		    "500": "http://fonts.gstatic.com/s/gothica1/v4/CSR44z5ZnPydRjlCCwlCmOQKSA.ttf",
		    "600": "http://fonts.gstatic.com/s/gothica1/v4/CSR44z5ZnPydRjlCCwlCtOMKSA.ttf",
		    "700": "http://fonts.gstatic.com/s/gothica1/v4/CSR44z5ZnPydRjlCCwlC0OIKSA.ttf",
		    "800": "http://fonts.gstatic.com/s/gothica1/v4/CSR44z5ZnPydRjlCCwlCzOEKSA.ttf",
		    "900": "http://fonts.gstatic.com/s/gothica1/v4/CSR44z5ZnPydRjlCCwlC6OAKSA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Goudy Bookletter 1911",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/goudybookletter1911/v7/sykt-z54laciWfKv-kX8krex0jDiD2HbY6I5tQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Graduate",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/graduate/v5/C8cg4cs3o2n15t_2YxgR.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Grand Hotel",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/grandhotel/v5/7Au7p_IgjDKdCRWuR1azpmQN.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Gravitas One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/gravitasone/v7/5h1diZ4hJ3cblKy3LWakKQmaDQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Great Vibes",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/greatvibes/v5/RWmMoKWR9v4ksMfaWd_JN-XC.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Griffy",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/griffy/v6/FwZa7-ox2FQh9kfwSA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Gruppo",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/gruppo/v8/WwkfxPmzE06v_ZWFWQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Gudea",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2018-08-01",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/gudea/v7/neIFzCqgsI0mp-CP.ttf",
		    "italic": "http://fonts.gstatic.com/s/gudea/v7/neILzCqgsI0mp9CN_oU.ttf",
		    "700": "http://fonts.gstatic.com/s/gudea/v7/neIIzCqgsI0mp9gz26WG.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Gugi",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "korean",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2018-08-29",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/gugi/v4/A2BVn5dXywshVA4.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Gurajada",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin",
		    "telugu"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/gurajada/v5/FwZY7-Qx308m-l-0Kd6A.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Habibi",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/habibi/v6/CSR-4zFWkuqcTTNCSg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Halant",
		   "category": "serif",
		   "variants": [
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2018-10-08",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/halant/v5/u-490qaujRI2Pbsvc_pCmw.ttf",
		    "regular": "http://fonts.gstatic.com/s/halant/v5/u-4-0qaujRI2PbsX3w.ttf",
		    "500": "http://fonts.gstatic.com/s/halant/v5/u-490qaujRI2PbsvK_tCmw.ttf",
		    "600": "http://fonts.gstatic.com/s/halant/v5/u-490qaujRI2PbsvB_xCmw.ttf",
		    "700": "http://fonts.gstatic.com/s/halant/v5/u-490qaujRI2PbsvY_1Cmw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Hammersmith One",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/hammersmithone/v8/qWcyB624q4L_C4jGQ9IK0O_dFlnbsg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Hanalei",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2018-11-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/hanalei/v8/E21n_dD8iufIjBRHXzgmVydREus.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Hanalei Fill",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/hanaleifill/v6/fC1mPYtObGbfyQznIaQzPQiMVw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Handlee",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/handlee/v6/-F6xfjBsISg9aMakDmo.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Hanuman",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "khmer"
		   ],
		   "version": "v11",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/hanuman/v11/VuJxdNvD15HhpJJBeKY.ttf",
		    "700": "http://fonts.gstatic.com/s/hanuman/v11/VuJ0dNvD15HhpJJBQBr4HIk.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Happy Monkey",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/happymonkey/v6/K2F2fZZcl-9SXwl5F_C4R_OABw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Harmattan",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "arabic",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2018-08-01",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/harmattan/v4/goksH6L2DkFvVvRp9XpTSw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Headland One",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/headlandone/v5/yYLu0hHR2vKnp89Tk1TCq3Tx0A.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Heebo",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "300",
		    "regular",
		    "500",
		    "700",
		    "800",
		    "900"
		   ],
		   "subsets": [
		    "hebrew",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/heebo/v3/NGS0v5_NC0k9P9mVTbQ.ttf",
		    "300": "http://fonts.gstatic.com/s/heebo/v3/NGS3v5_NC0k9P9ldb5RL.ttf",
		    "regular": "http://fonts.gstatic.com/s/heebo/v3/NGS6v5_NC0k9P-Hx.ttf",
		    "500": "http://fonts.gstatic.com/s/heebo/v3/NGS3v5_NC0k9P9kFbpRL.ttf",
		    "700": "http://fonts.gstatic.com/s/heebo/v3/NGS3v5_NC0k9P9lNaJRL.ttf",
		    "800": "http://fonts.gstatic.com/s/heebo/v3/NGS3v5_NC0k9P9lRa5RL.ttf",
		    "900": "http://fonts.gstatic.com/s/heebo/v3/NGS3v5_NC0k9P9l1apRL.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Henny Penny",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/hennypenny/v5/wXKvE3UZookzsxz_kjGSfMQq.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Herr Von Muellerhoff",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/herrvonmuellerhoff/v7/WBL6rFjRZkREW8WqmCWYLgCkQKXb4CAft3c6.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Hi Melody",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "korean",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2018-08-29",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/himelody/v4/46ktlbP8Vnz0pJcqCTbEfw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Hind",
		   "category": "sans-serif",
		   "variants": [
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/hind/v8/5aU19_a8oxmIfMJaIRs.ttf",
		    "regular": "http://fonts.gstatic.com/s/hind/v8/5aU69_a8oxmIRG4.ttf",
		    "500": "http://fonts.gstatic.com/s/hind/v8/5aU19_a8oxmIfJpbIRs.ttf",
		    "600": "http://fonts.gstatic.com/s/hind/v8/5aU19_a8oxmIfLZcIRs.ttf",
		    "700": "http://fonts.gstatic.com/s/hind/v8/5aU19_a8oxmIfNJdIRs.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Hind Guntur",
		   "category": "sans-serif",
		   "variants": [
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "telugu"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/hindguntur/v3/wXKyE3UZrok56nvamSuJd_yGn1cz.ttf",
		    "regular": "http://fonts.gstatic.com/s/hindguntur/v3/wXKvE3UZrok56nvamSuJd8Qq.ttf",
		    "500": "http://fonts.gstatic.com/s/hindguntur/v3/wXKyE3UZrok56nvamSuJd_zenlcz.ttf",
		    "600": "http://fonts.gstatic.com/s/hindguntur/v3/wXKyE3UZrok56nvamSuJd_zymVcz.ttf",
		    "700": "http://fonts.gstatic.com/s/hindguntur/v3/wXKyE3UZrok56nvamSuJd_yWmFcz.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Hind Madurai",
		   "category": "sans-serif",
		   "variants": [
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "tamil",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/hindmadurai/v3/f0Xu0e2p98ZvDXdZQIOcpqjfXaUneQ.ttf",
		    "regular": "http://fonts.gstatic.com/s/hindmadurai/v3/f0Xx0e2p98ZvDXdZQIOcpqjn8Q.ttf",
		    "500": "http://fonts.gstatic.com/s/hindmadurai/v3/f0Xu0e2p98ZvDXdZQIOcpqjfBaQneQ.ttf",
		    "600": "http://fonts.gstatic.com/s/hindmadurai/v3/f0Xu0e2p98ZvDXdZQIOcpqjfKaMneQ.ttf",
		    "700": "http://fonts.gstatic.com/s/hindmadurai/v3/f0Xu0e2p98ZvDXdZQIOcpqjfTaIneQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Hind Siliguri",
		   "category": "sans-serif",
		   "variants": [
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "bengali",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2017-10-10",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/hindsiliguri/v4/ijwOs5juQtsyLLR5jN4cxBEoRDf44uE.ttf",
		    "regular": "http://fonts.gstatic.com/s/hindsiliguri/v4/ijwTs5juQtsyLLR5jN4cxBEofJs.ttf",
		    "500": "http://fonts.gstatic.com/s/hindsiliguri/v4/ijwOs5juQtsyLLR5jN4cxBEoRG_54uE.ttf",
		    "600": "http://fonts.gstatic.com/s/hindsiliguri/v4/ijwOs5juQtsyLLR5jN4cxBEoREP-4uE.ttf",
		    "700": "http://fonts.gstatic.com/s/hindsiliguri/v4/ijwOs5juQtsyLLR5jN4cxBEoRCf_4uE.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Hind Vadodara",
		   "category": "sans-serif",
		   "variants": [
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "gujarati"
		   ],
		   "version": "v4",
		   "lastModified": "2017-10-10",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/hindvadodara/v4/neIQzCKvrIcn5pbuuuriV9tTSDn3iXM.ttf",
		    "regular": "http://fonts.gstatic.com/s/hindvadodara/v4/neINzCKvrIcn5pbuuuriV9tTcJU.ttf",
		    "500": "http://fonts.gstatic.com/s/hindvadodara/v4/neIQzCKvrIcn5pbuuuriV9tTSGH2iXM.ttf",
		    "600": "http://fonts.gstatic.com/s/hindvadodara/v4/neIQzCKvrIcn5pbuuuriV9tTSE3xiXM.ttf",
		    "700": "http://fonts.gstatic.com/s/hindvadodara/v4/neIQzCKvrIcn5pbuuuriV9tTSCnwiXM.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Holtwood One SC",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/holtwoodonesc/v8/yYLx0hLR0P-3vMFSk1TCq3Txg5B3cQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Homemade Apple",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/homemadeapple/v8/Qw3EZQFXECDrI2q789EKQZJob3x9.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Homenaje",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/homenaje/v7/FwZY7-Q-xVAi_l-6Ld6A.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "IBM Plex Mono",
		   "category": "monospace",
		   "variants": [
		    "100",
		    "100italic",
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v3",
		   "lastModified": "2018-08-29",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/ibmplexmono/v3/-F6pfjptAgt5VM-kVkqdyU8n3kwq0g.ttf",
		    "100italic": "http://fonts.gstatic.com/s/ibmplexmono/v3/-F6rfjptAgt5VM-kVkqdyU8n1ioStndl.ttf",
		    "200": "http://fonts.gstatic.com/s/ibmplexmono/v3/-F6qfjptAgt5VM-kVkqdyU8n3uAL8lc.ttf",
		    "200italic": "http://fonts.gstatic.com/s/ibmplexmono/v3/-F6sfjptAgt5VM-kVkqdyU8n1ioSGlZFhw.ttf",
		    "300": "http://fonts.gstatic.com/s/ibmplexmono/v3/-F6qfjptAgt5VM-kVkqdyU8n3oQI8lc.ttf",
		    "300italic": "http://fonts.gstatic.com/s/ibmplexmono/v3/-F6sfjptAgt5VM-kVkqdyU8n1ioSflVFhw.ttf",
		    "regular": "http://fonts.gstatic.com/s/ibmplexmono/v3/-F63fjptAgt5VM-kVkqdyU8n5ig.ttf",
		    "italic": "http://fonts.gstatic.com/s/ibmplexmono/v3/-F6pfjptAgt5VM-kVkqdyU8n1ioq0g.ttf",
		    "500": "http://fonts.gstatic.com/s/ibmplexmono/v3/-F6qfjptAgt5VM-kVkqdyU8n3twJ8lc.ttf",
		    "500italic": "http://fonts.gstatic.com/s/ibmplexmono/v3/-F6sfjptAgt5VM-kVkqdyU8n1ioSJlRFhw.ttf",
		    "600": "http://fonts.gstatic.com/s/ibmplexmono/v3/-F6qfjptAgt5VM-kVkqdyU8n3vAO8lc.ttf",
		    "600italic": "http://fonts.gstatic.com/s/ibmplexmono/v3/-F6sfjptAgt5VM-kVkqdyU8n1ioSClNFhw.ttf",
		    "700": "http://fonts.gstatic.com/s/ibmplexmono/v3/-F6qfjptAgt5VM-kVkqdyU8n3pQP8lc.ttf",
		    "700italic": "http://fonts.gstatic.com/s/ibmplexmono/v3/-F6sfjptAgt5VM-kVkqdyU8n1ioSblJFhw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "IBM Plex Sans",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "100italic",
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v3",
		   "lastModified": "2018-08-29",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/ibmplexsans/v3/zYX-KVElMYYaJe8bpLHnCwDKjbLeEA.ttf",
		    "100italic": "http://fonts.gstatic.com/s/ibmplexsans/v3/zYX8KVElMYYaJe8bpLHnCwDKhdTmdKZM.ttf",
		    "200": "http://fonts.gstatic.com/s/ibmplexsans/v3/zYX9KVElMYYaJe8bpLHnCwDKjR7_MIY.ttf",
		    "200italic": "http://fonts.gstatic.com/s/ibmplexsans/v3/zYX7KVElMYYaJe8bpLHnCwDKhdTm2IdscQ.ttf",
		    "300": "http://fonts.gstatic.com/s/ibmplexsans/v3/zYX9KVElMYYaJe8bpLHnCwDKjXr8MIY.ttf",
		    "300italic": "http://fonts.gstatic.com/s/ibmplexsans/v3/zYX7KVElMYYaJe8bpLHnCwDKhdTmvIRscQ.ttf",
		    "regular": "http://fonts.gstatic.com/s/ibmplexsans/v3/zYXgKVElMYYaJe8bpLHnCwDKtdY.ttf",
		    "italic": "http://fonts.gstatic.com/s/ibmplexsans/v3/zYX-KVElMYYaJe8bpLHnCwDKhdTeEA.ttf",
		    "500": "http://fonts.gstatic.com/s/ibmplexsans/v3/zYX9KVElMYYaJe8bpLHnCwDKjSL9MIY.ttf",
		    "500italic": "http://fonts.gstatic.com/s/ibmplexsans/v3/zYX7KVElMYYaJe8bpLHnCwDKhdTm5IVscQ.ttf",
		    "600": "http://fonts.gstatic.com/s/ibmplexsans/v3/zYX9KVElMYYaJe8bpLHnCwDKjQ76MIY.ttf",
		    "600italic": "http://fonts.gstatic.com/s/ibmplexsans/v3/zYX7KVElMYYaJe8bpLHnCwDKhdTmyIJscQ.ttf",
		    "700": "http://fonts.gstatic.com/s/ibmplexsans/v3/zYX9KVElMYYaJe8bpLHnCwDKjWr7MIY.ttf",
		    "700italic": "http://fonts.gstatic.com/s/ibmplexsans/v3/zYX7KVElMYYaJe8bpLHnCwDKhdTmrINscQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "IBM Plex Sans Condensed",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "100italic",
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2018-10-08",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/ibmplexsanscondensed/v4/Gg8nN4UfRSqiPg7Jn2ZI12V4DCEwkj1E4LVeHY7KyKs.ttf",
		    "100italic": "http://fonts.gstatic.com/s/ibmplexsanscondensed/v4/Gg8hN4UfRSqiPg7Jn2ZI12V4DCEwkj1E4LVeHYas8M_LhQ.ttf",
		    "200": "http://fonts.gstatic.com/s/ibmplexsanscondensed/v4/Gg8gN4UfRSqiPg7Jn2ZI12V4DCEwkj1E4LVeHY5m6Yvr.ttf",
		    "200italic": "http://fonts.gstatic.com/s/ibmplexsanscondensed/v4/Gg8iN4UfRSqiPg7Jn2ZI12V4DCEwkj1E4LVeHYas8GPqpYM.ttf",
		    "300": "http://fonts.gstatic.com/s/ibmplexsanscondensed/v4/Gg8gN4UfRSqiPg7Jn2ZI12V4DCEwkj1E4LVeHY4C6ovr.ttf",
		    "300italic": "http://fonts.gstatic.com/s/ibmplexsanscondensed/v4/Gg8iN4UfRSqiPg7Jn2ZI12V4DCEwkj1E4LVeHYas8AfppYM.ttf",
		    "regular": "http://fonts.gstatic.com/s/ibmplexsanscondensed/v4/Gg8lN4UfRSqiPg7Jn2ZI12V4DCEwkj1E4LVeHbau.ttf",
		    "italic": "http://fonts.gstatic.com/s/ibmplexsanscondensed/v4/Gg8nN4UfRSqiPg7Jn2ZI12V4DCEwkj1E4LVeHYasyKs.ttf",
		    "500": "http://fonts.gstatic.com/s/ibmplexsanscondensed/v4/Gg8gN4UfRSqiPg7Jn2ZI12V4DCEwkj1E4LVeHY5a64vr.ttf",
		    "500italic": "http://fonts.gstatic.com/s/ibmplexsanscondensed/v4/Gg8iN4UfRSqiPg7Jn2ZI12V4DCEwkj1E4LVeHYas8F_opYM.ttf",
		    "600": "http://fonts.gstatic.com/s/ibmplexsanscondensed/v4/Gg8gN4UfRSqiPg7Jn2ZI12V4DCEwkj1E4LVeHY527Ivr.ttf",
		    "600italic": "http://fonts.gstatic.com/s/ibmplexsanscondensed/v4/Gg8iN4UfRSqiPg7Jn2ZI12V4DCEwkj1E4LVeHYas8HPvpYM.ttf",
		    "700": "http://fonts.gstatic.com/s/ibmplexsanscondensed/v4/Gg8gN4UfRSqiPg7Jn2ZI12V4DCEwkj1E4LVeHY4S7Yvr.ttf",
		    "700italic": "http://fonts.gstatic.com/s/ibmplexsanscondensed/v4/Gg8iN4UfRSqiPg7Jn2ZI12V4DCEwkj1E4LVeHYas8BfupYM.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "IBM Plex Serif",
		   "category": "serif",
		   "variants": [
		    "100",
		    "100italic",
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v4",
		   "lastModified": "2018-08-29",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/ibmplexserif/v4/jizBREVNn1dOx-zrZ2X3pZvkTi182zI.ttf",
		    "100italic": "http://fonts.gstatic.com/s/ibmplexserif/v4/jizHREVNn1dOx-zrZ2X3pZvkTiUa41YTiw.ttf",
		    "200": "http://fonts.gstatic.com/s/ibmplexserif/v4/jizAREVNn1dOx-zrZ2X3pZvkTi3Q-hIz.ttf",
		    "200italic": "http://fonts.gstatic.com/s/ibmplexserif/v4/jizGREVNn1dOx-zrZ2X3pZvkTiUa4_oyq14.ttf",
		    "300": "http://fonts.gstatic.com/s/ibmplexserif/v4/jizAREVNn1dOx-zrZ2X3pZvkTi20-RIz.ttf",
		    "300italic": "http://fonts.gstatic.com/s/ibmplexserif/v4/jizGREVNn1dOx-zrZ2X3pZvkTiUa454xq14.ttf",
		    "regular": "http://fonts.gstatic.com/s/ibmplexserif/v4/jizDREVNn1dOx-zrZ2X3pZvkThUY.ttf",
		    "italic": "http://fonts.gstatic.com/s/ibmplexserif/v4/jizBREVNn1dOx-zrZ2X3pZvkTiUa2zI.ttf",
		    "500": "http://fonts.gstatic.com/s/ibmplexserif/v4/jizAREVNn1dOx-zrZ2X3pZvkTi3s-BIz.ttf",
		    "500italic": "http://fonts.gstatic.com/s/ibmplexserif/v4/jizGREVNn1dOx-zrZ2X3pZvkTiUa48Ywq14.ttf",
		    "600": "http://fonts.gstatic.com/s/ibmplexserif/v4/jizAREVNn1dOx-zrZ2X3pZvkTi3A_xIz.ttf",
		    "600italic": "http://fonts.gstatic.com/s/ibmplexserif/v4/jizGREVNn1dOx-zrZ2X3pZvkTiUa4-o3q14.ttf",
		    "700": "http://fonts.gstatic.com/s/ibmplexserif/v4/jizAREVNn1dOx-zrZ2X3pZvkTi2k_hIz.ttf",
		    "700italic": "http://fonts.gstatic.com/s/ibmplexserif/v4/jizGREVNn1dOx-zrZ2X3pZvkTiUa4442q14.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "IM Fell DW Pica",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/imfelldwpica/v7/2sDGZGRQotv9nbn2qSl0TxXVYNw9ZA.ttf",
		    "italic": "http://fonts.gstatic.com/s/imfelldwpica/v7/2sDEZGRQotv9nbn2qSl0TxXVYNwNZgnQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "IM Fell DW Pica SC",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/imfelldwpicasc/v7/0ybjGCAu5PfqkvtGVU15aBhXz3EUrnTW-A.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "IM Fell Double Pica",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/imfelldoublepica/v7/3XF2EqMq_94s9PeKF7Fg4gOKINyMtZ8rT0Q.ttf",
		    "italic": "http://fonts.gstatic.com/s/imfelldoublepica/v7/3XF0EqMq_94s9PeKF7Fg4gOKINyMtZ8rf0a_VA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "IM Fell Double Pica SC",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/imfelldoublepicasc/v7/neIazDmuiMkFo6zj_sHpQ8teNbWlwBB_hXjJ4Y0.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "IM Fell English",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/imfellenglish/v7/Ktk1ALSLW8zDe0rthJysWrnLsAz3Fw.ttf",
		    "italic": "http://fonts.gstatic.com/s/imfellenglish/v7/Ktk3ALSLW8zDe0rthJysWrnLsAzHFaOd.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "IM Fell English SC",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/imfellenglishsc/v7/a8IENpD3CDX-4zrWfr1VY879qFF05pZLOw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "IM Fell French Canon",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/imfellfrenchcanon/v7/-F6ufiNtDWYfYc-tDiyiw08rrghJszkK6coV.ttf",
		    "italic": "http://fonts.gstatic.com/s/imfellfrenchcanon/v7/-F6gfiNtDWYfYc-tDiyiw08rrghJszkK6foXNNk.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "IM Fell French Canon SC",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/imfellfrenchcanonsc/v7/FBVmdCru5-ifcor2bgq9V89khWcmQghEURY7H3c0.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "IM Fell Great Primer",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/imfellgreatprimer/v7/bx6aNwSJtayYxOkbYFsT6hMsLzX7u85rJorX.ttf",
		    "italic": "http://fonts.gstatic.com/s/imfellgreatprimer/v7/bx6UNwSJtayYxOkbYFsT6hMsLzX7u85rJrrVtj4.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "IM Fell Great Primer SC",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/imfellgreatprimersc/v7/ga6daxBOxyt6sCqz3fjZCTFCTUDMHagsQKdDTLf9.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Iceberg",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/iceberg/v5/8QIJdijAiM7o-qnZuIg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Iceland",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/iceland/v6/rax9HiuFsdMNOnWPWKw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Imprima",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/imprima/v6/VEMxRoN7sY3yuy-7-oU.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Inconsolata",
		   "category": "monospace",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v16",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/inconsolata/v16/QldKNThLqRwH-OJ1UHjlKFle.ttf",
		    "700": "http://fonts.gstatic.com/s/inconsolata/v16/QldXNThLqRwH-OJ1UHjlKGHiw41u.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Inder",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/inder/v6/w8gUH2YoQe8_4vq6.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Indie Flower",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-11",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/indieflower/v9/m8JVjfNVeKWVnh3QMuKkFcZlbg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Inika",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/inika/v6/rnCm-x5X3QP-phTH.ttf",
		    "700": "http://fonts.gstatic.com/s/inika/v6/rnCr-x5X3QP-pix7auM-.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Inknut Antiqua",
		   "category": "serif",
		   "variants": [
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700",
		    "800",
		    "900"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-09",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/inknutantiqua/v3/Y4GRYax7VC4ot_qNB4nYpBdaKU2vwrj5.ttf",
		    "regular": "http://fonts.gstatic.com/s/inknutantiqua/v3/Y4GSYax7VC4ot_qNB4nYpBdaKXUD.ttf",
		    "500": "http://fonts.gstatic.com/s/inknutantiqua/v3/Y4GRYax7VC4ot_qNB4nYpBdaKU33w7j5.ttf",
		    "600": "http://fonts.gstatic.com/s/inknutantiqua/v3/Y4GRYax7VC4ot_qNB4nYpBdaKU3bxLj5.ttf",
		    "700": "http://fonts.gstatic.com/s/inknutantiqua/v3/Y4GRYax7VC4ot_qNB4nYpBdaKU2_xbj5.ttf",
		    "800": "http://fonts.gstatic.com/s/inknutantiqua/v3/Y4GRYax7VC4ot_qNB4nYpBdaKU2jxrj5.ttf",
		    "900": "http://fonts.gstatic.com/s/inknutantiqua/v3/Y4GRYax7VC4ot_qNB4nYpBdaKU2Hx7j5.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Irish Grover",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/irishgrover/v8/buExpoi6YtLz2QW7LA4flVgf-A.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Istok Web",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v12",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/istokweb/v12/3qTvojGmgSyUukBzKslZAQ.ttf",
		    "italic": "http://fonts.gstatic.com/s/istokweb/v12/3qTpojGmgSyUukBzKslpA2t6.ttf",
		    "700": "http://fonts.gstatic.com/s/istokweb/v12/3qTqojGmgSyUukBzKslhvU5a_g.ttf",
		    "700italic": "http://fonts.gstatic.com/s/istokweb/v12/3qT0ojGmgSyUukBzKslpA1PG-2MQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Italiana",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/italiana/v6/QldNNTtLsx4E__B0XTmR.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Italianno",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/italianno/v7/dg4n_p3sv6gCJkwzT6Rnjw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Itim",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "thai",
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/itim/v2/0nknC9ziJOYewAQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Jacques Francois",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/jacquesfrancois/v5/ZXu9e04ZvKeOOHIe1TMahbcIU2cgmcM.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Jacques Francois Shadow",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/jacquesfrancoisshadow/v6/KR1FBtOz8PKTMk-kqdkLVrvR0ECFrB6Pin-2_q8V.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Jaldi",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/jaldi/v4/or3sQ67z0_CI30NU.ttf",
		    "700": "http://fonts.gstatic.com/s/jaldi/v4/or3hQ67z0_CI33voSbT3.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Jim Nightshade",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/jimnightshade/v5/PlIkFlu9Pb08Q8HLM1PxmB0g-OS4.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Jockey One",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/jockeyone/v7/HTxpL2g2KjCFj4x8WI6ArIY.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Jolly Lodger",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/jollylodger/v5/BXRsvFTAh_bGkA1uQ48dlB3VWQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Jomhuria",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "arabic",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2018-08-01",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/jomhuria/v5/Dxxp8j-TMXf-llKur2b1.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Josefin Sans",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "100italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v12",
		   "lastModified": "2017-10-10",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/josefinsans/v12/Qw3EZQNVED7rKGKxtqIqX5Ecbnx9.ttf",
		    "100italic": "http://fonts.gstatic.com/s/josefinsans/v12/Qw3GZQNVED7rKGKxtqIqX5EUCEQZXH0.ttf",
		    "300": "http://fonts.gstatic.com/s/josefinsans/v12/Qw3FZQNVED7rKGKxtqIqX5Ecpl5dfA.ttf",
		    "300italic": "http://fonts.gstatic.com/s/josefinsans/v12/Qw3HZQNVED7rKGKxtqIqX5EUCETRfl0k.ttf",
		    "regular": "http://fonts.gstatic.com/s/josefinsans/v12/Qw3aZQNVED7rKGKxtqIqX5EkCg.ttf",
		    "italic": "http://fonts.gstatic.com/s/josefinsans/v12/Qw3EZQNVED7rKGKxtqIqX5EUCHx9.ttf",
		    "600": "http://fonts.gstatic.com/s/josefinsans/v12/Qw3FZQNVED7rKGKxtqIqX5Ec0lhdfA.ttf",
		    "600italic": "http://fonts.gstatic.com/s/josefinsans/v12/Qw3HZQNVED7rKGKxtqIqX5EUCESleF0k.ttf",
		    "700": "http://fonts.gstatic.com/s/josefinsans/v12/Qw3FZQNVED7rKGKxtqIqX5EctlldfA.ttf",
		    "700italic": "http://fonts.gstatic.com/s/josefinsans/v12/Qw3HZQNVED7rKGKxtqIqX5EUCETBeV0k.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Josefin Slab",
		   "category": "serif",
		   "variants": [
		    "100",
		    "100italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/josefinslab/v8/lW-nwjwOK3Ps5GSJlNNkMalvyQ6q.ttf",
		    "100italic": "http://fonts.gstatic.com/s/josefinslab/v8/lW-lwjwOK3Ps5GSJlNNkMalnrzbODso.ttf",
		    "300": "http://fonts.gstatic.com/s/josefinslab/v8/lW-mwjwOK3Ps5GSJlNNkMalvASyKLg.ttf",
		    "300italic": "http://fonts.gstatic.com/s/josefinslab/v8/lW-kwjwOK3Ps5GSJlNNkMalnrzYGLOrg.ttf",
		    "regular": "http://fonts.gstatic.com/s/josefinslab/v8/lW-5wjwOK3Ps5GSJlNNkMalXrQ.ttf",
		    "italic": "http://fonts.gstatic.com/s/josefinslab/v8/lW-nwjwOK3Ps5GSJlNNkMalnrw6q.ttf",
		    "600": "http://fonts.gstatic.com/s/josefinslab/v8/lW-mwjwOK3Ps5GSJlNNkMalvdSqKLg.ttf",
		    "600italic": "http://fonts.gstatic.com/s/josefinslab/v8/lW-kwjwOK3Ps5GSJlNNkMalnrzZyKurg.ttf",
		    "700": "http://fonts.gstatic.com/s/josefinslab/v8/lW-mwjwOK3Ps5GSJlNNkMalvESuKLg.ttf",
		    "700italic": "http://fonts.gstatic.com/s/josefinslab/v8/lW-kwjwOK3Ps5GSJlNNkMalnrzYWK-rg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Joti One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/jotione/v6/Z9XVDmdJQAmWm9TwaYTe.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Jua",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "korean",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2018-08-29",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/jua/v4/co3KmW9ljjAjcw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Judson",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v10",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/judson/v10/FeVRS0Fbvbc14VxRDw.ttf",
		    "italic": "http://fonts.gstatic.com/s/judson/v10/FeVTS0Fbvbc14VxhDblw.ttf",
		    "700": "http://fonts.gstatic.com/s/judson/v10/FeVSS0Fbvbc14Vxps5xQ3Q.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Julee",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/julee/v7/TuGfUVB3RpZPQ6ZL.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Julius Sans One",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/juliussansone/v6/1Pt2g8TAX_SGgBGUi0tGOYEga5W-xQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Junge",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/junge/v5/gokgH670Gl1lUqAd.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Jura",
		   "category": "sans-serif",
		   "variants": [
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "greek-ext",
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/jura/v9/z7NUdRfiaC4VVW9rdCw.ttf",
		    "regular": "http://fonts.gstatic.com/s/jura/v9/z7NbdRfiaC4VbcM.ttf",
		    "500": "http://fonts.gstatic.com/s/jura/v9/z7NUdRfiaC4VVTdqdCw.ttf",
		    "600": "http://fonts.gstatic.com/s/jura/v9/z7NUdRfiaC4VVRttdCw.ttf",
		    "700": "http://fonts.gstatic.com/s/jura/v9/z7NUdRfiaC4VVX9sdCw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Just Another Hand",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/justanotherhand/v9/845CNN4-AJyIGvIou-6yJKyptyOpOcr_.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Just Me Again Down Here",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/justmeagaindownhere/v9/MwQmbgXtz-Wc6RUEGNMc0QpRrfUh2hSdBBMoAuwH.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "K2D",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "100italic",
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic"
		   ],
		   "subsets": [
		    "thai",
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v1",
		   "lastModified": "2018-09-26",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/k2d/v1/J7aRnpF2V0ErE6Up.ttf",
		    "100italic": "http://fonts.gstatic.com/s/k2d/v1/J7afnpF2V0EjdZ1NtLY.ttf",
		    "200": "http://fonts.gstatic.com/s/k2d/v1/J7aenpF2V0Erv4QJlA.ttf",
		    "200italic": "http://fonts.gstatic.com/s/k2d/v1/J7acnpF2V0EjdZ3hlZY4.ttf",
		    "300": "http://fonts.gstatic.com/s/k2d/v1/J7aenpF2V0Er24cJlA.ttf",
		    "300italic": "http://fonts.gstatic.com/s/k2d/v1/J7acnpF2V0EjdZ2FlpY4.ttf",
		    "regular": "http://fonts.gstatic.com/s/k2d/v1/J7aTnpF2V0ETdw.ttf",
		    "italic": "http://fonts.gstatic.com/s/k2d/v1/J7aRnpF2V0EjdaUp.ttf",
		    "500": "http://fonts.gstatic.com/s/k2d/v1/J7aenpF2V0Erg4YJlA.ttf",
		    "500italic": "http://fonts.gstatic.com/s/k2d/v1/J7acnpF2V0EjdZ3dl5Y4.ttf",
		    "600": "http://fonts.gstatic.com/s/k2d/v1/J7aenpF2V0Err4EJlA.ttf",
		    "600italic": "http://fonts.gstatic.com/s/k2d/v1/J7acnpF2V0EjdZ3xkJY4.ttf",
		    "700": "http://fonts.gstatic.com/s/k2d/v1/J7aenpF2V0Ery4AJlA.ttf",
		    "700italic": "http://fonts.gstatic.com/s/k2d/v1/J7acnpF2V0EjdZ2VkZY4.ttf",
		    "800": "http://fonts.gstatic.com/s/k2d/v1/J7aenpF2V0Er14MJlA.ttf",
		    "800italic": "http://fonts.gstatic.com/s/k2d/v1/J7acnpF2V0EjdZ2JkpY4.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Kadwa",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/kadwa/v2/rnCm-x5V0g7iphTH.ttf",
		    "700": "http://fonts.gstatic.com/s/kadwa/v2/rnCr-x5V0g7ipix7auM-.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Kalam",
		   "category": "handwriting",
		   "variants": [
		    "300",
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/kalam/v8/YA9Qr0Wd4kDdMtD6GgLL.ttf",
		    "regular": "http://fonts.gstatic.com/s/kalam/v8/YA9dr0Wd4kDdMuhW.ttf",
		    "700": "http://fonts.gstatic.com/s/kalam/v8/YA9Qr0Wd4kDdMtDqHQLL.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Kameron",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/kameron/v8/vm82dR7vXErQxuznsL4.ttf",
		    "700": "http://fonts.gstatic.com/s/kameron/v8/vm8zdR7vXErQxuzniAIfC-0.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Kanit",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "100italic",
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "thai",
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/kanit/v3/nKKX-Go6G5tXcr72GwU.ttf",
		    "100italic": "http://fonts.gstatic.com/s/kanit/v3/nKKV-Go6G5tXcraQI2GAdQ.ttf",
		    "200": "http://fonts.gstatic.com/s/kanit/v3/nKKU-Go6G5tXcr5aOiWg.ttf",
		    "200italic": "http://fonts.gstatic.com/s/kanit/v3/nKKS-Go6G5tXcraQI82hVaQ.ttf",
		    "300": "http://fonts.gstatic.com/s/kanit/v3/nKKU-Go6G5tXcr4-OSWg.ttf",
		    "300italic": "http://fonts.gstatic.com/s/kanit/v3/nKKS-Go6G5tXcraQI6miVaQ.ttf",
		    "regular": "http://fonts.gstatic.com/s/kanit/v3/nKKZ-Go6G5tXcoaS.ttf",
		    "italic": "http://fonts.gstatic.com/s/kanit/v3/nKKX-Go6G5tXcraQGwU.ttf",
		    "500": "http://fonts.gstatic.com/s/kanit/v3/nKKU-Go6G5tXcr5mOCWg.ttf",
		    "500italic": "http://fonts.gstatic.com/s/kanit/v3/nKKS-Go6G5tXcraQI_GjVaQ.ttf",
		    "600": "http://fonts.gstatic.com/s/kanit/v3/nKKU-Go6G5tXcr5KPyWg.ttf",
		    "600italic": "http://fonts.gstatic.com/s/kanit/v3/nKKS-Go6G5tXcraQI92kVaQ.ttf",
		    "700": "http://fonts.gstatic.com/s/kanit/v3/nKKU-Go6G5tXcr4uPiWg.ttf",
		    "700italic": "http://fonts.gstatic.com/s/kanit/v3/nKKS-Go6G5tXcraQI7mlVaQ.ttf",
		    "800": "http://fonts.gstatic.com/s/kanit/v3/nKKU-Go6G5tXcr4yPSWg.ttf",
		    "800italic": "http://fonts.gstatic.com/s/kanit/v3/nKKS-Go6G5tXcraQI6WmVaQ.ttf",
		    "900": "http://fonts.gstatic.com/s/kanit/v3/nKKU-Go6G5tXcr4WPCWg.ttf",
		    "900italic": "http://fonts.gstatic.com/s/kanit/v3/nKKS-Go6G5tXcraQI4GnVaQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Kantumruy",
		   "category": "sans-serif",
		   "variants": [
		    "300",
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "khmer"
		   ],
		   "version": "v4",
		   "lastModified": "2017-10-09",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/kantumruy/v4/syk0-yJ0m7wyVb-f4FOPUtDlpg.ttf",
		    "regular": "http://fonts.gstatic.com/s/kantumruy/v4/sykx-yJ0m7wyVb-f4FO3_g.ttf",
		    "700": "http://fonts.gstatic.com/s/kantumruy/v4/syk0-yJ0m7wyVb-f4FOPQtflpg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Karla",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/karla/v6/qkBbXvYC6trAT4RS.ttf",
		    "italic": "http://fonts.gstatic.com/s/karla/v6/qkBVXvYC6trAT7RQLtk.ttf",
		    "700": "http://fonts.gstatic.com/s/karla/v6/qkBWXvYC6trAT7zuC_m-.ttf",
		    "700italic": "http://fonts.gstatic.com/s/karla/v6/qkBQXvYC6trAT7RQFmW7xL4.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Karma",
		   "category": "serif",
		   "variants": [
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2018-10-08",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/karma/v8/va9F4kzAzMZRGLjDY8Z_.ttf",
		    "regular": "http://fonts.gstatic.com/s/karma/v8/va9I4kzAzMZRGIBv.ttf",
		    "500": "http://fonts.gstatic.com/s/karma/v8/va9F4kzAzMZRGLibYsZ_.ttf",
		    "600": "http://fonts.gstatic.com/s/karma/v8/va9F4kzAzMZRGLi3ZcZ_.ttf",
		    "700": "http://fonts.gstatic.com/s/karma/v8/va9F4kzAzMZRGLjTZMZ_.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Katibeh",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "arabic",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2018-08-01",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/katibeh/v5/ZGjXol5MQJog4bxDaC0.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Kaushan Script",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/kaushanscript/v6/vm8vdRfvXFLG3OLnsO15WYS5DF7_.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Kavivanar",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "tamil",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/kavivanar/v3/o-0IIpQgyXYSwhxP7_Jb4g.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Kavoon",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/kavoon/v6/pxiFyp4_scRYhlU4NA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Kdam Thmor",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "khmer"
		   ],
		   "version": "v5",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/kdamthmor/v5/MwQzbhjs3veF6QwJVf0JkGM.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Keania One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/keaniaone/v5/zOL54pXJk65E8pXardnuycQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Kelly Slab",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v8",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/kellyslab/v8/-W_7XJX0Rz3cxUnJC5t6TkM.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Kenia",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/kenia/v9/jizURE5PuHQH9qCO.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Khand",
		   "category": "sans-serif",
		   "variants": [
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/khand/v6/TwMN-IINQlQQ0bL5cFE3.ttf",
		    "regular": "http://fonts.gstatic.com/s/khand/v6/TwMA-IINQlQQ0YpV.ttf",
		    "500": "http://fonts.gstatic.com/s/khand/v6/TwMN-IINQlQQ0bKhcVE3.ttf",
		    "600": "http://fonts.gstatic.com/s/khand/v6/TwMN-IINQlQQ0bKNdlE3.ttf",
		    "700": "http://fonts.gstatic.com/s/khand/v6/TwMN-IINQlQQ0bLpd1E3.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Khmer",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "khmer"
		   ],
		   "version": "v10",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/khmer/v10/MjQImit_vPPwpF-B.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Khula",
		   "category": "sans-serif",
		   "variants": [
		    "300",
		    "regular",
		    "600",
		    "700",
		    "800"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/khula/v3/OpNPnoEOns3V7G-ljCvU.ttf",
		    "regular": "http://fonts.gstatic.com/s/khula/v3/OpNCnoEOns3V7FcJ.ttf",
		    "600": "http://fonts.gstatic.com/s/khula/v3/OpNPnoEOns3V7G_RiivU.ttf",
		    "700": "http://fonts.gstatic.com/s/khula/v3/OpNPnoEOns3V7G-1iyvU.ttf",
		    "800": "http://fonts.gstatic.com/s/khula/v3/OpNPnoEOns3V7G-piCvU.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Kirang Haerang",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "korean",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2018-08-29",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/kiranghaerang/v4/E21-_dn_gvvIjhYON1lpIU4-bcqv.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Kite One",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/kiteone/v5/70lQu7shLnA_E02vyq1b.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Knewave",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/knewave/v6/sykz-yx0lLcxQaSItSo.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "KoHo",
		   "category": "sans-serif",
		   "variants": [
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "thai",
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v1",
		   "lastModified": "2018-09-26",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/koho/v1/K2FxfZ5fmddNPuE1WJ4.ttf",
		    "200italic": "http://fonts.gstatic.com/s/koho/v1/K2FzfZ5fmddNNisssJ_zIg.ttf",
		    "300": "http://fonts.gstatic.com/s/koho/v1/K2FxfZ5fmddNPoU2WJ4.ttf",
		    "300italic": "http://fonts.gstatic.com/s/koho/v1/K2FzfZ5fmddNNiss1JzzIg.ttf",
		    "regular": "http://fonts.gstatic.com/s/koho/v1/K2F-fZ5fmddNBik.ttf",
		    "italic": "http://fonts.gstatic.com/s/koho/v1/K2FwfZ5fmddNNisUeA.ttf",
		    "500": "http://fonts.gstatic.com/s/koho/v1/K2FxfZ5fmddNPt03WJ4.ttf",
		    "500italic": "http://fonts.gstatic.com/s/koho/v1/K2FzfZ5fmddNNissjJ3zIg.ttf",
		    "600": "http://fonts.gstatic.com/s/koho/v1/K2FxfZ5fmddNPvEwWJ4.ttf",
		    "600italic": "http://fonts.gstatic.com/s/koho/v1/K2FzfZ5fmddNNissoJrzIg.ttf",
		    "700": "http://fonts.gstatic.com/s/koho/v1/K2FxfZ5fmddNPpUxWJ4.ttf",
		    "700italic": "http://fonts.gstatic.com/s/koho/v1/K2FzfZ5fmddNNissxJvzIg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Kodchasan",
		   "category": "sans-serif",
		   "variants": [
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "thai",
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v1",
		   "lastModified": "2018-09-26",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/kodchasan/v1/1cX0aUPOAJv9sG4I-DJeR1CggQ.ttf",
		    "200italic": "http://fonts.gstatic.com/s/kodchasan/v1/1cXqaUPOAJv9sG4I-DJWjUlIgOCs.ttf",
		    "300": "http://fonts.gstatic.com/s/kodchasan/v1/1cX0aUPOAJv9sG4I-DJeI1OggQ.ttf",
		    "300italic": "http://fonts.gstatic.com/s/kodchasan/v1/1cXqaUPOAJv9sG4I-DJWjUksg-Cs.ttf",
		    "regular": "http://fonts.gstatic.com/s/kodchasan/v1/1cXxaUPOAJv9sG4I-DJmjw.ttf",
		    "italic": "http://fonts.gstatic.com/s/kodchasan/v1/1cX3aUPOAJv9sG4I-DJWjXGA.ttf",
		    "500": "http://fonts.gstatic.com/s/kodchasan/v1/1cX0aUPOAJv9sG4I-DJee1KggQ.ttf",
		    "500italic": "http://fonts.gstatic.com/s/kodchasan/v1/1cXqaUPOAJv9sG4I-DJWjUl0guCs.ttf",
		    "600": "http://fonts.gstatic.com/s/kodchasan/v1/1cX0aUPOAJv9sG4I-DJeV1WggQ.ttf",
		    "600italic": "http://fonts.gstatic.com/s/kodchasan/v1/1cXqaUPOAJv9sG4I-DJWjUlYheCs.ttf",
		    "700": "http://fonts.gstatic.com/s/kodchasan/v1/1cX0aUPOAJv9sG4I-DJeM1SggQ.ttf",
		    "700italic": "http://fonts.gstatic.com/s/kodchasan/v1/1cXqaUPOAJv9sG4I-DJWjUk8hOCs.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Kosugi",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "japanese",
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v1",
		   "lastModified": "2018-08-13",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/kosugi/v1/pxiFyp4_v8FCjlI4NA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Kosugi Maru",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "japanese",
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v1",
		   "lastModified": "2018-08-13",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/kosugimaru/v1/0nksC9PgP_wGh21A2KeqGiTq.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Kotta One",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/kottaone/v5/S6u_w41LXzPc_jlfNWqPHA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Koulen",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "khmer"
		   ],
		   "version": "v11",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/koulen/v11/AMOQz46as3KIBPeWgg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Kranky",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/kranky/v8/hESw6XVgJzlPsFnMpg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Kreon",
		   "category": "serif",
		   "variants": [
		    "300",
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v12",
		   "lastModified": "2018-10-08",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/kreon/v12/t5tjIRIUKY-TFH1sUU23.ttf",
		    "regular": "http://fonts.gstatic.com/s/kreon/v12/t5tuIRIUKY-TFEXA.ttf",
		    "700": "http://fonts.gstatic.com/s/kreon/v12/t5tjIRIUKY-TFH18Vk23.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Kristi",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/kristi/v9/uK_y4ricdeU6zwdRCg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Krona One",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/kronaone/v6/jAnEgHdjHcjgfIb1ZcUCMQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Krub",
		   "category": "sans-serif",
		   "variants": [
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "thai",
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v1",
		   "lastModified": "2018-09-26",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/krub/v1/sZlEdRyC6CRYZo47KLE.ttf",
		    "200italic": "http://fonts.gstatic.com/s/krub/v1/sZlGdRyC6CRYbkQiwLByQw.ttf",
		    "300": "http://fonts.gstatic.com/s/krub/v1/sZlEdRyC6CRYZuo4KLE.ttf",
		    "300italic": "http://fonts.gstatic.com/s/krub/v1/sZlGdRyC6CRYbkQipLNyQw.ttf",
		    "regular": "http://fonts.gstatic.com/s/krub/v1/sZlLdRyC6CRYXkY.ttf",
		    "italic": "http://fonts.gstatic.com/s/krub/v1/sZlFdRyC6CRYbkQaCA.ttf",
		    "500": "http://fonts.gstatic.com/s/krub/v1/sZlEdRyC6CRYZrI5KLE.ttf",
		    "500italic": "http://fonts.gstatic.com/s/krub/v1/sZlGdRyC6CRYbkQi_LJyQw.ttf",
		    "600": "http://fonts.gstatic.com/s/krub/v1/sZlEdRyC6CRYZp4-KLE.ttf",
		    "600italic": "http://fonts.gstatic.com/s/krub/v1/sZlGdRyC6CRYbkQi0LVyQw.ttf",
		    "700": "http://fonts.gstatic.com/s/krub/v1/sZlEdRyC6CRYZvo_KLE.ttf",
		    "700italic": "http://fonts.gstatic.com/s/krub/v1/sZlGdRyC6CRYbkQitLRyQw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Kumar One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "gujarati"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/kumarone/v2/bMr1mS-P958wYi6YaGeGNA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Kumar One Outline",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "gujarati"
		   ],
		   "version": "v3",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/kumaroneoutline/v3/Noao6VH62pyLP0fsrZ-v18wlUEcX9zDw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Kurale",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v4",
		   "lastModified": "2018-10-29",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/kurale/v4/4iCs6KV9e9dXjho6eAT3v02QFg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "La Belle Aurore",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/labelleaurore/v8/RrQIbot8-mNYKnGNDkWlocovHeIIGw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Laila",
		   "category": "serif",
		   "variants": [
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2017-10-10",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/laila/v4/LYjBdG_8nE8jDLzxogNA.ttf",
		    "regular": "http://fonts.gstatic.com/s/laila/v4/LYjMdG_8nE8jDIRd.ttf",
		    "500": "http://fonts.gstatic.com/s/laila/v4/LYjBdG_8nE8jDLypowNA.ttf",
		    "600": "http://fonts.gstatic.com/s/laila/v4/LYjBdG_8nE8jDLyFpANA.ttf",
		    "700": "http://fonts.gstatic.com/s/laila/v4/LYjBdG_8nE8jDLzhpQNA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Lakki Reddy",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin",
		    "telugu"
		   ],
		   "version": "v4",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/lakkireddy/v4/S6u5w49MUSzD9jlCPmvLZQfo.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Lalezar",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "arabic",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2018-08-01",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/lalezar/v4/zrfl0HLVx-HwTP82UaA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Lancelot",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/lancelot/v7/J7acnppxBGtQEulG4JY4.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Lateef",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "arabic",
		    "latin"
		   ],
		   "version": "v13",
		   "lastModified": "2018-08-01",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/lateef/v13/hESw6XVnNCxEvkbMpg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Lato",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "100italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "700",
		    "700italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v14",
		   "lastModified": "2017-10-11",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/lato/v14/S6u8w4BMUTPHh30wWw.ttf",
		    "100italic": "http://fonts.gstatic.com/s/lato/v14/S6u-w4BMUTPHjxsIPy-v.ttf",
		    "300": "http://fonts.gstatic.com/s/lato/v14/S6u9w4BMUTPHh7USew8.ttf",
		    "300italic": "http://fonts.gstatic.com/s/lato/v14/S6u_w4BMUTPHjxsI9w2PHA.ttf",
		    "regular": "http://fonts.gstatic.com/s/lato/v14/S6uyw4BMUTPHvxk.ttf",
		    "italic": "http://fonts.gstatic.com/s/lato/v14/S6u8w4BMUTPHjxswWw.ttf",
		    "700": "http://fonts.gstatic.com/s/lato/v14/S6u9w4BMUTPHh6UVew8.ttf",
		    "700italic": "http://fonts.gstatic.com/s/lato/v14/S6u_w4BMUTPHjxsI5wqPHA.ttf",
		    "900": "http://fonts.gstatic.com/s/lato/v14/S6u9w4BMUTPHh50Xew8.ttf",
		    "900italic": "http://fonts.gstatic.com/s/lato/v14/S6u_w4BMUTPHjxsI3wiPHA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "League Script",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/leaguescript/v8/CSR54zpSlumSWj9CGVsoBZdeaNM.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Leckerli One",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/leckerlione/v8/V8mCoQH8VCsNttEnxnGQ-1itLQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Ledger",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/ledger/v5/j8_q6-HK1L3if_sxmw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Lekton",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/lekton/v8/SZc43FDmLaWmWpBeXw.ttf",
		    "italic": "http://fonts.gstatic.com/s/lekton/v8/SZc63FDmLaWmWpBuXR3s.ttf",
		    "700": "http://fonts.gstatic.com/s/lekton/v8/SZc73FDmLaWmWpBm4zjMlQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Lemon",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/lemon/v6/HI_EiYEVKqRMq0jB.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Lemonada",
		   "category": "display",
		   "variants": [
		    "300",
		    "regular",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "arabic",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2018-08-01",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/lemonada/v5/0QIkMXFD9oygTWy_R8PindGu.ttf",
		    "regular": "http://fonts.gstatic.com/s/lemonada/v5/0QIjMXFD9oygTWy_R_tO.ttf",
		    "600": "http://fonts.gstatic.com/s/lemonada/v5/0QIkMXFD9oygTWy_R8OWm9Gu.ttf",
		    "700": "http://fonts.gstatic.com/s/lemonada/v5/0QIkMXFD9oygTWy_R8PymtGu.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Libre Barcode 128",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2018-08-01",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/librebarcode128/v7/cIfnMbdUsUoiW3O_hVviCwVjuLtXeJ_A.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Libre Barcode 128 Text",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2018-11-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/librebarcode128text/v8/fdNv9tubt3ZEnz1Gu3I4-zppwZ9CWZ16Z0w5cV3Y6M90w4k.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Libre Barcode 39",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2018-11-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/librebarcode39/v8/-nFnOHM08vwC6h8Li1eQnP_AHzI2K_d709jy92k.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Libre Barcode 39 Extended",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2018-08-01",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/librebarcode39extended/v6/8At7Gt6_O5yNS0-K4Nf5U922qSzhJ3dUdfJpwNUgfNQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Libre Barcode 39 Extended Text",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2018-08-01",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/librebarcode39extendedtext/v6/eLG1P_rwIgOiDA7yrs9LoKaYRVLQ1YldrrOnnL7xPO4jNP68fA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Libre Barcode 39 Text",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2018-08-01",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/librebarcode39text/v7/sJoa3KhViNKANw_E3LwoDXvs5Un0HQ1vT-031Q.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Libre Baskerville",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/librebaskerville/v5/kmKnZrc3Hgbbcjq75U4uslyuy4kn0pNe.ttf",
		    "italic": "http://fonts.gstatic.com/s/librebaskerville/v5/kmKhZrc3Hgbbcjq75U4uslyuy4kn0qNcaxY.ttf",
		    "700": "http://fonts.gstatic.com/s/librebaskerville/v5/kmKiZrc3Hgbbcjq75U4uslyuy4kn0qviTjYw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Libre Franklin",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "100italic",
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-10",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/librefranklin/v2/jizBREVItHgc8qDIbSTKq4XkRi182zI.ttf",
		    "100italic": "http://fonts.gstatic.com/s/librefranklin/v2/jizHREVItHgc8qDIbSTKq4XkRiUa41YTiw.ttf",
		    "200": "http://fonts.gstatic.com/s/librefranklin/v2/jizAREVItHgc8qDIbSTKq4XkRi3Q-hIz.ttf",
		    "200italic": "http://fonts.gstatic.com/s/librefranklin/v2/jizGREVItHgc8qDIbSTKq4XkRiUa4_oyq14.ttf",
		    "300": "http://fonts.gstatic.com/s/librefranklin/v2/jizAREVItHgc8qDIbSTKq4XkRi20-RIz.ttf",
		    "300italic": "http://fonts.gstatic.com/s/librefranklin/v2/jizGREVItHgc8qDIbSTKq4XkRiUa454xq14.ttf",
		    "regular": "http://fonts.gstatic.com/s/librefranklin/v2/jizDREVItHgc8qDIbSTKq4XkRhUY.ttf",
		    "italic": "http://fonts.gstatic.com/s/librefranklin/v2/jizBREVItHgc8qDIbSTKq4XkRiUa2zI.ttf",
		    "500": "http://fonts.gstatic.com/s/librefranklin/v2/jizAREVItHgc8qDIbSTKq4XkRi3s-BIz.ttf",
		    "500italic": "http://fonts.gstatic.com/s/librefranklin/v2/jizGREVItHgc8qDIbSTKq4XkRiUa48Ywq14.ttf",
		    "600": "http://fonts.gstatic.com/s/librefranklin/v2/jizAREVItHgc8qDIbSTKq4XkRi3A_xIz.ttf",
		    "600italic": "http://fonts.gstatic.com/s/librefranklin/v2/jizGREVItHgc8qDIbSTKq4XkRiUa4-o3q14.ttf",
		    "700": "http://fonts.gstatic.com/s/librefranklin/v2/jizAREVItHgc8qDIbSTKq4XkRi2k_hIz.ttf",
		    "700italic": "http://fonts.gstatic.com/s/librefranklin/v2/jizGREVItHgc8qDIbSTKq4XkRiUa4442q14.ttf",
		    "800": "http://fonts.gstatic.com/s/librefranklin/v2/jizAREVItHgc8qDIbSTKq4XkRi24_RIz.ttf",
		    "800italic": "http://fonts.gstatic.com/s/librefranklin/v2/jizGREVItHgc8qDIbSTKq4XkRiUa45I1q14.ttf",
		    "900": "http://fonts.gstatic.com/s/librefranklin/v2/jizAREVItHgc8qDIbSTKq4XkRi2c_BIz.ttf",
		    "900italic": "http://fonts.gstatic.com/s/librefranklin/v2/jizGREVItHgc8qDIbSTKq4XkRiUa47Y0q14.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Life Savers",
		   "category": "display",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/lifesavers/v7/ZXuie1UftKKabUQMgxAal_lr.ttf",
		    "700": "http://fonts.gstatic.com/s/lifesavers/v7/ZXu_e1UftKKabUQMgxAal8HXOS5T.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Lilita One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/lilitaone/v5/i7dPIFZ9Zz-WBtRtedDbUEY.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Lily Script One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/lilyscriptone/v5/LhW9MV7ZMfIPdMxeBjBvFN8SXLS4gg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Limelight",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/limelight/v8/XLYkIZL7aopJVbZJHDuYPQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Linden Hill",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/lindenhill/v7/-F61fjxoKSg9Yc3hZgO8ygFI.ttf",
		    "italic": "http://fonts.gstatic.com/s/lindenhill/v7/-F63fjxoKSg9Yc3hZgO8yjFK5ig.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Lobster",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v20",
		   "lastModified": "2017-11-07",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/lobster/v20/neILzCirqoswsqX9_oU.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Lobster Two",
		   "category": "display",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v10",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/lobstertwo/v10/BngMUXZGTXPUvIoyV6yN59fK.ttf",
		    "italic": "http://fonts.gstatic.com/s/lobstertwo/v10/BngOUXZGTXPUvIoyV6yN5-fI5qA.ttf",
		    "700": "http://fonts.gstatic.com/s/lobstertwo/v10/BngRUXZGTXPUvIoyV6yN5-92w4CB.ttf",
		    "700italic": "http://fonts.gstatic.com/s/lobstertwo/v10/BngTUXZGTXPUvIoyV6yN5-fI3hyEwRg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Londrina Outline",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/londrinaoutline/v8/C8c44dM8vmb14dfsZxhetg3pDH-Sfuo.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Londrina Shadow",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/londrinashadow/v7/oPWX_kB4kOQoWNJmjxLV5JuoCUlXRg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Londrina Sketch",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/londrinasketch/v6/c4m41npxGMTnomOHtRU68eIJn8qfWQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Londrina Solid",
		   "category": "display",
		   "variants": [
		    "100",
		    "300",
		    "regular",
		    "900"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2018-10-08",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/londrinasolid/v7/flUjRq6sw40kQEJxWNgkLuudGfs9KBY.ttf",
		    "300": "http://fonts.gstatic.com/s/londrinasolid/v7/flUiRq6sw40kQEJxWNgkLuudGfv1CjY0.ttf",
		    "regular": "http://fonts.gstatic.com/s/londrinasolid/v7/flUhRq6sw40kQEJxWNgkLuudGcNZ.ttf",
		    "900": "http://fonts.gstatic.com/s/londrinasolid/v7/flUiRq6sw40kQEJxWNgkLuudGfvdDzY0.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Lora",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v12",
		   "lastModified": "2017-11-07",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/lora/v12/0QIvMX1D_JOuAw0.ttf",
		    "italic": "http://fonts.gstatic.com/s/lora/v12/0QIhMX1D_JOuMw_7Jg.ttf",
		    "700": "http://fonts.gstatic.com/s/lora/v12/0QIgMX1D_JOuO7HeBts.ttf",
		    "700italic": "http://fonts.gstatic.com/s/lora/v12/0QIiMX1D_JOuMw_Dmt5unw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Love Ya Like A Sister",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/loveyalikeasister/v8/R70EjzUBlOqPeouhFDfR80-0FhOqJubN-Be78g.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Loved by the King",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/lovedbytheking/v7/Gw6gwdP76VDVJNXerebZxUMeRXUF2PiN.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Lovers Quarrel",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/loversquarrel/v5/Yq6N-LSKXTL-5bCy8ksBzpQ_-zAs.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Luckiest Guy",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/luckiestguy/v8/_gP_1RrxsjcxVyin9l9n_j2RSg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Lusitana",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/lusitana/v5/CSR84z9ShvucWzsMKxha.ttf",
		    "700": "http://fonts.gstatic.com/s/lusitana/v5/CSR74z9ShvucWzsMKyDmaccq.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Lustria",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/lustria/v5/9oRONYodvDEyjuhOrCg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "M PLUS 1p",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "300",
		    "regular",
		    "500",
		    "700",
		    "800",
		    "900"
		   ],
		   "subsets": [
		    "greek-ext",
		    "japanese",
		    "vietnamese",
		    "hebrew",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v14",
		   "lastModified": "2018-10-16",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/mplus1p/v14/e3tleuShHdiFyPFzBRrQnDQA.ttf",
		    "300": "http://fonts.gstatic.com/s/mplus1p/v14/e3tmeuShHdiFyPFzBRrQVBYgew.ttf",
		    "regular": "http://fonts.gstatic.com/s/mplus1p/v14/e3tjeuShHdiFyPFzBRro-A.ttf",
		    "500": "http://fonts.gstatic.com/s/mplus1p/v14/e3tmeuShHdiFyPFzBRrQDBcgew.ttf",
		    "700": "http://fonts.gstatic.com/s/mplus1p/v14/e3tmeuShHdiFyPFzBRrQRBEgew.ttf",
		    "800": "http://fonts.gstatic.com/s/mplus1p/v14/e3tmeuShHdiFyPFzBRrQWBIgew.ttf",
		    "900": "http://fonts.gstatic.com/s/mplus1p/v14/e3tmeuShHdiFyPFzBRrQfBMgew.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "M PLUS Rounded 1c",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "300",
		    "regular",
		    "500",
		    "700",
		    "800",
		    "900"
		   ],
		   "subsets": [
		    "greek-ext",
		    "japanese",
		    "vietnamese",
		    "hebrew",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v5",
		   "lastModified": "2018-10-16",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/mplusrounded1c/v5/VdGCAYIAV6gnpUpoWwNkYvrugw9RuM3ixLs.ttf",
		    "300": "http://fonts.gstatic.com/s/mplusrounded1c/v5/VdGBAYIAV6gnpUpoWwNkYvrugw9RuM0q5psK.ttf",
		    "regular": "http://fonts.gstatic.com/s/mplusrounded1c/v5/VdGEAYIAV6gnpUpoWwNkYvrugw9RuPWG.ttf",
		    "500": "http://fonts.gstatic.com/s/mplusrounded1c/v5/VdGBAYIAV6gnpUpoWwNkYvrugw9RuM1y55sK.ttf",
		    "700": "http://fonts.gstatic.com/s/mplusrounded1c/v5/VdGBAYIAV6gnpUpoWwNkYvrugw9RuM064ZsK.ttf",
		    "800": "http://fonts.gstatic.com/s/mplusrounded1c/v5/VdGBAYIAV6gnpUpoWwNkYvrugw9RuM0m4psK.ttf",
		    "900": "http://fonts.gstatic.com/s/mplusrounded1c/v5/VdGBAYIAV6gnpUpoWwNkYvrugw9RuM0C45sK.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Macondo",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/macondo/v6/RrQQboN9-iB1IXmOS2U.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Macondo Swash Caps",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/macondoswashcaps/v5/6NUL8EaAJgGKZA7lpt941Z9s6ZYgDq6Oeg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Mada",
		   "category": "sans-serif",
		   "variants": [
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700",
		    "900"
		   ],
		   "subsets": [
		    "arabic",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2018-08-01",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/mada/v6/7Au_p_0qnzeSdf3nCCI.ttf",
		    "300": "http://fonts.gstatic.com/s/mada/v6/7Au_p_0qnzeSdZnkCCI.ttf",
		    "regular": "http://fonts.gstatic.com/s/mada/v6/7Auwp_0qnzeSTTU.ttf",
		    "500": "http://fonts.gstatic.com/s/mada/v6/7Au_p_0qnzeSdcHlCCI.ttf",
		    "600": "http://fonts.gstatic.com/s/mada/v6/7Au_p_0qnzeSde3iCCI.ttf",
		    "700": "http://fonts.gstatic.com/s/mada/v6/7Au_p_0qnzeSdYnjCCI.ttf",
		    "900": "http://fonts.gstatic.com/s/mada/v6/7Au_p_0qnzeSdbHhCCI.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Magra",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/magra/v6/uK_94ruaZus72k5x.ttf",
		    "700": "http://fonts.gstatic.com/s/magra/v6/uK_w4ruaZus72nbNDxcX.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Maiden Orange",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/maidenorange/v8/kJE1BuIX7AUmhi2V4m08kb1XjOY.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Maitree",
		   "category": "serif",
		   "variants": [
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "thai",
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-10",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/maitree/v2/MjQDmil5tffhpBrklhGNWJE.ttf",
		    "300": "http://fonts.gstatic.com/s/maitree/v2/MjQDmil5tffhpBrklnWOWJE.ttf",
		    "regular": "http://fonts.gstatic.com/s/maitree/v2/MjQGmil5tffhpBrkrtk.ttf",
		    "500": "http://fonts.gstatic.com/s/maitree/v2/MjQDmil5tffhpBrkli2PWJE.ttf",
		    "600": "http://fonts.gstatic.com/s/maitree/v2/MjQDmil5tffhpBrklgGIWJE.ttf",
		    "700": "http://fonts.gstatic.com/s/maitree/v2/MjQDmil5tffhpBrklmWJWJE.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Mako",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/mako/v9/H4coBX6Mmc_Z0SQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Mali",
		   "category": "handwriting",
		   "variants": [
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "thai",
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v1",
		   "lastModified": "2018-09-26",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/mali/v1/N0bV2SRONuN4QOLlKlQ.ttf",
		    "200italic": "http://fonts.gstatic.com/s/mali/v1/N0bX2SRONuN4SCj8wlVQIQ.ttf",
		    "300": "http://fonts.gstatic.com/s/mali/v1/N0bV2SRONuN4QIbmKlQ.ttf",
		    "300italic": "http://fonts.gstatic.com/s/mali/v1/N0bX2SRONuN4SCj8plZQIQ.ttf",
		    "regular": "http://fonts.gstatic.com/s/mali/v1/N0ba2SRONuN4eCo.ttf",
		    "italic": "http://fonts.gstatic.com/s/mali/v1/N0bU2SRONuN4SCjECg.ttf",
		    "500": "http://fonts.gstatic.com/s/mali/v1/N0bV2SRONuN4QN7nKlQ.ttf",
		    "500italic": "http://fonts.gstatic.com/s/mali/v1/N0bX2SRONuN4SCj8_ldQIQ.ttf",
		    "600": "http://fonts.gstatic.com/s/mali/v1/N0bV2SRONuN4QPLgKlQ.ttf",
		    "600italic": "http://fonts.gstatic.com/s/mali/v1/N0bX2SRONuN4SCj80lBQIQ.ttf",
		    "700": "http://fonts.gstatic.com/s/mali/v1/N0bV2SRONuN4QJbhKlQ.ttf",
		    "700italic": "http://fonts.gstatic.com/s/mali/v1/N0bX2SRONuN4SCj8tlFQIQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Mallanna",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin",
		    "telugu"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/mallanna/v5/hv-Vlzx-KEQb84YaDGwz.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Mandali",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin",
		    "telugu"
		   ],
		   "version": "v6",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/mandali/v6/LhWlMVbYOfASNfNUVFk.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Manuale",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-11-21",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/manuale/v2/f0X20eas_8Z-TFZdBPY.ttf",
		    "italic": "http://fonts.gstatic.com/s/manuale/v2/f0X00eas_8Z-TFZdNPTOxw.ttf",
		    "500": "http://fonts.gstatic.com/s/manuale/v2/f0Xz0eas_8Z-TFZdPALt58E.ttf",
		    "500italic": "http://fonts.gstatic.com/s/manuale/v2/f0Xx0eas_8Z-TFZdNPT2M8Ln8Q.ttf",
		    "600": "http://fonts.gstatic.com/s/manuale/v2/f0Xz0eas_8Z-TFZdPC7q58E.ttf",
		    "600italic": "http://fonts.gstatic.com/s/manuale/v2/f0Xx0eas_8Z-TFZdNPT2H8Xn8Q.ttf",
		    "700": "http://fonts.gstatic.com/s/manuale/v2/f0Xz0eas_8Z-TFZdPErr58E.ttf",
		    "700italic": "http://fonts.gstatic.com/s/manuale/v2/f0Xx0eas_8Z-TFZdNPT2e8Tn8Q.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Marcellus",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/marcellus/v5/wEO_EBrOk8hQLDvIAF8FUQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Marcellus SC",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/marcellussc/v5/ke8iOgUHP1dg-Rmi6RWjbLEPgQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Marck Script",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/marckscript/v8/nwpTtK2oNgBA3Or78gapdwuCzw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Margarine",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/margarine/v6/qkBXXvoE6trLT9Y7YLye5A.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Markazi Text",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "arabic",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2018-11-13",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/markazitext/v3/sykh-ydym6AtQaiEtX7yhqb_rV1k_81ZVYYZtfSQT4M.ttf",
		    "500": "http://fonts.gstatic.com/s/markazitext/v3/sykh-ydym6AtQaiEtX7yhqb_rV1k_81ZVYYZtcaQT4M.ttf",
		    "600": "http://fonts.gstatic.com/s/markazitext/v3/sykh-ydym6AtQaiEtX7yhqb_rV1k_81ZVYYZtSqXT4M.ttf",
		    "700": "http://fonts.gstatic.com/s/markazitext/v3/sykh-ydym6AtQaiEtX7yhqb_rV1k_81ZVYYZtROXT4M.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Marko One",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/markoone/v7/9Btq3DFG0cnVM5lw1haaKg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Marmelad",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/marmelad/v7/Qw3eZQdSHj_jK2e-8tFL.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Martel",
		   "category": "serif",
		   "variants": [
		    "200",
		    "300",
		    "regular",
		    "600",
		    "700",
		    "800",
		    "900"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-10",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/martel/v2/PN_yRfK9oXHga0XVqekahQ.ttf",
		    "300": "http://fonts.gstatic.com/s/martel/v2/PN_yRfK9oXHga0XVzeoahQ.ttf",
		    "regular": "http://fonts.gstatic.com/s/martel/v2/PN_xRfK9oXHga0XtYQ.ttf",
		    "600": "http://fonts.gstatic.com/s/martel/v2/PN_yRfK9oXHga0XVuewahQ.ttf",
		    "700": "http://fonts.gstatic.com/s/martel/v2/PN_yRfK9oXHga0XV3e0ahQ.ttf",
		    "800": "http://fonts.gstatic.com/s/martel/v2/PN_yRfK9oXHga0XVwe4ahQ.ttf",
		    "900": "http://fonts.gstatic.com/s/martel/v2/PN_yRfK9oXHga0XV5e8ahQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Martel Sans",
		   "category": "sans-serif",
		   "variants": [
		    "200",
		    "300",
		    "regular",
		    "600",
		    "700",
		    "800",
		    "900"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2017-10-10",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/martelsans/v4/h0GxssGi7VdzDgKjM-4d8hAX5suH.ttf",
		    "300": "http://fonts.gstatic.com/s/martelsans/v4/h0GxssGi7VdzDgKjM-4d8hBz5cuH.ttf",
		    "regular": "http://fonts.gstatic.com/s/martelsans/v4/h0GsssGi7VdzDgKjM-4d8ijf.ttf",
		    "600": "http://fonts.gstatic.com/s/martelsans/v4/h0GxssGi7VdzDgKjM-4d8hAH48uH.ttf",
		    "700": "http://fonts.gstatic.com/s/martelsans/v4/h0GxssGi7VdzDgKjM-4d8hBj4suH.ttf",
		    "800": "http://fonts.gstatic.com/s/martelsans/v4/h0GxssGi7VdzDgKjM-4d8hB_4cuH.ttf",
		    "900": "http://fonts.gstatic.com/s/martelsans/v4/h0GxssGi7VdzDgKjM-4d8hBb4MuH.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Marvel",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/marvel/v7/nwpVtKeoNgBV0qaIkQ.ttf",
		    "italic": "http://fonts.gstatic.com/s/marvel/v7/nwpXtKeoNgBV0qa4k1TA.ttf",
		    "700": "http://fonts.gstatic.com/s/marvel/v7/nwpWtKeoNgBV0qawLXHgBw.ttf",
		    "700italic": "http://fonts.gstatic.com/s/marvel/v7/nwpQtKeoNgBV0qa4k2x8Al-i.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Mate",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/mate/v6/m8JdjftRd7WZ2z0.ttf",
		    "italic": "http://fonts.gstatic.com/s/mate/v6/m8JTjftRd7WZ6z-2Xg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Mate SC",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/matesc/v6/-nF8OGQ1-uoVr2wKyiU.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Maven Pro",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "500",
		    "700",
		    "900"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v11",
		   "lastModified": "2017-11-21",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/mavenpro/v11/7Au9p_AqnyWWAxW2Wk32yg.ttf",
		    "500": "http://fonts.gstatic.com/s/mavenpro/v11/7Au4p_AqnyWWAxW2Wk3OPkctOA.ttf",
		    "700": "http://fonts.gstatic.com/s/mavenpro/v11/7Au4p_AqnyWWAxW2Wk3OdkEtOA.ttf",
		    "900": "http://fonts.gstatic.com/s/mavenpro/v11/7Au4p_AqnyWWAxW2Wk3OTkMtOA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "McLaren",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/mclaren/v5/2EbnL-ZuAXFqZFXISYY.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Meddon",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v10",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/meddon/v10/kmK8ZqA2EgDNeHTZhA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "MedievalSharp",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v10",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/medievalsharp/v10/EvOJzAlL3oU5AQl2mP5KdgptAq8.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Medula One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/medulaone/v7/YA9Wr0qb5kjJM6l2V0yukiE.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Meera Inimai",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "tamil",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/meerainimai/v2/845fNMM5EIqOW5MPuvO3ILep_w.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Megrim",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/megrim/v8/46kulbz5WjvLqJZlbQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Meie Script",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/meiescript/v5/_LOImzDK7erRjhunIspaMjxn.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Merienda",
		   "category": "handwriting",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/merienda/v6/gNMHW3x8Qoy5_mf8uVMC.ttf",
		    "700": "http://fonts.gstatic.com/s/merienda/v6/gNMAW3x8Qoy5_mf8uWu-Fa-y.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Merienda One",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/meriendaone/v8/H4cgBXaMndbflEq6kyZ1ht6Ygg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Merriweather",
		   "category": "serif",
		   "variants": [
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "700",
		    "700italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v19",
		   "lastModified": "2017-11-07",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/merriweather/v19/u-4n0qyriQwlOrhSvowK_l521wRpXw.ttf",
		    "300italic": "http://fonts.gstatic.com/s/merriweather/v19/u-4l0qyriQwlOrhSvowK_l5-eR7lXcf_.ttf",
		    "regular": "http://fonts.gstatic.com/s/merriweather/v19/u-440qyriQwlOrhSvowK_l5Oew.ttf",
		    "italic": "http://fonts.gstatic.com/s/merriweather/v19/u-4m0qyriQwlOrhSvowK_l5-eSZJ.ttf",
		    "700": "http://fonts.gstatic.com/s/merriweather/v19/u-4n0qyriQwlOrhSvowK_l52xwNpXw.ttf",
		    "700italic": "http://fonts.gstatic.com/s/merriweather/v19/u-4l0qyriQwlOrhSvowK_l5-eR71Wsf_.ttf",
		    "900": "http://fonts.gstatic.com/s/merriweather/v19/u-4n0qyriQwlOrhSvowK_l52_wFpXw.ttf",
		    "900italic": "http://fonts.gstatic.com/s/merriweather/v19/u-4l0qyriQwlOrhSvowK_l5-eR7NWMf_.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Merriweather Sans",
		   "category": "sans-serif",
		   "variants": [
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/merriweathersans/v9/2-c49IRs1JiJN1FRAMjTN5zd9vgsFH1eYBDD.ttf",
		    "300italic": "http://fonts.gstatic.com/s/merriweathersans/v9/2-c29IRs1JiJN1FRAMjTN5zd9vgsFHXwepzB0hM.ttf",
		    "regular": "http://fonts.gstatic.com/s/merriweathersans/v9/2-c99IRs1JiJN1FRAMjTN5zd9vgsFEXy.ttf",
		    "italic": "http://fonts.gstatic.com/s/merriweathersans/v9/2-c79IRs1JiJN1FRAMjTN5zd9vgsFHXwQjA.ttf",
		    "700": "http://fonts.gstatic.com/s/merriweathersans/v9/2-c49IRs1JiJN1FRAMjTN5zd9vgsFH1OZxDD.ttf",
		    "700italic": "http://fonts.gstatic.com/s/merriweathersans/v9/2-c29IRs1JiJN1FRAMjTN5zd9vgsFHXweozG0hM.ttf",
		    "800": "http://fonts.gstatic.com/s/merriweathersans/v9/2-c49IRs1JiJN1FRAMjTN5zd9vgsFH1SZBDD.ttf",
		    "800italic": "http://fonts.gstatic.com/s/merriweathersans/v9/2-c29IRs1JiJN1FRAMjTN5zd9vgsFHXwepDF0hM.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Metal",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "khmer"
		   ],
		   "version": "v10",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/metal/v10/lW-wwjUJIXTo7i3n.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Metal Mania",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/metalmania/v7/RWmMoKWb4e8kqMfBUdPFJeXC.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Metamorphous",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/metamorphous/v8/Wnz8HA03aAXcC39ZEX5y1330PA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Metrophobic",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v10",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/metrophobic/v10/sJoA3LZUhMSAPV_u0qwiAT-J.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Michroma",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/michroma/v8/PN_zRfy9qWD8fEagAMg6.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Milonga",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/milonga/v5/SZc53FHnIaK9W5kffz0.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Miltonian",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v11",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/miltonian/v11/zOL-4pbPn6Ne9JqTg9mr6Q.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Miltonian Tattoo",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v13",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/miltoniantattoo/v13/EvOUzBRL0o0kCxF-lcMCQxlpVsA_FwM.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Mina",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "bengali",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v1",
		   "lastModified": "2018-08-29",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/mina/v1/-nFzOGc18vARrz8.ttf",
		    "700": "http://fonts.gstatic.com/s/mina/v1/-nF8OGc18vARl4NMyiU.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Miniver",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/miniver/v6/eLGcP-PxIg-5H0vC770.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Miriam Libre",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "hebrew",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/miriamlibre/v4/DdTh798HsHwubBAqfkcBTL_vYA.ttf",
		    "700": "http://fonts.gstatic.com/s/miriamlibre/v4/DdT-798HsHwubBAqfkcBTL_X3LbbRQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Mirza",
		   "category": "display",
		   "variants": [
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "arabic",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2018-08-01",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/mirza/v5/co3ImWlikiN5Eurd.ttf",
		    "500": "http://fonts.gstatic.com/s/mirza/v5/co3FmWlikiN5EtIpAeO4.ttf",
		    "600": "http://fonts.gstatic.com/s/mirza/v5/co3FmWlikiN5EtIFBuO4.ttf",
		    "700": "http://fonts.gstatic.com/s/mirza/v5/co3FmWlikiN5EtJhB-O4.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Miss Fajardose",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/missfajardose/v7/E21-_dn5gvrawDdPFVl-N0Ajb8qv.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Mitr",
		   "category": "sans-serif",
		   "variants": [
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "thai",
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/mitr/v3/pxiEypw5ucZF8fMZFJA.ttf",
		    "300": "http://fonts.gstatic.com/s/mitr/v3/pxiEypw5ucZF8ZcaFJA.ttf",
		    "regular": "http://fonts.gstatic.com/s/mitr/v3/pxiLypw5ucZFyTs.ttf",
		    "500": "http://fonts.gstatic.com/s/mitr/v3/pxiEypw5ucZF8c8bFJA.ttf",
		    "600": "http://fonts.gstatic.com/s/mitr/v3/pxiEypw5ucZF8eMcFJA.ttf",
		    "700": "http://fonts.gstatic.com/s/mitr/v3/pxiEypw5ucZF8YcdFJA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Modak",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/modak/v3/EJRYQgs1XtIEsnMH.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Modern Antiqua",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/modernantiqua/v7/NGStv5TIAUg6Iq_RLNo_2dp1sI1E.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Mogra",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "gujarati"
		   ],
		   "version": "v4",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/mogra/v4/f0X40eSs8c95TBo4.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Molengo",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/molengo/v8/I_uuMpWeuBzZNBtQbbQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Molle",
		   "category": "handwriting",
		   "variants": [
		    "italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-11-21",
		   "files": {
		    "italic": "http://fonts.gstatic.com/s/molle/v6/E21n_dL5hOXFhWEsXzg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Monda",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/monda/v7/TK3tWkYFABsmjvpm.ttf",
		    "700": "http://fonts.gstatic.com/s/monda/v7/TK3gWkYFABsmjsLaGz8D.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Monofett",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/monofett/v7/mFTyWbofw6zc9NtnW43S.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Monoton",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/monoton/v7/5h1aiZUrOngCibe4fkY.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Monsieur La Doulaise",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/monsieurladoulaise/v6/_Xmz-GY4rjmCbQfc-aPRaa4pqV340p7EZl5e.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Montaga",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/montaga/v5/H4cnBX2Ml8rCkEO_0gY.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Montez",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/montez/v8/845ZNMk5GoGIX8lm1A.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Montserrat",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "100italic",
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v12",
		   "lastModified": "2017-11-07",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/montserrat/v12/JTUQjIg1_i6t8kCHKm45_Qphzg.ttf",
		    "100italic": "http://fonts.gstatic.com/s/montserrat/v12/JTUOjIg1_i6t8kCHKm459WxZqi7j.ttf",
		    "200": "http://fonts.gstatic.com/s/montserrat/v12/JTURjIg1_i6t8kCHKm45_aZA7g4.ttf",
		    "200italic": "http://fonts.gstatic.com/s/montserrat/v12/JTUPjIg1_i6t8kCHKm459WxZBg_D-w.ttf",
		    "300": "http://fonts.gstatic.com/s/montserrat/v12/JTURjIg1_i6t8kCHKm45_cJD7g4.ttf",
		    "300italic": "http://fonts.gstatic.com/s/montserrat/v12/JTUPjIg1_i6t8kCHKm459WxZYgzD-w.ttf",
		    "regular": "http://fonts.gstatic.com/s/montserrat/v12/JTUSjIg1_i6t8kCHKm45xW4.ttf",
		    "italic": "http://fonts.gstatic.com/s/montserrat/v12/JTUQjIg1_i6t8kCHKm459Wxhzg.ttf",
		    "500": "http://fonts.gstatic.com/s/montserrat/v12/JTURjIg1_i6t8kCHKm45_ZpC7g4.ttf",
		    "500italic": "http://fonts.gstatic.com/s/montserrat/v12/JTUPjIg1_i6t8kCHKm459WxZOg3D-w.ttf",
		    "600": "http://fonts.gstatic.com/s/montserrat/v12/JTURjIg1_i6t8kCHKm45_bZF7g4.ttf",
		    "600italic": "http://fonts.gstatic.com/s/montserrat/v12/JTUPjIg1_i6t8kCHKm459WxZFgrD-w.ttf",
		    "700": "http://fonts.gstatic.com/s/montserrat/v12/JTURjIg1_i6t8kCHKm45_dJE7g4.ttf",
		    "700italic": "http://fonts.gstatic.com/s/montserrat/v12/JTUPjIg1_i6t8kCHKm459WxZcgvD-w.ttf",
		    "800": "http://fonts.gstatic.com/s/montserrat/v12/JTURjIg1_i6t8kCHKm45_c5H7g4.ttf",
		    "800italic": "http://fonts.gstatic.com/s/montserrat/v12/JTUPjIg1_i6t8kCHKm459WxZbgjD-w.ttf",
		    "900": "http://fonts.gstatic.com/s/montserrat/v12/JTURjIg1_i6t8kCHKm45_epG7g4.ttf",
		    "900italic": "http://fonts.gstatic.com/s/montserrat/v12/JTUPjIg1_i6t8kCHKm459WxZSgnD-w.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Montserrat Alternates",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "100italic",
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v9",
		   "lastModified": "2017-11-07",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/montserratalternates/v9/mFThWacfw6zH4dthXcyms1lPpC8I_b0juU0xiKfV.ttf",
		    "100italic": "http://fonts.gstatic.com/s/montserratalternates/v9/mFTjWacfw6zH4dthXcyms1lPpC8I_b0juU057p-xIJw.ttf",
		    "200": "http://fonts.gstatic.com/s/montserratalternates/v9/mFTiWacfw6zH4dthXcyms1lPpC8I_b0juU0xJIb1AA.ttf",
		    "200italic": "http://fonts.gstatic.com/s/montserratalternates/v9/mFTkWacfw6zH4dthXcyms1lPpC8I_b0juU057p8dAbxD.ttf",
		    "300": "http://fonts.gstatic.com/s/montserratalternates/v9/mFTiWacfw6zH4dthXcyms1lPpC8I_b0juU0xQIX1AA.ttf",
		    "300italic": "http://fonts.gstatic.com/s/montserratalternates/v9/mFTkWacfw6zH4dthXcyms1lPpC8I_b0juU057p95ArxD.ttf",
		    "regular": "http://fonts.gstatic.com/s/montserratalternates/v9/mFTvWacfw6zH4dthXcyms1lPpC8I_b0juU0J7A.ttf",
		    "italic": "http://fonts.gstatic.com/s/montserratalternates/v9/mFThWacfw6zH4dthXcyms1lPpC8I_b0juU057qfV.ttf",
		    "500": "http://fonts.gstatic.com/s/montserratalternates/v9/mFTiWacfw6zH4dthXcyms1lPpC8I_b0juU0xGIT1AA.ttf",
		    "500italic": "http://fonts.gstatic.com/s/montserratalternates/v9/mFTkWacfw6zH4dthXcyms1lPpC8I_b0juU057p8hA7xD.ttf",
		    "600": "http://fonts.gstatic.com/s/montserratalternates/v9/mFTiWacfw6zH4dthXcyms1lPpC8I_b0juU0xNIP1AA.ttf",
		    "600italic": "http://fonts.gstatic.com/s/montserratalternates/v9/mFTkWacfw6zH4dthXcyms1lPpC8I_b0juU057p8NBLxD.ttf",
		    "700": "http://fonts.gstatic.com/s/montserratalternates/v9/mFTiWacfw6zH4dthXcyms1lPpC8I_b0juU0xUIL1AA.ttf",
		    "700italic": "http://fonts.gstatic.com/s/montserratalternates/v9/mFTkWacfw6zH4dthXcyms1lPpC8I_b0juU057p9pBbxD.ttf",
		    "800": "http://fonts.gstatic.com/s/montserratalternates/v9/mFTiWacfw6zH4dthXcyms1lPpC8I_b0juU0xTIH1AA.ttf",
		    "800italic": "http://fonts.gstatic.com/s/montserratalternates/v9/mFTkWacfw6zH4dthXcyms1lPpC8I_b0juU057p91BrxD.ttf",
		    "900": "http://fonts.gstatic.com/s/montserratalternates/v9/mFTiWacfw6zH4dthXcyms1lPpC8I_b0juU0xaID1AA.ttf",
		    "900italic": "http://fonts.gstatic.com/s/montserratalternates/v9/mFTkWacfw6zH4dthXcyms1lPpC8I_b0juU057p9RB7xD.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Montserrat Subrayada",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2018-08-01",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/montserratsubrayada/v7/U9MD6c-o9H7PgjlTHThBnNHGVUORwteQQE8L.ttf",
		    "700": "http://fonts.gstatic.com/s/montserratsubrayada/v7/U9MM6c-o9H7PgjlTHThBnNHGVUORwteQQHe3TcMW.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Moul",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "khmer"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/moul/v9/nuF2D__FSo_3E-Q.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Moulpali",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "khmer"
		   ],
		   "version": "v10",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/moulpali/v10/H4ckBXKMl9HagUWymyY6.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Mountains of Christmas",
		   "category": "display",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v10",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/mountainsofchristmas/v10/3y9w6a4zcCnn5X0FDyrKi2ZRUBIy8uxoUo7ePNY.ttf",
		    "700": "http://fonts.gstatic.com/s/mountainsofchristmas/v10/3y9z6a4zcCnn5X0FDyrKi2ZRUBIy8uxoUo7eBGqJFPs.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Mouse Memoirs",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/mousememoirs/v5/t5tmIRoSNJ-PH0WNNgDYxdSb7Tk.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Mr Bedfort",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/mrbedfort/v6/MQpR-WCtNZSWAdTMwBiclio.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Mr Dafoe",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/mrdafoe/v6/lJwE-pIzkS5NXuMMrGiq.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Mr De Haviland",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/mrdehaviland/v6/OpNVnooIhJj96FdB73296ksbOj3C.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Mrs Saint Delafield",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/mrssaintdelafield/v5/v6-IGZDIOVXH9xtmTZfRagunqBw5WC62cK4.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Mrs Sheppards",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/mrssheppards/v6/PN_2Rfm9snC0XUGoEZhb91ig3vg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Mukta",
		   "category": "sans-serif",
		   "variants": [
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700",
		    "800"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-11-21",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/mukta/v5/iJWHBXyXfDDVXbEOjFma.ttf",
		    "300": "http://fonts.gstatic.com/s/mukta/v5/iJWHBXyXfDDVXbFqj1ma.ttf",
		    "regular": "http://fonts.gstatic.com/s/mukta/v5/iJWKBXyXfDDVXYnG.ttf",
		    "500": "http://fonts.gstatic.com/s/mukta/v5/iJWHBXyXfDDVXbEyjlma.ttf",
		    "600": "http://fonts.gstatic.com/s/mukta/v5/iJWHBXyXfDDVXbEeiVma.ttf",
		    "700": "http://fonts.gstatic.com/s/mukta/v5/iJWHBXyXfDDVXbF6iFma.ttf",
		    "800": "http://fonts.gstatic.com/s/mukta/v5/iJWHBXyXfDDVXbFmi1ma.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Mukta Mahee",
		   "category": "sans-serif",
		   "variants": [
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700",
		    "800"
		   ],
		   "subsets": [
		    "gurmukhi",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2018-10-08",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/muktamahee/v3/XRXN3IOIi0hcP8iVU67hA9MFcBoH.ttf",
		    "300": "http://fonts.gstatic.com/s/muktamahee/v3/XRXN3IOIi0hcP8iVU67hA9NhcxoH.ttf",
		    "regular": "http://fonts.gstatic.com/s/muktamahee/v3/XRXQ3IOIi0hcP8iVU67hA-vN.ttf",
		    "500": "http://fonts.gstatic.com/s/muktamahee/v3/XRXN3IOIi0hcP8iVU67hA9M5choH.ttf",
		    "600": "http://fonts.gstatic.com/s/muktamahee/v3/XRXN3IOIi0hcP8iVU67hA9MVdRoH.ttf",
		    "700": "http://fonts.gstatic.com/s/muktamahee/v3/XRXN3IOIi0hcP8iVU67hA9NxdBoH.ttf",
		    "800": "http://fonts.gstatic.com/s/muktamahee/v3/XRXN3IOIi0hcP8iVU67hA9NtdxoH.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Mukta Malar",
		   "category": "sans-serif",
		   "variants": [
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700",
		    "800"
		   ],
		   "subsets": [
		    "tamil",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2018-08-01",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/muktamalar/v4/MCoKzAXyz8LOE2FpJMxZqIMwBtAB.ttf",
		    "300": "http://fonts.gstatic.com/s/muktamalar/v4/MCoKzAXyz8LOE2FpJMxZqINUBdAB.ttf",
		    "regular": "http://fonts.gstatic.com/s/muktamalar/v4/MCoXzAXyz8LOE2FpJMxZqLv4.ttf",
		    "500": "http://fonts.gstatic.com/s/muktamalar/v4/MCoKzAXyz8LOE2FpJMxZqIMMBNAB.ttf",
		    "600": "http://fonts.gstatic.com/s/muktamalar/v4/MCoKzAXyz8LOE2FpJMxZqIMgA9AB.ttf",
		    "700": "http://fonts.gstatic.com/s/muktamalar/v4/MCoKzAXyz8LOE2FpJMxZqINEAtAB.ttf",
		    "800": "http://fonts.gstatic.com/s/muktamalar/v4/MCoKzAXyz8LOE2FpJMxZqINYAdAB.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Mukta Vaani",
		   "category": "sans-serif",
		   "variants": [
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700",
		    "800"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "gujarati"
		   ],
		   "version": "v5",
		   "lastModified": "2018-10-08",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/muktavaani/v5/3JnkSD_-ynaxmxnEfVHPIGXNV8BD.ttf",
		    "300": "http://fonts.gstatic.com/s/muktavaani/v5/3JnkSD_-ynaxmxnEfVHPIGWpVMBD.ttf",
		    "regular": "http://fonts.gstatic.com/s/muktavaani/v5/3Jn5SD_-ynaxmxnEfVHPIF0F.ttf",
		    "500": "http://fonts.gstatic.com/s/muktavaani/v5/3JnkSD_-ynaxmxnEfVHPIGXxVcBD.ttf",
		    "600": "http://fonts.gstatic.com/s/muktavaani/v5/3JnkSD_-ynaxmxnEfVHPIGXdUsBD.ttf",
		    "700": "http://fonts.gstatic.com/s/muktavaani/v5/3JnkSD_-ynaxmxnEfVHPIGW5U8BD.ttf",
		    "800": "http://fonts.gstatic.com/s/muktavaani/v5/3JnkSD_-ynaxmxnEfVHPIGWlUMBD.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Muli",
		   "category": "sans-serif",
		   "variants": [
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v12",
		   "lastModified": "2018-10-08",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/muli/v12/7Au_p_0qiz-adf3nCCI.ttf",
		    "200italic": "http://fonts.gstatic.com/s/muli/v12/7Au9p_0qiz-afTf-4CP2yg.ttf",
		    "300": "http://fonts.gstatic.com/s/muli/v12/7Au_p_0qiz-adZnkCCI.ttf",
		    "300italic": "http://fonts.gstatic.com/s/muli/v12/7Au9p_0qiz-afTf-hCD2yg.ttf",
		    "regular": "http://fonts.gstatic.com/s/muli/v12/7Auwp_0qiz-aTTU.ttf",
		    "italic": "http://fonts.gstatic.com/s/muli/v12/7Au-p_0qiz-afTfGKA.ttf",
		    "600": "http://fonts.gstatic.com/s/muli/v12/7Au_p_0qiz-ade3iCCI.ttf",
		    "600italic": "http://fonts.gstatic.com/s/muli/v12/7Au9p_0qiz-afTf-8Cb2yg.ttf",
		    "700": "http://fonts.gstatic.com/s/muli/v12/7Au_p_0qiz-adYnjCCI.ttf",
		    "700italic": "http://fonts.gstatic.com/s/muli/v12/7Au9p_0qiz-afTf-lCf2yg.ttf",
		    "800": "http://fonts.gstatic.com/s/muli/v12/7Au_p_0qiz-adZXgCCI.ttf",
		    "800italic": "http://fonts.gstatic.com/s/muli/v12/7Au9p_0qiz-afTf-iCT2yg.ttf",
		    "900": "http://fonts.gstatic.com/s/muli/v12/7Au_p_0qiz-adbHhCCI.ttf",
		    "900italic": "http://fonts.gstatic.com/s/muli/v12/7Au9p_0qiz-afTf-rCX2yg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Mystery Quest",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/mysteryquest/v5/-nF6OG414u0E6k0wynSGlujRHwE.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "NTR",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin",
		    "telugu"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/ntr/v5/RLpzK5Xy0ZjiGA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Nanum Brush Script",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "korean",
		    "latin"
		   ],
		   "version": "v13",
		   "lastModified": "2018-10-16",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/nanumbrushscript/v13/wXK2E2wfpokopxzthSqPbcR5_gVaxazyjg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Nanum Gothic",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "700",
		    "800"
		   ],
		   "subsets": [
		    "korean",
		    "latin"
		   ],
		   "version": "v13",
		   "lastModified": "2018-10-16",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/nanumgothic/v13/PN_3Rfi-oW3hYwmKDpxS7F_z_g.ttf",
		    "700": "http://fonts.gstatic.com/s/nanumgothic/v13/PN_oRfi-oW3hYwmKDpxS7F_LQv37zg.ttf",
		    "800": "http://fonts.gstatic.com/s/nanumgothic/v13/PN_oRfi-oW3hYwmKDpxS7F_LXv77zg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Nanum Gothic Coding",
		   "category": "monospace",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "korean",
		    "latin"
		   ],
		   "version": "v10",
		   "lastModified": "2018-10-16",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/nanumgothiccoding/v10/8QIVdjzHisX_8vv59_xMxtPFW4IXROwsy6Q.ttf",
		    "700": "http://fonts.gstatic.com/s/nanumgothiccoding/v10/8QIYdjzHisX_8vv59_xMxtPFW4IXROws8xgecsU.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Nanum Myeongjo",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "700",
		    "800"
		   ],
		   "subsets": [
		    "korean",
		    "latin"
		   ],
		   "version": "v11",
		   "lastModified": "2018-10-16",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/nanummyeongjo/v11/9Btx3DZF0dXLMZlywRbVRNhxy1Lr.ttf",
		    "700": "http://fonts.gstatic.com/s/nanummyeongjo/v11/9Bty3DZF0dXLMZlywRbVRNhxy2pXV1A0.ttf",
		    "800": "http://fonts.gstatic.com/s/nanummyeongjo/v11/9Bty3DZF0dXLMZlywRbVRNhxy2pLVFA0.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Nanum Pen Script",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "korean",
		    "latin"
		   ],
		   "version": "v11",
		   "lastModified": "2018-10-16",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/nanumpenscript/v11/daaDSSYiLGqEal3MvdA_FOL_3FkN2z4.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Neucha",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/neucha/v9/q5uGsou0JOdh94bvug.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Neuton",
		   "category": "serif",
		   "variants": [
		    "200",
		    "300",
		    "regular",
		    "italic",
		    "700",
		    "800"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v10",
		   "lastModified": "2017-10-10",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/neuton/v10/UMBQrPtMoH62xUZKAKkfeg.ttf",
		    "300": "http://fonts.gstatic.com/s/neuton/v10/UMBQrPtMoH62xUZKZKofeg.ttf",
		    "regular": "http://fonts.gstatic.com/s/neuton/v10/UMBTrPtMoH62xUZyyA.ttf",
		    "italic": "http://fonts.gstatic.com/s/neuton/v10/UMBRrPtMoH62xUZCyog_.ttf",
		    "700": "http://fonts.gstatic.com/s/neuton/v10/UMBQrPtMoH62xUZKdK0feg.ttf",
		    "800": "http://fonts.gstatic.com/s/neuton/v10/UMBQrPtMoH62xUZKaK4feg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "New Rocker",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/newrocker/v6/MwQzbhjp3-HImzcCU_cJkGM.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "News Cycle",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v14",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/newscycle/v14/CSR64z1Qlv-GDxkbKVQ_TOc.ttf",
		    "700": "http://fonts.gstatic.com/s/newscycle/v14/CSR54z1Qlv-GDxkbKVQ_dFsvaNM.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Niconne",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/niconne/v7/w8gaH2QvRug1_rTfrQs.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Niramit",
		   "category": "sans-serif",
		   "variants": [
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "thai",
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2018-09-27",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/niramit/v2/I_urMpWdvgLdNxVLVXx7tig.ttf",
		    "200italic": "http://fonts.gstatic.com/s/niramit/v2/I_upMpWdvgLdNxVLXbZiXimOqw.ttf",
		    "300": "http://fonts.gstatic.com/s/niramit/v2/I_urMpWdvgLdNxVLVRh4tig.ttf",
		    "300italic": "http://fonts.gstatic.com/s/niramit/v2/I_upMpWdvgLdNxVLXbZiOiqOqw.ttf",
		    "regular": "http://fonts.gstatic.com/s/niramit/v2/I_uuMpWdvgLdNxVLbbQ.ttf",
		    "italic": "http://fonts.gstatic.com/s/niramit/v2/I_usMpWdvgLdNxVLXbZalg.ttf",
		    "500": "http://fonts.gstatic.com/s/niramit/v2/I_urMpWdvgLdNxVLVUB5tig.ttf",
		    "500italic": "http://fonts.gstatic.com/s/niramit/v2/I_upMpWdvgLdNxVLXbZiYiuOqw.ttf",
		    "600": "http://fonts.gstatic.com/s/niramit/v2/I_urMpWdvgLdNxVLVWx-tig.ttf",
		    "600italic": "http://fonts.gstatic.com/s/niramit/v2/I_upMpWdvgLdNxVLXbZiTiyOqw.ttf",
		    "700": "http://fonts.gstatic.com/s/niramit/v2/I_urMpWdvgLdNxVLVQh_tig.ttf",
		    "700italic": "http://fonts.gstatic.com/s/niramit/v2/I_upMpWdvgLdNxVLXbZiKi2Oqw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Nixie One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/nixieone/v8/lW-8wjkKLXjg5y2o2uUoUA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Nobile",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/nobile/v9/m8JTjflSeaOVl1i2Xg.ttf",
		    "italic": "http://fonts.gstatic.com/s/nobile/v9/m8JRjflSeaOVl1iGXK3T.ttf",
		    "500": "http://fonts.gstatic.com/s/nobile/v9/m8JQjflSeaOVl1iOqo7zcA.ttf",
		    "500italic": "http://fonts.gstatic.com/s/nobile/v9/m8JWjflSeaOVl1iGXJUnc5RF.ttf",
		    "700": "http://fonts.gstatic.com/s/nobile/v9/m8JQjflSeaOVl1iO4ojzcA.ttf",
		    "700italic": "http://fonts.gstatic.com/s/nobile/v9/m8JWjflSeaOVl1iGXJVvdZRF.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Nokora",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "khmer"
		   ],
		   "version": "v11",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/nokora/v11/hYkIPuwgTubzaWxQOw.ttf",
		    "700": "http://fonts.gstatic.com/s/nokora/v11/hYkLPuwgTubzaWxohxUrqg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Norican",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/norican/v6/MwQ2bhXp1eSBqjkPGJI.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Nosifer",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/nosifer/v6/ZGjXol5JTp0g5bxZaC0.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Notable",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2018-11-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/notable/v3/gNMEW3N_SIqx-WX9-HMoFIez5MI.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Nothing You Could Do",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/nothingyoucoulddo/v7/oY1B8fbBpaP5OX3DtrRYf_Q2BPB1SnfZb0OJ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Noticia Text",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/noticiatext/v7/VuJ2dNDF2Yv9qppOePKYRP1GYQ.ttf",
		    "italic": "http://fonts.gstatic.com/s/noticiatext/v7/VuJodNDF2Yv9qppOePKYRP12Yztd.ttf",
		    "700": "http://fonts.gstatic.com/s/noticiatext/v7/VuJpdNDF2Yv9qppOePKYRP1-3R59vw.ttf",
		    "700italic": "http://fonts.gstatic.com/s/noticiatext/v7/VuJrdNDF2Yv9qppOePKYRP12YwPhumvV.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Noto Sans",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "greek-ext",
		    "devanagari",
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-11",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/notosans/v7/o-0IIpQlx3QUlC5A4PNb4g.ttf",
		    "italic": "http://fonts.gstatic.com/s/notosans/v7/o-0OIpQlx3QUlC5A4PNr4DRF.ttf",
		    "700": "http://fonts.gstatic.com/s/notosans/v7/o-0NIpQlx3QUlC5A4PNjXhFlYw.ttf",
		    "700italic": "http://fonts.gstatic.com/s/notosans/v7/o-0TIpQlx3QUlC5A4PNr4Az5ZtyE.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Noto Sans JP",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "300",
		    "regular",
		    "500",
		    "700",
		    "900"
		   ],
		   "subsets": [
		    "japanese",
		    "latin"
		   ],
		   "version": "v18",
		   "lastModified": "2018-11-15",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/notosansjp/v18/-F6ofjtqLzI2JPCgQBnw7HFQoggM.otf",
		    "300": "http://fonts.gstatic.com/s/notosansjp/v18/-F6pfjtqLzI2JPCgQBnw7HFQaioq1A.otf",
		    "regular": "http://fonts.gstatic.com/s/notosansjp/v18/-F62fjtqLzI2JPCgQBnw7HFowA.otf",
		    "500": "http://fonts.gstatic.com/s/notosansjp/v18/-F6pfjtqLzI2JPCgQBnw7HFQMisq1A.otf",
		    "700": "http://fonts.gstatic.com/s/notosansjp/v18/-F6pfjtqLzI2JPCgQBnw7HFQei0q1A.otf",
		    "900": "http://fonts.gstatic.com/s/notosansjp/v18/-F6pfjtqLzI2JPCgQBnw7HFQQi8q1A.otf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Noto Sans KR",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "300",
		    "regular",
		    "500",
		    "700",
		    "900"
		   ],
		   "subsets": [
		    "korean",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2018-10-16",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/notosanskr/v8/Pby6FmXiEBPT4ITbgNA5CgmOsn7u.otf",
		    "300": "http://fonts.gstatic.com/s/notosanskr/v8/Pby7FmXiEBPT4ITbgNA5CgmOelzI7g.otf",
		    "regular": "http://fonts.gstatic.com/s/notosanskr/v8/PbykFmXiEBPT4ITbgNA5Cgm20A.otf",
		    "500": "http://fonts.gstatic.com/s/notosanskr/v8/Pby7FmXiEBPT4ITbgNA5CgmOIl3I7g.otf",
		    "700": "http://fonts.gstatic.com/s/notosanskr/v8/Pby7FmXiEBPT4ITbgNA5CgmOalvI7g.otf",
		    "900": "http://fonts.gstatic.com/s/notosanskr/v8/Pby7FmXiEBPT4ITbgNA5CgmOUlnI7g.otf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Noto Sans SC",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "300",
		    "regular",
		    "500",
		    "700",
		    "900"
		   ],
		   "subsets": [
		    "japanese",
		    "vietnamese",
		    "latin",
		    "cyrillic",
		    "chinese-simplified"
		   ],
		   "version": "v2",
		   "lastModified": "2018-11-15",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/notosanssc/v2/k3kJo84MPvpLmixcA63oeALZTYKL.otf",
		    "300": "http://fonts.gstatic.com/s/notosanssc/v2/k3kIo84MPvpLmixcA63oeALZhaCt9w.otf",
		    "regular": "http://fonts.gstatic.com/s/notosanssc/v2/k3kXo84MPvpLmixcA63oeALhLw.otf",
		    "500": "http://fonts.gstatic.com/s/notosanssc/v2/k3kIo84MPvpLmixcA63oeALZ3aGt9w.otf",
		    "700": "http://fonts.gstatic.com/s/notosanssc/v2/k3kIo84MPvpLmixcA63oeALZlaet9w.otf",
		    "900": "http://fonts.gstatic.com/s/notosanssc/v2/k3kIo84MPvpLmixcA63oeALZraWt9w.otf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Noto Sans TC",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "300",
		    "regular",
		    "500",
		    "700",
		    "900"
		   ],
		   "subsets": [
		    "chinese-traditional",
		    "japanese",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2018-11-15",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/notosanstc/v2/-nFlOG829Oofr2wohFbTp9i9WyEJ.otf",
		    "300": "http://fonts.gstatic.com/s/notosanstc/v2/-nFkOG829Oofr2wohFbTp9i9kwMvDQ.otf",
		    "regular": "http://fonts.gstatic.com/s/notosanstc/v2/-nF7OG829Oofr2wohFbTp9iFOQ.otf",
		    "500": "http://fonts.gstatic.com/s/notosanstc/v2/-nFkOG829Oofr2wohFbTp9i9ywIvDQ.otf",
		    "700": "http://fonts.gstatic.com/s/notosanstc/v2/-nFkOG829Oofr2wohFbTp9i9gwQvDQ.otf",
		    "900": "http://fonts.gstatic.com/s/notosanstc/v2/-nFkOG829Oofr2wohFbTp9i9uwYvDQ.otf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Noto Serif",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "greek-ext",
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v6",
		   "lastModified": "2017-11-21",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/notoserif/v6/ga6Iaw1J5X9T9RW6j9bNTFA.ttf",
		    "italic": "http://fonts.gstatic.com/s/notoserif/v6/ga6Kaw1J5X9T9RW6j9bNfFIWbQ.ttf",
		    "700": "http://fonts.gstatic.com/s/notoserif/v6/ga6Law1J5X9T9RW6j9bNdOwzTRA.ttf",
		    "700italic": "http://fonts.gstatic.com/s/notoserif/v6/ga6Vaw1J5X9T9RW6j9bNfFIu0RWedA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Noto Serif JP",
		   "category": "sans-serif",
		   "variants": [
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700",
		    "900"
		   ],
		   "subsets": [
		    "japanese",
		    "latin"
		   ],
		   "version": "v1",
		   "lastModified": "2018-09-06",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/notoserifjp/v1/xn77YHs72GKoTvER4Gn3b5eMZBaPRkg.otf",
		    "300": "http://fonts.gstatic.com/s/notoserifjp/v1/xn77YHs72GKoTvER4Gn3b5eMZHKMRkg.otf",
		    "regular": "http://fonts.gstatic.com/s/notoserifjp/v1/xn7mYHs72GKoTvER4Gn3b5eMXNg.otf",
		    "500": "http://fonts.gstatic.com/s/notoserifjp/v1/xn77YHs72GKoTvER4Gn3b5eMZCqNRkg.otf",
		    "600": "http://fonts.gstatic.com/s/notoserifjp/v1/xn77YHs72GKoTvER4Gn3b5eMZAaKRkg.otf",
		    "700": "http://fonts.gstatic.com/s/notoserifjp/v1/xn77YHs72GKoTvER4Gn3b5eMZGKLRkg.otf",
		    "900": "http://fonts.gstatic.com/s/notoserifjp/v1/xn77YHs72GKoTvER4Gn3b5eMZFqJRkg.otf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Noto Serif KR",
		   "category": "sans-serif",
		   "variants": [
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700",
		    "900"
		   ],
		   "subsets": [
		    "korean",
		    "latin"
		   ],
		   "version": "v1",
		   "lastModified": "2018-09-06",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/notoserifkr/v1/3JnmSDn90Gmq2mr3blnHaTZXTihC8O0.otf",
		    "300": "http://fonts.gstatic.com/s/notoserifkr/v1/3JnmSDn90Gmq2mr3blnHaTZXTkxB8O0.otf",
		    "regular": "http://fonts.gstatic.com/s/notoserifkr/v1/3Jn7SDn90Gmq2mr3blnHaTZXduY.otf",
		    "500": "http://fonts.gstatic.com/s/notoserifkr/v1/3JnmSDn90Gmq2mr3blnHaTZXThRA8O0.otf",
		    "600": "http://fonts.gstatic.com/s/notoserifkr/v1/3JnmSDn90Gmq2mr3blnHaTZXTjhH8O0.otf",
		    "700": "http://fonts.gstatic.com/s/notoserifkr/v1/3JnmSDn90Gmq2mr3blnHaTZXTlxG8O0.otf",
		    "900": "http://fonts.gstatic.com/s/notoserifkr/v1/3JnmSDn90Gmq2mr3blnHaTZXTmRE8O0.otf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Nova Cut",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/novacut/v9/KFOkCnSYu8mL-39LkWxP.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Nova Flat",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/novaflat/v9/QdVUSTc-JgqpytEbVebEuQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Nova Mono",
		   "category": "monospace",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin",
		    "greek"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/novamono/v8/Cn-0JtiGWQ5Ajb--MRKfYA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Nova Oval",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/novaoval/v9/jAnEgHdmANHvPenMaswCMQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Nova Round",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/novaround/v9/flU9Rqquw5UhEnlwTJYTYYc.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Nova Script",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v10",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/novascript/v10/7Au7p_IpkSWSTWaFWkumvmQN.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Nova Slim",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/novaslim/v9/Z9XUDmZNQAuem8jyZcn-yA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Nova Square",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v10",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/novasquare/v10/RrQUbo9-9DV7b06QHgSWsZhA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Numans",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/numans/v7/SlGRmQmGupYAfH8IYQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Nunito",
		   "category": "sans-serif",
		   "variants": [
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/nunito/v9/XRXW3I6Li01BKofA-sekZg.ttf",
		    "200italic": "http://fonts.gstatic.com/s/nunito/v9/XRXQ3I6Li01BKofIMN5MZ-vN.ttf",
		    "300": "http://fonts.gstatic.com/s/nunito/v9/XRXW3I6Li01BKofAnsSkZg.ttf",
		    "300italic": "http://fonts.gstatic.com/s/nunito/v9/XRXQ3I6Li01BKofIMN4oZOvN.ttf",
		    "regular": "http://fonts.gstatic.com/s/nunito/v9/XRXV3I6Li01BKof4Mg.ttf",
		    "italic": "http://fonts.gstatic.com/s/nunito/v9/XRXX3I6Li01BKofIMOaE.ttf",
		    "600": "http://fonts.gstatic.com/s/nunito/v9/XRXW3I6Li01BKofA6sKkZg.ttf",
		    "600italic": "http://fonts.gstatic.com/s/nunito/v9/XRXQ3I6Li01BKofIMN5cYuvN.ttf",
		    "700": "http://fonts.gstatic.com/s/nunito/v9/XRXW3I6Li01BKofAjsOkZg.ttf",
		    "700italic": "http://fonts.gstatic.com/s/nunito/v9/XRXQ3I6Li01BKofIMN44Y-vN.ttf",
		    "800": "http://fonts.gstatic.com/s/nunito/v9/XRXW3I6Li01BKofAksCkZg.ttf",
		    "800italic": "http://fonts.gstatic.com/s/nunito/v9/XRXQ3I6Li01BKofIMN4kYOvN.ttf",
		    "900": "http://fonts.gstatic.com/s/nunito/v9/XRXW3I6Li01BKofAtsGkZg.ttf",
		    "900italic": "http://fonts.gstatic.com/s/nunito/v9/XRXQ3I6Li01BKofIMN4AYevN.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Nunito Sans",
		   "category": "sans-serif",
		   "variants": [
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/nunitosans/v3/pe03MImSLYBIv1o4X1M8cc9yAv5q.ttf",
		    "200italic": "http://fonts.gstatic.com/s/nunitosans/v3/pe01MImSLYBIv1o4X1M8cce4GxZrU1Q.ttf",
		    "300": "http://fonts.gstatic.com/s/nunitosans/v3/pe03MImSLYBIv1o4X1M8cc8WAf5q.ttf",
		    "300italic": "http://fonts.gstatic.com/s/nunitosans/v3/pe01MImSLYBIv1o4X1M8cce4G3JoU1Q.ttf",
		    "regular": "http://fonts.gstatic.com/s/nunitosans/v3/pe0qMImSLYBIv1o4X1M8cfe6.ttf",
		    "italic": "http://fonts.gstatic.com/s/nunitosans/v3/pe0oMImSLYBIv1o4X1M8cce4I94.ttf",
		    "600": "http://fonts.gstatic.com/s/nunitosans/v3/pe03MImSLYBIv1o4X1M8cc9iB_5q.ttf",
		    "600italic": "http://fonts.gstatic.com/s/nunitosans/v3/pe01MImSLYBIv1o4X1M8cce4GwZuU1Q.ttf",
		    "700": "http://fonts.gstatic.com/s/nunitosans/v3/pe03MImSLYBIv1o4X1M8cc8GBv5q.ttf",
		    "700italic": "http://fonts.gstatic.com/s/nunitosans/v3/pe01MImSLYBIv1o4X1M8cce4G2JvU1Q.ttf",
		    "800": "http://fonts.gstatic.com/s/nunitosans/v3/pe03MImSLYBIv1o4X1M8cc8aBf5q.ttf",
		    "800italic": "http://fonts.gstatic.com/s/nunitosans/v3/pe01MImSLYBIv1o4X1M8cce4G35sU1Q.ttf",
		    "900": "http://fonts.gstatic.com/s/nunitosans/v3/pe03MImSLYBIv1o4X1M8cc8-BP5q.ttf",
		    "900italic": "http://fonts.gstatic.com/s/nunitosans/v3/pe01MImSLYBIv1o4X1M8cce4G1ptU1Q.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Odor Mean Chey",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "khmer"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/odormeanchey/v9/raxkHiKDttkTe1aOGcJMR1A_4mrY.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Offside",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/offside/v5/HI_KiYMWKa9QrAykQ5E.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Old Standard TT",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v10",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/oldstandardtt/v10/MwQubh3o1vLImiwAVvYawgcf2eVurQ.ttf",
		    "italic": "http://fonts.gstatic.com/s/oldstandardtt/v10/MwQsbh3o1vLImiwAVvYawgcf2eVer1q9.ttf",
		    "700": "http://fonts.gstatic.com/s/oldstandardtt/v10/MwQrbh3o1vLImiwAVvYawgcf2eVWEX-dTA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Oldenburg",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/oldenburg/v5/fC1jPY5JYWzbywv7c4V6UQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Oleo Script",
		   "category": "display",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/oleoscript/v6/rax5HieDvtMOe0iICsUccBha.ttf",
		    "700": "http://fonts.gstatic.com/s/oleoscript/v6/raxkHieDvtMOe0iICsUccCDmnmrY.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Oleo Script Swash Caps",
		   "category": "display",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/oleoscriptswashcaps/v5/Noaj6Vb-w5SFbTTAsZP_7JkCS08K-jCzDn_HMXo.ttf",
		    "700": "http://fonts.gstatic.com/s/oleoscriptswashcaps/v5/Noag6Vb-w5SFbTTAsZP_7JkCS08K-jCzDn_HCcaBbYU.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Open Sans",
		   "category": "sans-serif",
		   "variants": [
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic"
		   ],
		   "subsets": [
		    "greek-ext",
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v15",
		   "lastModified": "2017-10-11",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8-VQ.ttf",
		    "300italic": "http://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKWyV-hs.ttf",
		    "regular": "http://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-U1Ug.ttf",
		    "italic": "http://fonts.gstatic.com/s/opensans/v15/mem6YaGs126MiZpBA-UFUJ0e.ttf",
		    "600": "http://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UNirk-VQ.ttf",
		    "600italic": "http://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKXGUehs.ttf",
		    "700": "http://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN7rg-VQ.ttf",
		    "700italic": "http://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKWiUOhs.ttf",
		    "800": "http://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN8rs-VQ.ttf",
		    "800italic": "http://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKW-U-hs.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Open Sans Condensed",
		   "category": "sans-serif",
		   "variants": [
		    "300",
		    "300italic",
		    "700"
		   ],
		   "subsets": [
		    "greek-ext",
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v12",
		   "lastModified": "2017-10-11",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/opensanscondensed/v12/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff1GhPuI.ttf",
		    "300italic": "http://fonts.gstatic.com/s/opensanscondensed/v12/z7NHdQDnbTkabZAIOl9il_O6KJj73e7Fd_-7suDMQg.ttf",
		    "700": "http://fonts.gstatic.com/s/opensanscondensed/v12/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff0GmPuI.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Oranienbaum",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/oranienbaum/v6/OZpHg_txtzZKMuXLIVrx-3zn.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Orbitron",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "500",
		    "700",
		    "900"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/orbitron/v9/yMJRMIlzdpvBhQQL_Tq8.ttf",
		    "500": "http://fonts.gstatic.com/s/orbitron/v9/yMJWMIlzdpvBhQQL_QJIVAhx.ttf",
		    "700": "http://fonts.gstatic.com/s/orbitron/v9/yMJWMIlzdpvBhQQL_QIAUghx.ttf",
		    "900": "http://fonts.gstatic.com/s/orbitron/v9/yMJWMIlzdpvBhQQL_QI4UAhx.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Oregano",
		   "category": "display",
		   "variants": [
		    "regular",
		    "italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/oregano/v5/If2IXTPxciS3H4S2kZc.ttf",
		    "italic": "http://fonts.gstatic.com/s/oregano/v5/If2KXTPxciS3H4S2oZXVOw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Orienta",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/orienta/v5/PlI9FlK4Jrl5Y9zNeyc.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Original Surfer",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/originalsurfer/v6/RWmQoKGZ9vIirYntXJ3_MbekzNMiDA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Oswald",
		   "category": "sans-serif",
		   "variants": [
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v16",
		   "lastModified": "2017-11-21",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/oswald/v16/TK3hWkUHHAIjg75-1h4jvQ.ttf",
		    "300": "http://fonts.gstatic.com/s/oswald/v16/TK3hWkUHHAIjg75-sh0jvQ.ttf",
		    "regular": "http://fonts.gstatic.com/s/oswald/v16/TK3iWkUHHAIjg75GHg.ttf",
		    "500": "http://fonts.gstatic.com/s/oswald/v16/TK3hWkUHHAIjg75-6hwjvQ.ttf",
		    "600": "http://fonts.gstatic.com/s/oswald/v16/TK3hWkUHHAIjg75-xhsjvQ.ttf",
		    "700": "http://fonts.gstatic.com/s/oswald/v16/TK3hWkUHHAIjg75-ohojvQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Over the Rainbow",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/overtherainbow/v8/11haGoXG1k_HKhMLUWz7Mc7vvW5upvM.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Overlock",
		   "category": "display",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/overlock/v7/Z9XVDmdMWRiN1_T9Z4Te.ttf",
		    "italic": "http://fonts.gstatic.com/s/overlock/v7/Z9XTDmdMWRiN1_T9Z7Tc6Ok.ttf",
		    "700": "http://fonts.gstatic.com/s/overlock/v7/Z9XSDmdMWRiN1_T9Z7xizcmM.ttf",
		    "700italic": "http://fonts.gstatic.com/s/overlock/v7/Z9XQDmdMWRiN1_T9Z7Tc0FWJtrk.ttf",
		    "900": "http://fonts.gstatic.com/s/overlock/v7/Z9XSDmdMWRiN1_T9Z7xaz8mM.ttf",
		    "900italic": "http://fonts.gstatic.com/s/overlock/v7/Z9XQDmdMWRiN1_T9Z7Tc0G2Ltrk.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Overlock SC",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/overlocksc/v6/1cX3aUHKGZrstGAY8nwVzHGA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Overpass",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "100italic",
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-10",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/overpass/v2/qFdB35WCmI96Ajtm81nGU94.ttf",
		    "100italic": "http://fonts.gstatic.com/s/overpass/v2/qFdD35WCmI96Ajtm81Gga7rqwg.ttf",
		    "200": "http://fonts.gstatic.com/s/overpass/v2/qFdA35WCmI96Ajtm81lqcv7K.ttf",
		    "200italic": "http://fonts.gstatic.com/s/overpass/v2/qFdC35WCmI96Ajtm81GgaxbL4h8.ttf",
		    "300": "http://fonts.gstatic.com/s/overpass/v2/qFdA35WCmI96Ajtm81kOcf7K.ttf",
		    "300italic": "http://fonts.gstatic.com/s/overpass/v2/qFdC35WCmI96Ajtm81Gga3LI4h8.ttf",
		    "regular": "http://fonts.gstatic.com/s/overpass/v2/qFdH35WCmI96Ajtm82Gi.ttf",
		    "italic": "http://fonts.gstatic.com/s/overpass/v2/qFdB35WCmI96Ajtm81GgU94.ttf",
		    "600": "http://fonts.gstatic.com/s/overpass/v2/qFdA35WCmI96Ajtm81l6d_7K.ttf",
		    "600italic": "http://fonts.gstatic.com/s/overpass/v2/qFdC35WCmI96Ajtm81GgawbO4h8.ttf",
		    "700": "http://fonts.gstatic.com/s/overpass/v2/qFdA35WCmI96Ajtm81kedv7K.ttf",
		    "700italic": "http://fonts.gstatic.com/s/overpass/v2/qFdC35WCmI96Ajtm81Gga2LP4h8.ttf",
		    "800": "http://fonts.gstatic.com/s/overpass/v2/qFdA35WCmI96Ajtm81kCdf7K.ttf",
		    "800italic": "http://fonts.gstatic.com/s/overpass/v2/qFdC35WCmI96Ajtm81Gga37M4h8.ttf",
		    "900": "http://fonts.gstatic.com/s/overpass/v2/qFdA35WCmI96Ajtm81kmdP7K.ttf",
		    "900italic": "http://fonts.gstatic.com/s/overpass/v2/qFdC35WCmI96Ajtm81Gga1rN4h8.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Overpass Mono",
		   "category": "monospace",
		   "variants": [
		    "300",
		    "regular",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-09",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/overpassmono/v3/_Xm3-H86tzKDdAPa-KPQZ-AC3oSWk_c.ttf",
		    "regular": "http://fonts.gstatic.com/s/overpassmono/v3/_Xmq-H86tzKDdAPa-KPQZ-AC5ig.ttf",
		    "600": "http://fonts.gstatic.com/s/overpassmono/v3/_Xm3-H86tzKDdAPa-KPQZ-AC3vCQk_c.ttf",
		    "700": "http://fonts.gstatic.com/s/overpassmono/v3/_Xm3-H86tzKDdAPa-KPQZ-AC3pSRk_c.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Ovo",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/ovo/v9/yYLl0h7Wyfzjyw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Oxygen",
		   "category": "sans-serif",
		   "variants": [
		    "300",
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/oxygen/v7/2sDcZG1Wl4LcnbuCJW8Dbw.ttf",
		    "regular": "http://fonts.gstatic.com/s/oxygen/v7/2sDfZG1Wl4Lcnbu6iQ.ttf",
		    "700": "http://fonts.gstatic.com/s/oxygen/v7/2sDcZG1Wl4LcnbuCNWgDbw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Oxygen Mono",
		   "category": "monospace",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/oxygenmono/v5/h0GsssGg9FxgDgCjLeAd7ijf.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "PT Mono",
		   "category": "monospace",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/ptmono/v5/9oRONYoBnWILk-9ArCg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "PT Sans",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-11",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/ptsans/v9/jizaRExUiTo99u79P0U.ttf",
		    "italic": "http://fonts.gstatic.com/s/ptsans/v9/jizYRExUiTo99u79D0eEwA.ttf",
		    "700": "http://fonts.gstatic.com/s/ptsans/v9/jizfRExUiTo99u79B_mh4Ok.ttf",
		    "700italic": "http://fonts.gstatic.com/s/ptsans/v9/jizdRExUiTo99u79D0e8fOytKA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "PT Sans Caption",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v10",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/ptsanscaption/v10/0FlMVP6Hrxmt7-fsUFhlFXNIlpcqfQ.ttf",
		    "700": "http://fonts.gstatic.com/s/ptsanscaption/v10/0FlJVP6Hrxmt7-fsUFhlFXNIlpcSwSrUSw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "PT Sans Narrow",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v9",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/ptsansnarrow/v9/BngRUXNadjH0qYEzV7ab-oWlsYCB.ttf",
		    "700": "http://fonts.gstatic.com/s/ptsansnarrow/v9/BngSUXNadjH0qYEzV7ab-oWlsbg95DiC.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "PT Serif",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-11",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/ptserif/v9/EJRVQgYoZZY2vCFuvDFR.ttf",
		    "italic": "http://fonts.gstatic.com/s/ptserif/v9/EJRTQgYoZZY2vCFuvAFTzro.ttf",
		    "700": "http://fonts.gstatic.com/s/ptserif/v9/EJRSQgYoZZY2vCFuvAnt65qV.ttf",
		    "700italic": "http://fonts.gstatic.com/s/ptserif/v9/EJRQQgYoZZY2vCFuvAFT9gaQVy4.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "PT Serif Caption",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/ptserifcaption/v9/ieVl2ZhbGCW-JoW6S34pSDpqYKU059U.ttf",
		    "italic": "http://fonts.gstatic.com/s/ptserifcaption/v9/ieVj2ZhbGCW-JoW6S34pSDpqYKU019e7CA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Pacifico",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v12",
		   "lastModified": "2017-11-07",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/pacifico/v12/FwZY7-Qmy14u9lezJ96A.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Padauk",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "myanmar",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/padauk/v4/RrQRboJg-id7OnbBaw.ttf",
		    "700": "http://fonts.gstatic.com/s/padauk/v4/RrQSboJg-id7Onb512DE1A.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Palanquin",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/palanquin/v3/9XUhlJ90n1fBFg7ceXwUEltI.ttf",
		    "200": "http://fonts.gstatic.com/s/palanquin/v3/9XUilJ90n1fBFg7ceXwUvnpoxA.ttf",
		    "300": "http://fonts.gstatic.com/s/palanquin/v3/9XUilJ90n1fBFg7ceXwU2nloxA.ttf",
		    "regular": "http://fonts.gstatic.com/s/palanquin/v3/9XUnlJ90n1fBFg7ceXwsdg.ttf",
		    "500": "http://fonts.gstatic.com/s/palanquin/v3/9XUilJ90n1fBFg7ceXwUgnhoxA.ttf",
		    "600": "http://fonts.gstatic.com/s/palanquin/v3/9XUilJ90n1fBFg7ceXwUrn9oxA.ttf",
		    "700": "http://fonts.gstatic.com/s/palanquin/v3/9XUilJ90n1fBFg7ceXwUyn5oxA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Palanquin Dark",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/palanquindark/v4/xn75YHgl1nqmANMB-26xC7yuF_6O.ttf",
		    "500": "http://fonts.gstatic.com/s/palanquindark/v4/xn76YHgl1nqmANMB-26xC7yuF8Z6ZW41.ttf",
		    "600": "http://fonts.gstatic.com/s/palanquindark/v4/xn76YHgl1nqmANMB-26xC7yuF8ZWYm41.ttf",
		    "700": "http://fonts.gstatic.com/s/palanquindark/v4/xn76YHgl1nqmANMB-26xC7yuF8YyY241.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Pangolin",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/pangolin/v3/cY9GfjGcW0FPpi-tWPfK.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Paprika",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/paprika/v5/8QIJdijZitv49rDfuIg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Parisienne",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/parisienne/v5/E21i_d3kivvAkxhLEVZpcy8.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Passero One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/passeroone/v9/JTUTjIko8DOq5FeaeEAjgE5B.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Passion One",
		   "category": "display",
		   "variants": [
		    "regular",
		    "700",
		    "900"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/passionone/v8/PbynFmL8HhTPqbjUzux3JHuW.ttf",
		    "700": "http://fonts.gstatic.com/s/passionone/v8/Pby6FmL8HhTPqbjUzux3JEMq037o.ttf",
		    "900": "http://fonts.gstatic.com/s/passionone/v8/Pby6FmL8HhTPqbjUzux3JEMS0X7o.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Pathway Gothic One",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/pathwaygothicone/v6/MwQrbgD32-KAvjkYGNUUxAtW7pEBwx-dTA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Patrick Hand",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v11",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/patrickhand/v11/LDI1apSQOAYtSuYWp8ZhfYeMWQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Patrick Hand SC",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/patrickhandsc/v5/0nkwC9f7MfsBiWcLtY65AWDK873ViQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Pattaya",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "thai",
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v3",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/pattaya/v3/ea8ZadcqV_zkHY-XNdA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Patua One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/patuaone/v8/ZXuke1cDvLCKLDcimxBI5A.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Pavanam",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "tamil",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/pavanam/v2/BXRrvF_aiezLh0xPDOs.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Paytone One",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v10",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/paytoneone/v10/0nksC9P7MfYHj2oFtYm2CiTq.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Peddana",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin",
		    "telugu"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/peddana/v5/aFTU7PBhaX89UcKWhh0.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Peralta",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/peralta/v5/hYkJPu0-RP_9d3kRGxA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Permanent Marker",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/permanentmarker/v7/Fh4uPib9Iyv2ucM6pGQMWimMp004Hao.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Petit Formal Script",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/petitformalscript/v5/B50TF6xQr2TXJBnGOFME6u5OR83oRP5qoHk.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Petrona",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/petrona/v6/mtG64_NXL7bZo9XXsXU.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Philosopher",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/philosopher/v9/vEFV2_5QCwIS4_Dhez5jcVBp.ttf",
		    "italic": "http://fonts.gstatic.com/s/philosopher/v9/vEFX2_5QCwIS4_Dhez5jcWBrT0g.ttf",
		    "700": "http://fonts.gstatic.com/s/philosopher/v9/vEFI2_5QCwIS4_Dhez5jcWjVamgc.ttf",
		    "700italic": "http://fonts.gstatic.com/s/philosopher/v9/vEFK2_5QCwIS4_Dhez5jcWBrd_QZ8tI.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Piedra",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/piedra/v6/ke8kOg8aN0Bn7hTunA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Pinyon Script",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/pinyonscript/v7/6xKpdSJbL9-e9LuoeQiDRQR8aOI.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Pirata One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/pirataone/v6/I_urMpiDvgLdLh0fAtoftig.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Plaster",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/plaster/v9/DdTm79QatW80eRh4Ei4.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Play",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/play/v9/6aez4K2oVqwIjtI.ttf",
		    "700": "http://fonts.gstatic.com/s/play/v9/6ae84K2oVqwItm4TOpc.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Playball",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/playball/v7/TK3gWksYAxQ7jbsKcj8D.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Playfair Display",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v13",
		   "lastModified": "2017-11-07",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/playfairdisplay/v13/nuFiD-vYSZviVYUb_rj3ij__anPXPTs.ttf",
		    "italic": "http://fonts.gstatic.com/s/playfairdisplay/v13/nuFkD-vYSZviVYUb_rj3ij__anPXDTnYhQ.ttf",
		    "700": "http://fonts.gstatic.com/s/playfairdisplay/v13/nuFlD-vYSZviVYUb_rj3ij__anPXBYf9pWk.ttf",
		    "700italic": "http://fonts.gstatic.com/s/playfairdisplay/v13/nuFnD-vYSZviVYUb_rj3ij__anPXDTngOWwe4w.ttf",
		    "900": "http://fonts.gstatic.com/s/playfairdisplay/v13/nuFlD-vYSZviVYUb_rj3ij__anPXBb__pWk.ttf",
		    "900italic": "http://fonts.gstatic.com/s/playfairdisplay/v13/nuFnD-vYSZviVYUb_rj3ij__anPXDTngAW4e4w.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Playfair Display SC",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v7",
		   "lastModified": "2017-11-07",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/playfairdisplaysc/v7/ke85OhoaMkR6-hSn7kbHVoFf7ZfgMPr_pb4.ttf",
		    "italic": "http://fonts.gstatic.com/s/playfairdisplaysc/v7/ke87OhoaMkR6-hSn7kbHVoFf7ZfgMPr_lbwMFQ.ttf",
		    "700": "http://fonts.gstatic.com/s/playfairdisplaysc/v7/ke80OhoaMkR6-hSn7kbHVoFf7ZfgMPr_nQIpNcs.ttf",
		    "700italic": "http://fonts.gstatic.com/s/playfairdisplaysc/v7/ke82OhoaMkR6-hSn7kbHVoFf7ZfgMPr_lbw0qc4XKw.ttf",
		    "900": "http://fonts.gstatic.com/s/playfairdisplaysc/v7/ke80OhoaMkR6-hSn7kbHVoFf7ZfgMPr_nTorNcs.ttf",
		    "900italic": "http://fonts.gstatic.com/s/playfairdisplaysc/v7/ke82OhoaMkR6-hSn7kbHVoFf7ZfgMPr_lbw0kcwXKw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Podkova",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "500",
		    "600",
		    "700",
		    "800"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v11",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/podkova/v11/K2FxfZ1EmftJSV9VWJ4.ttf",
		    "500": "http://fonts.gstatic.com/s/podkova/v11/K2F0fZ1EmftJSV9VYGrQAoo.ttf",
		    "600": "http://fonts.gstatic.com/s/podkova/v11/K2F0fZ1EmftJSV9VYEbXAoo.ttf",
		    "700": "http://fonts.gstatic.com/s/podkova/v11/K2F0fZ1EmftJSV9VYCLWAoo.ttf",
		    "800": "http://fonts.gstatic.com/s/podkova/v11/K2F0fZ1EmftJSV9VYD7VAoo.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Poiret One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v6",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/poiretone/v6/UqyVK80NJXN4zfRgbdfbk5k.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Poller One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/pollerone/v7/ahccv82n0TN3gia5E4Bud-k.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Poly",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/poly/v8/MQpb-W6wKNitRLA.ttf",
		    "italic": "http://fonts.gstatic.com/s/poly/v8/MQpV-W6wKNitdLKKrw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Pompiere",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/pompiere/v7/VEMyRoxis5Dwuyeov6Wt.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Pontano Sans",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/pontanosans/v5/qFdD35GdgYR8EzR6oBLDHa3qwg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Poor Story",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "korean",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2018-08-29",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/poorstory/v4/jizfREFUsnUct9P6cDfd4Ok.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Poppins",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "100italic",
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-11-21",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/poppins/v5/pxiGyp8kv8JHgFVrLPTedw.ttf",
		    "100italic": "http://fonts.gstatic.com/s/poppins/v5/pxiAyp8kv8JHgFVrJJLmE3tF.ttf",
		    "200": "http://fonts.gstatic.com/s/poppins/v5/pxiByp8kv8JHgFVrLFj_V1s.ttf",
		    "200italic": "http://fonts.gstatic.com/s/poppins/v5/pxiDyp8kv8JHgFVrJJLmv1plEA.ttf",
		    "300": "http://fonts.gstatic.com/s/poppins/v5/pxiByp8kv8JHgFVrLDz8V1s.ttf",
		    "300italic": "http://fonts.gstatic.com/s/poppins/v5/pxiDyp8kv8JHgFVrJJLm21llEA.ttf",
		    "regular": "http://fonts.gstatic.com/s/poppins/v5/pxiEyp8kv8JHgFVrFJA.ttf",
		    "italic": "http://fonts.gstatic.com/s/poppins/v5/pxiGyp8kv8JHgFVrJJLedw.ttf",
		    "500": "http://fonts.gstatic.com/s/poppins/v5/pxiByp8kv8JHgFVrLGT9V1s.ttf",
		    "500italic": "http://fonts.gstatic.com/s/poppins/v5/pxiDyp8kv8JHgFVrJJLmg1hlEA.ttf",
		    "600": "http://fonts.gstatic.com/s/poppins/v5/pxiByp8kv8JHgFVrLEj6V1s.ttf",
		    "600italic": "http://fonts.gstatic.com/s/poppins/v5/pxiDyp8kv8JHgFVrJJLmr19lEA.ttf",
		    "700": "http://fonts.gstatic.com/s/poppins/v5/pxiByp8kv8JHgFVrLCz7V1s.ttf",
		    "700italic": "http://fonts.gstatic.com/s/poppins/v5/pxiDyp8kv8JHgFVrJJLmy15lEA.ttf",
		    "800": "http://fonts.gstatic.com/s/poppins/v5/pxiByp8kv8JHgFVrLDD4V1s.ttf",
		    "800italic": "http://fonts.gstatic.com/s/poppins/v5/pxiDyp8kv8JHgFVrJJLm111lEA.ttf",
		    "900": "http://fonts.gstatic.com/s/poppins/v5/pxiByp8kv8JHgFVrLBT5V1s.ttf",
		    "900italic": "http://fonts.gstatic.com/s/poppins/v5/pxiDyp8kv8JHgFVrJJLm81xlEA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Port Lligat Sans",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/portlligatsans/v6/kmKmZrYrGBbdN1aV7Vokow6Lw4s4l7M.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Port Lligat Slab",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/portlligatslab/v6/LDIpaoiQNgArA8kR7ulhZ8P_NYOss7o.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Pragati Narrow",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/pragatinarrow/v3/vm8vdRf0T0bS1ffgsPB7WZ-mD17_.ttf",
		    "700": "http://fonts.gstatic.com/s/pragatinarrow/v3/vm8sdRf0T0bS1ffgsPB7WZ-mD2ZD5fd_.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Prata",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/prata/v8/6xKhdSpbNNCT-vWI.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Preahvihear",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "khmer"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/preahvihear/v9/6NUS8F-dNQeEYhzj7uluxswE.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Press Start 2P",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/pressstart2p/v6/e3t4euO8T-267oIAQAu6jDQyK0nS.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Pridi",
		   "category": "serif",
		   "variants": [
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "thai",
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/pridi/v3/2sDdZG5JnZLfkc1SiE0j.ttf",
		    "300": "http://fonts.gstatic.com/s/pridi/v3/2sDdZG5JnZLfkc02i00j.ttf",
		    "regular": "http://fonts.gstatic.com/s/pridi/v3/2sDQZG5JnZLfkfWa.ttf",
		    "500": "http://fonts.gstatic.com/s/pridi/v3/2sDdZG5JnZLfkc1uik0j.ttf",
		    "600": "http://fonts.gstatic.com/s/pridi/v3/2sDdZG5JnZLfkc1CjU0j.ttf",
		    "700": "http://fonts.gstatic.com/s/pridi/v3/2sDdZG5JnZLfkc0mjE0j.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Princess Sofia",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/princesssofia/v6/qWczB6yguIb8DZ_GXZst16n7GRz7.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Prociono",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/prociono/v7/r05YGLlR-KxAf9GGO8up.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Prompt",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "100italic",
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "thai",
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-10",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/prompt/v2/-W_9XJnvUD7dzB2CA9oY.ttf",
		    "100italic": "http://fonts.gstatic.com/s/prompt/v2/-W_7XJnvUD7dzB2KZeJ8TkM.ttf",
		    "200": "http://fonts.gstatic.com/s/prompt/v2/-W_8XJnvUD7dzB2Cr_s4bg.ttf",
		    "200italic": "http://fonts.gstatic.com/s/prompt/v2/-W_6XJnvUD7dzB2KZeLQb2Mr.ttf",
		    "300": "http://fonts.gstatic.com/s/prompt/v2/-W_8XJnvUD7dzB2Cy_g4bg.ttf",
		    "300italic": "http://fonts.gstatic.com/s/prompt/v2/-W_6XJnvUD7dzB2KZeK0bGMr.ttf",
		    "regular": "http://fonts.gstatic.com/s/prompt/v2/-W__XJnvUD7dzB26Zw.ttf",
		    "italic": "http://fonts.gstatic.com/s/prompt/v2/-W_9XJnvUD7dzB2KZdoY.ttf",
		    "500": "http://fonts.gstatic.com/s/prompt/v2/-W_8XJnvUD7dzB2Ck_k4bg.ttf",
		    "500italic": "http://fonts.gstatic.com/s/prompt/v2/-W_6XJnvUD7dzB2KZeLsbWMr.ttf",
		    "600": "http://fonts.gstatic.com/s/prompt/v2/-W_8XJnvUD7dzB2Cv_44bg.ttf",
		    "600italic": "http://fonts.gstatic.com/s/prompt/v2/-W_6XJnvUD7dzB2KZeLAamMr.ttf",
		    "700": "http://fonts.gstatic.com/s/prompt/v2/-W_8XJnvUD7dzB2C2_84bg.ttf",
		    "700italic": "http://fonts.gstatic.com/s/prompt/v2/-W_6XJnvUD7dzB2KZeKka2Mr.ttf",
		    "800": "http://fonts.gstatic.com/s/prompt/v2/-W_8XJnvUD7dzB2Cx_w4bg.ttf",
		    "800italic": "http://fonts.gstatic.com/s/prompt/v2/-W_6XJnvUD7dzB2KZeK4aGMr.ttf",
		    "900": "http://fonts.gstatic.com/s/prompt/v2/-W_8XJnvUD7dzB2C4_04bg.ttf",
		    "900italic": "http://fonts.gstatic.com/s/prompt/v2/-W_6XJnvUD7dzB2KZeKcaWMr.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Prosto One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/prostoone/v6/OpNJno4VhNfK-RgpwWWxpio.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Proza Libre",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/prozalibre/v2/LYjGdGHgj0k1DIQRyUEyyHov.ttf",
		    "italic": "http://fonts.gstatic.com/s/prozalibre/v2/LYjEdGHgj0k1DIQRyUEyyEotdN8.ttf",
		    "500": "http://fonts.gstatic.com/s/prozalibre/v2/LYjbdGHgj0k1DIQRyUEyyELbV__f.ttf",
		    "500italic": "http://fonts.gstatic.com/s/prozalibre/v2/LYjZdGHgj0k1DIQRyUEyyEotTCvceJQ.ttf",
		    "600": "http://fonts.gstatic.com/s/prozalibre/v2/LYjbdGHgj0k1DIQRyUEyyEL3UP_f.ttf",
		    "600italic": "http://fonts.gstatic.com/s/prozalibre/v2/LYjZdGHgj0k1DIQRyUEyyEotTAfbeJQ.ttf",
		    "700": "http://fonts.gstatic.com/s/prozalibre/v2/LYjbdGHgj0k1DIQRyUEyyEKTUf_f.ttf",
		    "700italic": "http://fonts.gstatic.com/s/prozalibre/v2/LYjZdGHgj0k1DIQRyUEyyEotTGPaeJQ.ttf",
		    "800": "http://fonts.gstatic.com/s/prozalibre/v2/LYjbdGHgj0k1DIQRyUEyyEKPUv_f.ttf",
		    "800italic": "http://fonts.gstatic.com/s/prozalibre/v2/LYjZdGHgj0k1DIQRyUEyyEotTH_ZeJQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Puritan",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/puritan/v9/845YNMgkAJ2VTtIo9Jo.ttf",
		    "italic": "http://fonts.gstatic.com/s/puritan/v9/845aNMgkAJ2VTtIoxJj6QQ.ttf",
		    "700": "http://fonts.gstatic.com/s/puritan/v9/845dNMgkAJ2VTtIozCbfYd4.ttf",
		    "700italic": "http://fonts.gstatic.com/s/puritan/v9/845fNMgkAJ2VTtIoxJjC_dup_w.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Purple Purse",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/purplepurse/v6/qWctB66gv53iAp-Vfs4My6qyeA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Quando",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/quando/v6/xMQVuFNaVa6YuW0pCw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Quantico",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/quantico/v7/rax-HiSdp9cPL3KIF4xs.ttf",
		    "italic": "http://fonts.gstatic.com/s/quantico/v7/rax4HiSdp9cPL3KIF7xuJDg.ttf",
		    "700": "http://fonts.gstatic.com/s/quantico/v7/rax5HiSdp9cPL3KIF7TQARha.ttf",
		    "700italic": "http://fonts.gstatic.com/s/quantico/v7/rax7HiSdp9cPL3KIF7xuHIRfu0o.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Quattrocento",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/quattrocento/v9/OZpEg_xvsDZQL_LKIF7q4jPHxA.ttf",
		    "700": "http://fonts.gstatic.com/s/quattrocento/v9/OZpbg_xvsDZQL_LKIF7q4jP_eE3fdw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Quattrocento Sans",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v10",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/quattrocentosans/v10/va9c4lja2NVIDdIAAoMR5MfuElaRB3zO.ttf",
		    "italic": "http://fonts.gstatic.com/s/quattrocentosans/v10/va9a4lja2NVIDdIAAoMR5MfuElaRB0zMt0o.ttf",
		    "700": "http://fonts.gstatic.com/s/quattrocentosans/v10/va9Z4lja2NVIDdIAAoMR5MfuElaRB0RykmrW.ttf",
		    "700italic": "http://fonts.gstatic.com/s/quattrocentosans/v10/va9X4lja2NVIDdIAAoMR5MfuElaRB0zMj_bTPXk.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Questrial",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/questrial/v7/QdVUSTchPBm7nuUeVf7EuQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Quicksand",
		   "category": "sans-serif",
		   "variants": [
		    "300",
		    "regular",
		    "500",
		    "700"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2018-10-08",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/quicksand/v8/6xKodSZaM9iE8KbpRA_pgHYoSA.ttf",
		    "regular": "http://fonts.gstatic.com/s/quicksand/v8/6xKtdSZaM9iE8KbpRA_RLA.ttf",
		    "500": "http://fonts.gstatic.com/s/quicksand/v8/6xKodSZaM9iE8KbpRA_p2HcoSA.ttf",
		    "700": "http://fonts.gstatic.com/s/quicksand/v8/6xKodSZaM9iE8KbpRA_pkHEoSA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Quintessential",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/quintessential/v5/fdNn9sOGq31Yjnh3qWU14DdtjY5w.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Qwigley",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/qwigley/v7/1cXzaU3UGJb5tGoCuVw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Racing Sans One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/racingsansone/v5/sykr-yRtm7EvTrXNxkv5jfKKyDCwLw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Radley",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v12",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/radley/v12/LYjDdGzinEIjCN19oA.ttf",
		    "italic": "http://fonts.gstatic.com/s/radley/v12/LYjBdGzinEIjCN1NogNA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Rajdhani",
		   "category": "sans-serif",
		   "variants": [
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/rajdhani/v7/LDI2apCSOBg7S-QT7pasEcOs.ttf",
		    "regular": "http://fonts.gstatic.com/s/rajdhani/v7/LDIxapCSOBg7S-QT7q4A.ttf",
		    "500": "http://fonts.gstatic.com/s/rajdhani/v7/LDI2apCSOBg7S-QT7pb0EMOs.ttf",
		    "600": "http://fonts.gstatic.com/s/rajdhani/v7/LDI2apCSOBg7S-QT7pbYF8Os.ttf",
		    "700": "http://fonts.gstatic.com/s/rajdhani/v7/LDI2apCSOBg7S-QT7pa8FsOs.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Rakkas",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "arabic",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2018-08-01",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/rakkas/v5/Qw3cZQlNHiblL3j_lg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Raleway",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "100italic",
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v12",
		   "lastModified": "2017-10-11",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/raleway/v12/1Ptsg8zYS_SKggPNwE4ISg.ttf",
		    "100italic": "http://fonts.gstatic.com/s/raleway/v12/1Ptqg8zYS_SKggPNyCgwLoFv.ttf",
		    "200": "http://fonts.gstatic.com/s/raleway/v12/1Ptrg8zYS_SKggPNwOIpaqE.ttf",
		    "200italic": "http://fonts.gstatic.com/s/raleway/v12/1Ptpg8zYS_SKggPNyCgwgqBPBQ.ttf",
		    "300": "http://fonts.gstatic.com/s/raleway/v12/1Ptrg8zYS_SKggPNwIYqaqE.ttf",
		    "300italic": "http://fonts.gstatic.com/s/raleway/v12/1Ptpg8zYS_SKggPNyCgw5qNPBQ.ttf",
		    "regular": "http://fonts.gstatic.com/s/raleway/v12/1Ptug8zYS_SKggPN-Co.ttf",
		    "italic": "http://fonts.gstatic.com/s/raleway/v12/1Ptsg8zYS_SKggPNyCgISg.ttf",
		    "500": "http://fonts.gstatic.com/s/raleway/v12/1Ptrg8zYS_SKggPNwN4raqE.ttf",
		    "500italic": "http://fonts.gstatic.com/s/raleway/v12/1Ptpg8zYS_SKggPNyCgwvqJPBQ.ttf",
		    "600": "http://fonts.gstatic.com/s/raleway/v12/1Ptrg8zYS_SKggPNwPIsaqE.ttf",
		    "600italic": "http://fonts.gstatic.com/s/raleway/v12/1Ptpg8zYS_SKggPNyCgwkqVPBQ.ttf",
		    "700": "http://fonts.gstatic.com/s/raleway/v12/1Ptrg8zYS_SKggPNwJYtaqE.ttf",
		    "700italic": "http://fonts.gstatic.com/s/raleway/v12/1Ptpg8zYS_SKggPNyCgw9qRPBQ.ttf",
		    "800": "http://fonts.gstatic.com/s/raleway/v12/1Ptrg8zYS_SKggPNwIouaqE.ttf",
		    "800italic": "http://fonts.gstatic.com/s/raleway/v12/1Ptpg8zYS_SKggPNyCgw6qdPBQ.ttf",
		    "900": "http://fonts.gstatic.com/s/raleway/v12/1Ptrg8zYS_SKggPNwK4vaqE.ttf",
		    "900italic": "http://fonts.gstatic.com/s/raleway/v12/1Ptpg8zYS_SKggPNyCgwzqZPBQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Raleway Dots",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/ralewaydots/v5/6NUR8FifJg6AfQvzpshgwJ8kyQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Ramabhadra",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin",
		    "telugu"
		   ],
		   "version": "v7",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/ramabhadra/v7/EYq2maBOwqRW9P1SQ83LehM.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Ramaraja",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin",
		    "telugu"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/ramaraja/v2/SlGTmQearpYAYG1CABIk.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Rambla",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/rambla/v5/snfrs0ip98hx6mr0Iw.ttf",
		    "italic": "http://fonts.gstatic.com/s/rambla/v5/snfps0ip98hx6mrEIbgK.ttf",
		    "700": "http://fonts.gstatic.com/s/rambla/v5/snfos0ip98hx6mrMn50qPg.ttf",
		    "700italic": "http://fonts.gstatic.com/s/rambla/v5/snfus0ip98hx6mrEIYC2O_l8.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Rammetto One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/rammettoone/v6/LhWiMV3HOfMbMetJG3lQDpp9Mg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Ranchers",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/ranchers/v5/zrfm0H3Lx-P2Xvs2AoDY.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Rancho",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/rancho/v8/46kulbzmXjLaqZRlbQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Ranga",
		   "category": "display",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/ranga/v3/C8ct4cYisGb28p6C.ttf",
		    "700": "http://fonts.gstatic.com/s/ranga/v3/C8cg4cYisGb28qY-AxgR.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Rasa",
		   "category": "serif",
		   "variants": [
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "gujarati"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/rasa/v3/xn7gYHIn1mWmdg52sgA.ttf",
		    "regular": "http://fonts.gstatic.com/s/rasa/v3/xn7vYHIn1mWmTqI.ttf",
		    "500": "http://fonts.gstatic.com/s/rasa/v3/xn7gYHIn1mWmdlZ3sgA.ttf",
		    "600": "http://fonts.gstatic.com/s/rasa/v3/xn7gYHIn1mWmdnpwsgA.ttf",
		    "700": "http://fonts.gstatic.com/s/rasa/v3/xn7gYHIn1mWmdh5xsgA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Rationale",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/rationale/v9/9XUnlJ92n0_JFxHIfHcsdg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Ravi Prakash",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin",
		    "telugu"
		   ],
		   "version": "v4",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/raviprakash/v4/gokpH6fsDkVrF9Bv9X8SOAKHmA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Redressed",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/redressed/v8/x3dickHUbrmJ7wMy9MsBfA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Reem Kufi",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "arabic",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2018-08-01",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/reemkufi/v5/2sDcZGJLip7W2J7v7wQDbw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Reenie Beanie",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/reeniebeanie/v8/z7NSdR76eDkaJKZJFkkjuvWxbP0.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Revalia",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/revalia/v5/WwkexPimBE2-4ZPEeVo.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Rhodium Libre",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/rhodiumlibre/v2/1q2AY5adA0tn_ukeHcQHqpx6pEQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Ribeye",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/ribeye/v6/L0x8DFMxk1MP9R3RvA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Ribeye Marrow",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/ribeyemarrow/v7/GFDsWApshnqMRO2JdtRZ2d0vEAw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Righteous",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/righteous/v6/1cXxaUPXBpj2rGoU7C9mjw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Risque",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/risque/v5/VdGfAZUfHosahXxoCQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Roboto",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "100italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "700",
		    "700italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "greek-ext",
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v18",
		   "lastModified": "2017-10-16",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/roboto/v18/KFOkCnqEu92Fr1MmgWxP.ttf",
		    "100italic": "http://fonts.gstatic.com/s/roboto/v18/KFOiCnqEu92Fr1Mu51QrIzc.ttf",
		    "300": "http://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmSU5vAw.ttf",
		    "300italic": "http://fonts.gstatic.com/s/roboto/v18/KFOjCnqEu92Fr1Mu51TjARc9.ttf",
		    "regular": "http://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Me5Q.ttf",
		    "italic": "http://fonts.gstatic.com/s/roboto/v18/KFOkCnqEu92Fr1Mu52xP.ttf",
		    "500": "http://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9vAw.ttf",
		    "500italic": "http://fonts.gstatic.com/s/roboto/v18/KFOjCnqEu92Fr1Mu51S7ABc9.ttf",
		    "700": "http://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlvAw.ttf",
		    "700italic": "http://fonts.gstatic.com/s/roboto/v18/KFOjCnqEu92Fr1Mu51TzBhc9.ttf",
		    "900": "http://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmYUtvAw.ttf",
		    "900italic": "http://fonts.gstatic.com/s/roboto/v18/KFOjCnqEu92Fr1Mu51TLBBc9.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Roboto Condensed",
		   "category": "sans-serif",
		   "variants": [
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "greek-ext",
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v16",
		   "lastModified": "2017-10-11",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/robotocondensed/v16/ieVi2ZhZI2eCN5jzbjEETS9weq8-33mZKCM.ttf",
		    "300italic": "http://fonts.gstatic.com/s/robotocondensed/v16/ieVg2ZhZI2eCN5jzbjEETS9weq8-19eDpCEYag.ttf",
		    "regular": "http://fonts.gstatic.com/s/robotocondensed/v16/ieVl2ZhZI2eCN5jzbjEETS9weq8-59U.ttf",
		    "italic": "http://fonts.gstatic.com/s/robotocondensed/v16/ieVj2ZhZI2eCN5jzbjEETS9weq8-19e7CA.ttf",
		    "700": "http://fonts.gstatic.com/s/robotocondensed/v16/ieVi2ZhZI2eCN5jzbjEETS9weq8-32meKCM.ttf",
		    "700italic": "http://fonts.gstatic.com/s/robotocondensed/v16/ieVg2ZhZI2eCN5jzbjEETS9weq8-19eDtCYYag.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Roboto Mono",
		   "category": "monospace",
		   "variants": [
		    "100",
		    "100italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "greek-ext",
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/robotomono/v5/L0x7DF4xlVMF-BfR8bXMIjAoq3o.ttf",
		    "100italic": "http://fonts.gstatic.com/s/robotomono/v5/L0xlDF4xlVMF-BfR8bXMIjhOkx6WXw.ttf",
		    "300": "http://fonts.gstatic.com/s/robotomono/v5/L0xkDF4xlVMF-BfR8bXMIjDgiVq2.ttf",
		    "300italic": "http://fonts.gstatic.com/s/robotomono/v5/L0xmDF4xlVMF-BfR8bXMIjhOk9a0f7o.ttf",
		    "regular": "http://fonts.gstatic.com/s/robotomono/v5/L0x5DF4xlVMF-BfR8bXMIghM.ttf",
		    "italic": "http://fonts.gstatic.com/s/robotomono/v5/L0x7DF4xlVMF-BfR8bXMIjhOq3o.ttf",
		    "500": "http://fonts.gstatic.com/s/robotomono/v5/L0xkDF4xlVMF-BfR8bXMIjC4iFq2.ttf",
		    "500italic": "http://fonts.gstatic.com/s/robotomono/v5/L0xmDF4xlVMF-BfR8bXMIjhOk461f7o.ttf",
		    "700": "http://fonts.gstatic.com/s/robotomono/v5/L0xkDF4xlVMF-BfR8bXMIjDwjlq2.ttf",
		    "700italic": "http://fonts.gstatic.com/s/robotomono/v5/L0xmDF4xlVMF-BfR8bXMIjhOk8azf7o.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Roboto Slab",
		   "category": "serif",
		   "variants": [
		    "100",
		    "300",
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "greek-ext",
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-11",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/robotoslab/v7/BngOUXZYTXPIvIBgJJSb6u-u5qA.ttf",
		    "300": "http://fonts.gstatic.com/s/robotoslab/v7/BngRUXZYTXPIvIBgJJSb6u9mxICB.ttf",
		    "regular": "http://fonts.gstatic.com/s/robotoslab/v7/BngMUXZYTXPIvIBgJJSb6tfK.ttf",
		    "700": "http://fonts.gstatic.com/s/robotoslab/v7/BngRUXZYTXPIvIBgJJSb6u92w4CB.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Rochester",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/rochester/v8/6ae-4KCqVa4Zy6Fif-Uy3w.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Rock Salt",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/rocksalt/v8/MwQ0bhv11fWD6QsAVOZbsA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Rokkitt",
		   "category": "serif",
		   "variants": [
		    "100",
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700",
		    "800",
		    "900"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v12",
		   "lastModified": "2017-10-10",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/rokkitt/v12/qFdG35qfgYFjGy5hmCWCcw.ttf",
		    "200": "http://fonts.gstatic.com/s/rokkitt/v12/qFdB35qfgYFjGy5hmImjU94.ttf",
		    "300": "http://fonts.gstatic.com/s/rokkitt/v12/qFdB35qfgYFjGy5hmO2gU94.ttf",
		    "regular": "http://fonts.gstatic.com/s/rokkitt/v12/qFdE35qfgYFjGy5hoEE.ttf",
		    "500": "http://fonts.gstatic.com/s/rokkitt/v12/qFdB35qfgYFjGy5hmLWhU94.ttf",
		    "600": "http://fonts.gstatic.com/s/rokkitt/v12/qFdB35qfgYFjGy5hmJmmU94.ttf",
		    "700": "http://fonts.gstatic.com/s/rokkitt/v12/qFdB35qfgYFjGy5hmP2nU94.ttf",
		    "800": "http://fonts.gstatic.com/s/rokkitt/v12/qFdB35qfgYFjGy5hmOGkU94.ttf",
		    "900": "http://fonts.gstatic.com/s/rokkitt/v12/qFdB35qfgYFjGy5hmMWlU94.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Romanesco",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/romanesco/v6/w8gYH2ozQOY7_r_J7mSn3A.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Ropa Sans",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/ropasans/v7/EYqxmaNOzLlWtsZSScyKWg.ttf",
		    "italic": "http://fonts.gstatic.com/s/ropasans/v7/EYq3maNOzLlWtsZSScy6WDNs.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Rosario",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v12",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/rosario/v12/xfux0WDhWW_fOEoY6FQ.ttf",
		    "italic": "http://fonts.gstatic.com/s/rosario/v12/xfuz0WDhWW_fOEoY2Fb9yA.ttf",
		    "700": "http://fonts.gstatic.com/s/rosario/v12/xfu00WDhWW_fOEoY0OjY6AY.ttf",
		    "700italic": "http://fonts.gstatic.com/s/rosario/v12/xfu20WDhWW_fOEoY2FbFdAPivA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Rosarivo",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/rosarivo/v5/PlI-Fl2lO6N9f8HaNAeC.ttf",
		    "italic": "http://fonts.gstatic.com/s/rosarivo/v5/PlI4Fl2lO6N9f8HaNDeA0Hw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Rouge Script",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/rougescript/v6/LYjFdGbiklMoCIQOw1Ep3S4PVA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Rozha One",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/rozhaone/v5/AlZy_zVFtYP12Zncg2khdQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Rubik",
		   "category": "sans-serif",
		   "variants": [
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "700",
		    "700italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "hebrew",
		    "latin-ext",
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v7",
		   "lastModified": "2017-11-21",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/rubik/v7/iJWHBXyIfDnIV7Fqj1ma.ttf",
		    "300italic": "http://fonts.gstatic.com/s/rubik/v7/iJWBBXyIfDnIV7nEldWY8WU.ttf",
		    "regular": "http://fonts.gstatic.com/s/rubik/v7/iJWKBXyIfDnIV4nG.ttf",
		    "italic": "http://fonts.gstatic.com/s/rubik/v7/iJWEBXyIfDnIV7nErXk.ttf",
		    "500": "http://fonts.gstatic.com/s/rubik/v7/iJWHBXyIfDnIV7Eyjlma.ttf",
		    "500italic": "http://fonts.gstatic.com/s/rubik/v7/iJWBBXyIfDnIV7nElY2Z8WU.ttf",
		    "700": "http://fonts.gstatic.com/s/rubik/v7/iJWHBXyIfDnIV7F6iFma.ttf",
		    "700italic": "http://fonts.gstatic.com/s/rubik/v7/iJWBBXyIfDnIV7nElcWf8WU.ttf",
		    "900": "http://fonts.gstatic.com/s/rubik/v7/iJWHBXyIfDnIV7FCilma.ttf",
		    "900italic": "http://fonts.gstatic.com/s/rubik/v7/iJWBBXyIfDnIV7nElf2d8WU.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Rubik Mono One",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/rubikmonoone/v6/UqyJK8kPP3hjw6ANTdfRk9YSN-8w.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Ruda",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "700",
		    "900"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/ruda/v9/k3kfo8YQJOpFmn8.ttf",
		    "700": "http://fonts.gstatic.com/s/ruda/v9/k3kQo8YQJOpFosM4Td4.ttf",
		    "900": "http://fonts.gstatic.com/s/ruda/v9/k3kQo8YQJOpFovs6Td4.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Rufina",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/rufina/v5/Yq6V-LyURyLy-aKyow.ttf",
		    "700": "http://fonts.gstatic.com/s/rufina/v5/Yq6W-LyURyLy-aKKHztAvA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Ruge Boogie",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/rugeboogie/v8/JIA3UVFwbHRF_GIWSMhKNROi.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Ruluko",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/ruluko/v5/xMQVuFNZVaODtm0pCw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Rum Raisin",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/rumraisin/v5/nwpRtKu3Ih8D5avB4h2uJ38.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Ruslan Display",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/ruslandisplay/v8/Gw6jwczl81XcIZuckK_e3Upfdzxr.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Russo One",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/russoone/v6/Z9XUDmZRWg6M1LvRYsH-yA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Ruthie",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/ruthie/v8/gokvH63sGkdqXuU9lA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Rye",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/rye/v5/r05XGLJT86YDFg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Sacramento",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sacramento/v5/buEzpo6gcdjy0EiZMBUG0Co.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Sahitya",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sahitya/v2/6qLAKZkOuhnuqlJAaSc.ttf",
		    "700": "http://fonts.gstatic.com/s/sahitya/v2/6qLFKZkOuhnuqlJAUZsqGyQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Sail",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sail/v8/DPEjYwiBxwYJFBQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Saira",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700",
		    "800",
		    "900"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-11-21",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/saira/v2/mem-Ya2wxmKQyNFETZY.ttf",
		    "200": "http://fonts.gstatic.com/s/saira/v2/mem9Ya2wxmKQyNHobLYV.ttf",
		    "300": "http://fonts.gstatic.com/s/saira/v2/mem9Ya2wxmKQyNGMb7YV.ttf",
		    "regular": "http://fonts.gstatic.com/s/saira/v2/memwYa2wxmKQyOkg.ttf",
		    "500": "http://fonts.gstatic.com/s/saira/v2/mem9Ya2wxmKQyNHUbrYV.ttf",
		    "600": "http://fonts.gstatic.com/s/saira/v2/mem9Ya2wxmKQyNH4abYV.ttf",
		    "700": "http://fonts.gstatic.com/s/saira/v2/mem9Ya2wxmKQyNGcaLYV.ttf",
		    "800": "http://fonts.gstatic.com/s/saira/v2/mem9Ya2wxmKQyNGAa7YV.ttf",
		    "900": "http://fonts.gstatic.com/s/saira/v2/mem9Ya2wxmKQyNGkarYV.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Saira Condensed",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700",
		    "800",
		    "900"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-11-21",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/sairacondensed/v3/EJRMQgErUN8XuHNEtX81i9TmEkrnwetA.ttf",
		    "200": "http://fonts.gstatic.com/s/sairacondensed/v3/EJRLQgErUN8XuHNEtX81i9TmEkrnbcpg8A.ttf",
		    "300": "http://fonts.gstatic.com/s/sairacondensed/v3/EJRLQgErUN8XuHNEtX81i9TmEkrnCclg8A.ttf",
		    "regular": "http://fonts.gstatic.com/s/sairacondensed/v3/EJROQgErUN8XuHNEtX81i9TmEkrfpQ.ttf",
		    "500": "http://fonts.gstatic.com/s/sairacondensed/v3/EJRLQgErUN8XuHNEtX81i9TmEkrnUchg8A.ttf",
		    "600": "http://fonts.gstatic.com/s/sairacondensed/v3/EJRLQgErUN8XuHNEtX81i9TmEkrnfc9g8A.ttf",
		    "700": "http://fonts.gstatic.com/s/sairacondensed/v3/EJRLQgErUN8XuHNEtX81i9TmEkrnGc5g8A.ttf",
		    "800": "http://fonts.gstatic.com/s/sairacondensed/v3/EJRLQgErUN8XuHNEtX81i9TmEkrnBc1g8A.ttf",
		    "900": "http://fonts.gstatic.com/s/sairacondensed/v3/EJRLQgErUN8XuHNEtX81i9TmEkrnIcxg8A.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Saira Extra Condensed",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700",
		    "800",
		    "900"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-11-21",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/sairaextracondensed/v3/-nFsOHYr-vcC7h8MklGBkrvmUG9rbpkisrTri0jx.ttf",
		    "200": "http://fonts.gstatic.com/s/sairaextracondensed/v3/-nFvOHYr-vcC7h8MklGBkrvmUG9rbpkisrTrJ2nR3A.ttf",
		    "300": "http://fonts.gstatic.com/s/sairaextracondensed/v3/-nFvOHYr-vcC7h8MklGBkrvmUG9rbpkisrTrQ2rR3A.ttf",
		    "regular": "http://fonts.gstatic.com/s/sairaextracondensed/v3/-nFiOHYr-vcC7h8MklGBkrvmUG9rbpkisrTT7w.ttf",
		    "500": "http://fonts.gstatic.com/s/sairaextracondensed/v3/-nFvOHYr-vcC7h8MklGBkrvmUG9rbpkisrTrG2vR3A.ttf",
		    "600": "http://fonts.gstatic.com/s/sairaextracondensed/v3/-nFvOHYr-vcC7h8MklGBkrvmUG9rbpkisrTrN2zR3A.ttf",
		    "700": "http://fonts.gstatic.com/s/sairaextracondensed/v3/-nFvOHYr-vcC7h8MklGBkrvmUG9rbpkisrTrU23R3A.ttf",
		    "800": "http://fonts.gstatic.com/s/sairaextracondensed/v3/-nFvOHYr-vcC7h8MklGBkrvmUG9rbpkisrTrT27R3A.ttf",
		    "900": "http://fonts.gstatic.com/s/sairaextracondensed/v3/-nFvOHYr-vcC7h8MklGBkrvmUG9rbpkisrTra2_R3A.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Saira Semi Condensed",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700",
		    "800",
		    "900"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-11-21",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/sairasemicondensed/v3/U9MN6c-2-nnJkHxyCjRcnMHcWVWV1cWRRXdvaOM.ttf",
		    "200": "http://fonts.gstatic.com/s/sairasemicondensed/v3/U9MM6c-2-nnJkHxyCjRcnMHcWVWV1cWRRXfDScMW.ttf",
		    "300": "http://fonts.gstatic.com/s/sairasemicondensed/v3/U9MM6c-2-nnJkHxyCjRcnMHcWVWV1cWRRXenSsMW.ttf",
		    "regular": "http://fonts.gstatic.com/s/sairasemicondensed/v3/U9MD6c-2-nnJkHxyCjRcnMHcWVWV1cWRRU8L.ttf",
		    "500": "http://fonts.gstatic.com/s/sairasemicondensed/v3/U9MM6c-2-nnJkHxyCjRcnMHcWVWV1cWRRXf_S8MW.ttf",
		    "600": "http://fonts.gstatic.com/s/sairasemicondensed/v3/U9MM6c-2-nnJkHxyCjRcnMHcWVWV1cWRRXfTTMMW.ttf",
		    "700": "http://fonts.gstatic.com/s/sairasemicondensed/v3/U9MM6c-2-nnJkHxyCjRcnMHcWVWV1cWRRXe3TcMW.ttf",
		    "800": "http://fonts.gstatic.com/s/sairasemicondensed/v3/U9MM6c-2-nnJkHxyCjRcnMHcWVWV1cWRRXerTsMW.ttf",
		    "900": "http://fonts.gstatic.com/s/sairasemicondensed/v3/U9MM6c-2-nnJkHxyCjRcnMHcWVWV1cWRRXePT8MW.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Salsa",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/salsa/v7/gNMKW3FiRpKj-imY.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Sanchez",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sanchez/v5/Ycm2sZJORluHnXbITm4.ttf",
		    "italic": "http://fonts.gstatic.com/s/sanchez/v5/Ycm0sZJORluHnXbIfmxR-A.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Sancreek",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sancreek/v8/pxiHypAnsdxUm159X7D-.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Sansita",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sansita/v2/QldONTRRphEb_-V7HBk.ttf",
		    "italic": "http://fonts.gstatic.com/s/sansita/v2/QldMNTRRphEb_-V7LBuxSQ.ttf",
		    "700": "http://fonts.gstatic.com/s/sansita/v2/QldLNTRRphEb_-V7JKWUaXk.ttf",
		    "700italic": "http://fonts.gstatic.com/s/sansita/v2/QldJNTRRphEb_-V7LBuJ9Xx-xg.ttf",
		    "800": "http://fonts.gstatic.com/s/sansita/v2/QldLNTRRphEb_-V7JLmXaXk.ttf",
		    "800italic": "http://fonts.gstatic.com/s/sansita/v2/QldJNTRRphEb_-V7LBuJ6X9-xg.ttf",
		    "900": "http://fonts.gstatic.com/s/sansita/v2/QldLNTRRphEb_-V7JJ2WaXk.ttf",
		    "900italic": "http://fonts.gstatic.com/s/sansita/v2/QldJNTRRphEb_-V7LBuJzX5-xg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Sarala",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sarala/v2/uK_y4riEZv4o1w9RCg.ttf",
		    "700": "http://fonts.gstatic.com/s/sarala/v2/uK_x4riEZv4o1w9ptjI3Og.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Sarina",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sarina/v6/-F6wfjF3ITQwasLhLg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Sarpanch",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "500",
		    "600",
		    "700",
		    "800",
		    "900"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sarpanch/v3/hESy6Xt4NCpRuk6Pzh2A.ttf",
		    "500": "http://fonts.gstatic.com/s/sarpanch/v3/hES16Xt4NCpRuk6PziV0ba7f.ttf",
		    "600": "http://fonts.gstatic.com/s/sarpanch/v3/hES16Xt4NCpRuk6PziVYaq7f.ttf",
		    "700": "http://fonts.gstatic.com/s/sarpanch/v3/hES16Xt4NCpRuk6PziU8a67f.ttf",
		    "800": "http://fonts.gstatic.com/s/sarpanch/v3/hES16Xt4NCpRuk6PziUgaK7f.ttf",
		    "900": "http://fonts.gstatic.com/s/sarpanch/v3/hES16Xt4NCpRuk6PziUEaa7f.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Satisfy",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/satisfy/v8/rP2Hp2yn6lkG50LoOZQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Sawarabi Gothic",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "japanese",
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v3",
		   "lastModified": "2018-08-13",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sawarabigothic/v3/x3d4ckfVaqqa-BEj-I9mE65u3k3NBQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Sawarabi Mincho",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "japanese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2018-08-13",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sawarabimincho/v3/8QIRdiDaitzr7brc8ahpxt6GcIJTLQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Scada",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/scada/v6/RLpxK5Pv5qumeWJo.ttf",
		    "italic": "http://fonts.gstatic.com/s/scada/v6/RLp_K5Pv5qumeVJqzTE.ttf",
		    "700": "http://fonts.gstatic.com/s/scada/v6/RLp8K5Pv5qumeVrU6BEg.ttf",
		    "700italic": "http://fonts.gstatic.com/s/scada/v6/RLp6K5Pv5qumeVJq9Y0lT1M.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Scheherazade",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "arabic",
		    "latin"
		   ],
		   "version": "v15",
		   "lastModified": "2018-08-01",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/scheherazade/v15/YA9Ur0yF4ETZN60keViq1kQgtw.ttf",
		    "700": "http://fonts.gstatic.com/s/scheherazade/v15/YA9Lr0yF4ETZN60keViq1kQYC7yMjg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Schoolbell",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/schoolbell/v8/92zQtBZWOrcgoe-fgnJIVxI.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Scope One",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/scopeone/v4/WBLnrEXKYFlGHrOKmGD1Ww.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Seaweed Script",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/seaweedscript/v5/bx6cNx6Tne2pxOATYE8C_Rsoe0WJ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Secular One",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "hebrew",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/secularone/v2/8QINdiTajsj_87rMuMdKypDl.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Sedgwick Ave",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-11-21",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sedgwickave/v3/uK_04rKEYuguzAcSYRdWTJq8Xg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Sedgwick Ave Display",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-11-21",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sedgwickavedisplay/v3/xfuu0XPgU3jZPUoUo3ScvmPi-NapQ8OxM2cz.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Sevillana",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sevillana/v6/KFOlCnWFscmDt1Bfiy1vAw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Seymour One",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/seymourone/v5/4iCp6Khla9xbjQpoWGGd0myI.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Shadows Into Light",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/shadowsintolight/v7/UqyNK9UOIntux_czAvDQx_ZcHqZXBNQDcg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Shadows Into Light Two",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/shadowsintolighttwo/v5/4iC86LVlZsRSjQhpWGedwyOoW-0A6_kpsyNmlAs.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Shanti",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/shanti/v9/t5thIREMM4uSDgzgUw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Share",
		   "category": "display",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/share/v8/i7dEIFliZjKNF5VN.ttf",
		    "italic": "http://fonts.gstatic.com/s/share/v8/i7dKIFliZjKNF6VPFr4.ttf",
		    "700": "http://fonts.gstatic.com/s/share/v8/i7dJIFliZjKNF63xM56-.ttf",
		    "700italic": "http://fonts.gstatic.com/s/share/v8/i7dPIFliZjKNF6VPLgK7UEY.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Share Tech",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sharetech/v7/7cHtv4Uyi5K0OeZ7bohUwHo.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Share Tech Mono",
		   "category": "monospace",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sharetechmono/v7/J7aHnp1uDWRBEqV98dVQztYldFc7pA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Shojumaru",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/shojumaru/v5/rax_HiWfutkLLnaKCtlMBA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Short Stack",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/shortstack/v7/bMrzmS2X6p0jZC6EcmPFX-SS.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Shrikhand",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "gujarati"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/shrikhand/v3/a8IbNovtLWfR7T7bMJwbBA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Siemreap",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "khmer"
		   ],
		   "version": "v10",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/siemreap/v10/Gg82N5oFbgLvHAfNl2Yb.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Sigmar One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sigmarone/v8/co3DmWZ8kjZuErj9Ta3dk6M.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Signika",
		   "category": "sans-serif",
		   "variants": [
		    "300",
		    "regular",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/signika/v8/vEFU2_JTCgwQ5ejvE_oEI3A.ttf",
		    "regular": "http://fonts.gstatic.com/s/signika/v8/vEFR2_JTCgwQ5ejvK1Y.ttf",
		    "600": "http://fonts.gstatic.com/s/signika/v8/vEFU2_JTCgwQ5ejvE44CI3A.ttf",
		    "700": "http://fonts.gstatic.com/s/signika/v8/vEFU2_JTCgwQ5ejvE-oDI3A.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Signika Negative",
		   "category": "sans-serif",
		   "variants": [
		    "300",
		    "regular",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2018-10-08",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/signikanegative/v8/E217_cfngu7HiRpPX3ZpNE4kY5zKal6DipE.ttf",
		    "regular": "http://fonts.gstatic.com/s/signikanegative/v8/E218_cfngu7HiRpPX3ZpNE4kY5zKUvI.ttf",
		    "600": "http://fonts.gstatic.com/s/signikanegative/v8/E217_cfngu7HiRpPX3ZpNE4kY5zKaiqFipE.ttf",
		    "700": "http://fonts.gstatic.com/s/signikanegative/v8/E217_cfngu7HiRpPX3ZpNE4kY5zKak6EipE.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Simonetta",
		   "category": "display",
		   "variants": [
		    "regular",
		    "italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/simonetta/v7/x3dickHVYrCU5BU15c4BfA.ttf",
		    "italic": "http://fonts.gstatic.com/s/simonetta/v7/x3dkckHVYrCU5BU15c4xfvoG.ttf",
		    "900": "http://fonts.gstatic.com/s/simonetta/v7/x3dnckHVYrCU5BU15c45-N0mtw.ttf",
		    "900italic": "http://fonts.gstatic.com/s/simonetta/v7/x3d5ckHVYrCU5BU15c4xfsKCsA7t.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Sintony",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sintony/v5/XoHm2YDqR7-98cVUITQ.ttf",
		    "700": "http://fonts.gstatic.com/s/sintony/v5/XoHj2YDqR7-98cVUGYgIn9c.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Sirin Stencil",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sirinstencil/v6/mem4YaWwznmLx-lzGfN7MdRydcg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Six Caps",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sixcaps/v8/6ae_4KGrU7VR7bNmabcS.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Skranji",
		   "category": "display",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/skranji/v5/OZpDg_dtriVFNerMYzs.ttf",
		    "700": "http://fonts.gstatic.com/s/skranji/v5/OZpGg_dtriVFNerMW4eBtlw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Slabo 13px",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/slabo13px/v5/11hEGp_azEvXZUdSBzzRcKc.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Slabo 27px",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2017-10-11",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/slabo27px/v4/mFT0WbgBwKPR_Z4hGN2qsxg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Slackey",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/slackey/v8/N0bV2SdQO-5yM0-dKlQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Smokum",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/smokum/v8/TK3iWkUbAhopmrdGHg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Smythe",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/smythe/v8/MwQ3bhT01--coT1BOA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Sniglet",
		   "category": "display",
		   "variants": [
		    "regular",
		    "800"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sniglet/v9/cIf9MaFLtkE3UjaJxCk.ttf",
		    "800": "http://fonts.gstatic.com/s/sniglet/v9/cIf4MaFLtkE3UjaJ_ImHRGE.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Snippet",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/snippet/v7/bWt47f7XfQH9Gupu2v8.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Snowburst One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/snowburstone/v5/MQpS-WezKdujBsXY3B7I-UT7eZ8.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Sofadi One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sofadione/v6/JIA2UVBxdnVBuElZaMFGcDM.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Sofia",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sofia/v6/8QIHdirahM3j_vu-.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Song Myung",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "korean",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2018-08-29",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/songmyung/v4/1cX2aUDWAJH5-EIC7DIhr1E.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Sonsie One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sonsieone/v6/PbymFmP_EAnPqbKaoc18YVs.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Sorts Mill Goudy",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sortsmillgoudy/v7/Qw3GZR9MED_6PSuS_50nEaVrfzgEXH0.ttf",
		    "italic": "http://fonts.gstatic.com/s/sortsmillgoudy/v7/Qw3AZR9MED_6PSuS_50nEaVrfzgEbH8Eig.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Source Code Pro",
		   "category": "monospace",
		   "variants": [
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700",
		    "900"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2018-10-08",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/sourcecodepro/v8/HI_XiYsKILxRpg3hIP6sJ7fM7Pqt8srztA.ttf",
		    "300": "http://fonts.gstatic.com/s/sourcecodepro/v8/HI_XiYsKILxRpg3hIP6sJ7fM7PqtlsnztA.ttf",
		    "regular": "http://fonts.gstatic.com/s/sourcecodepro/v8/HI_SiYsKILxRpg3hIP6sJ7fM7PqVOg.ttf",
		    "500": "http://fonts.gstatic.com/s/sourcecodepro/v8/HI_XiYsKILxRpg3hIP6sJ7fM7PqtzsjztA.ttf",
		    "600": "http://fonts.gstatic.com/s/sourcecodepro/v8/HI_XiYsKILxRpg3hIP6sJ7fM7Pqt4s_ztA.ttf",
		    "700": "http://fonts.gstatic.com/s/sourcecodepro/v8/HI_XiYsKILxRpg3hIP6sJ7fM7Pqths7ztA.ttf",
		    "900": "http://fonts.gstatic.com/s/sourcecodepro/v8/HI_XiYsKILxRpg3hIP6sJ7fM7PqtvszztA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Source Sans Pro",
		   "category": "sans-serif",
		   "variants": [
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "greek-ext",
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v11",
		   "lastModified": "2017-10-11",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/sourcesanspro/v11/6xKydSBYKcSV-LCoeQqfX1RYOo3i94_AkA.ttf",
		    "200italic": "http://fonts.gstatic.com/s/sourcesanspro/v11/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZYokRdr.ttf",
		    "300": "http://fonts.gstatic.com/s/sourcesanspro/v11/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zAkA.ttf",
		    "300italic": "http://fonts.gstatic.com/s/sourcesanspro/v11/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkhdr.ttf",
		    "regular": "http://fonts.gstatic.com/s/sourcesanspro/v11/6xK3dSBYKcSV-LCoeQqfX1RYOo3aPw.ttf",
		    "italic": "http://fonts.gstatic.com/s/sourcesanspro/v11/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPa7g.ttf",
		    "600": "http://fonts.gstatic.com/s/sourcesanspro/v11/6xKydSBYKcSV-LCoeQqfX1RYOo3i54rAkA.ttf",
		    "600italic": "http://fonts.gstatic.com/s/sourcesanspro/v11/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZY4lBdr.ttf",
		    "700": "http://fonts.gstatic.com/s/sourcesanspro/v11/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vAkA.ttf",
		    "700italic": "http://fonts.gstatic.com/s/sourcesanspro/v11/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZclRdr.ttf",
		    "900": "http://fonts.gstatic.com/s/sourcesanspro/v11/6xKydSBYKcSV-LCoeQqfX1RYOo3iu4nAkA.ttf",
		    "900italic": "http://fonts.gstatic.com/s/sourcesanspro/v11/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZklxdr.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Source Serif Pro",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sourceserifpro/v5/neIQzD-0qpwxpaWvjeD0X88SAOeaiXM.ttf",
		    "600": "http://fonts.gstatic.com/s/sourceserifpro/v5/neIXzD-0qpwxpaWvjeD0X88SAOeasasahSs.ttf",
		    "700": "http://fonts.gstatic.com/s/sourceserifpro/v5/neIXzD-0qpwxpaWvjeD0X88SAOeasc8bhSs.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Space Mono",
		   "category": "monospace",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/spacemono/v3/i7dPIFZifjKcF5UAWdDRUEY.ttf",
		    "italic": "http://fonts.gstatic.com/s/spacemono/v3/i7dNIFZifjKcF5UAWdDRYER8QA.ttf",
		    "700": "http://fonts.gstatic.com/s/spacemono/v3/i7dMIFZifjKcF5UAWdDRaPpZYFI.ttf",
		    "700italic": "http://fonts.gstatic.com/s/spacemono/v3/i7dSIFZifjKcF5UAWdDRYERE_FeaGw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Special Elite",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/specialelite/v8/XLYgIZbkc4JPUL5CVArUVL0nhnc.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Spectral",
		   "category": "serif",
		   "variants": [
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v4",
		   "lastModified": "2017-11-21",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/spectral/v4/rnCs-xNNww_2s0amA9v2s13G.ttf",
		    "200italic": "http://fonts.gstatic.com/s/spectral/v4/rnCu-xNNww_2s0amA9M8qrXHafM.ttf",
		    "300": "http://fonts.gstatic.com/s/spectral/v4/rnCs-xNNww_2s0amA9uSsF3G.ttf",
		    "300italic": "http://fonts.gstatic.com/s/spectral/v4/rnCu-xNNww_2s0amA9M8qtHEafM.ttf",
		    "regular": "http://fonts.gstatic.com/s/spectral/v4/rnCr-xNNww_2s0amA-M-.ttf",
		    "italic": "http://fonts.gstatic.com/s/spectral/v4/rnCt-xNNww_2s0amA9M8kn0.ttf",
		    "500": "http://fonts.gstatic.com/s/spectral/v4/rnCs-xNNww_2s0amA9vKsV3G.ttf",
		    "500italic": "http://fonts.gstatic.com/s/spectral/v4/rnCu-xNNww_2s0amA9M8qonFafM.ttf",
		    "600": "http://fonts.gstatic.com/s/spectral/v4/rnCs-xNNww_2s0amA9vmtl3G.ttf",
		    "600italic": "http://fonts.gstatic.com/s/spectral/v4/rnCu-xNNww_2s0amA9M8qqXCafM.ttf",
		    "700": "http://fonts.gstatic.com/s/spectral/v4/rnCs-xNNww_2s0amA9uCt13G.ttf",
		    "700italic": "http://fonts.gstatic.com/s/spectral/v4/rnCu-xNNww_2s0amA9M8qsHDafM.ttf",
		    "800": "http://fonts.gstatic.com/s/spectral/v4/rnCs-xNNww_2s0amA9uetF3G.ttf",
		    "800italic": "http://fonts.gstatic.com/s/spectral/v4/rnCu-xNNww_2s0amA9M8qt3AafM.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Spectral SC",
		   "category": "serif",
		   "variants": [
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v3",
		   "lastModified": "2018-10-08",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/spectralsc/v3/Ktk0ALCRZonmalTgyPmRfs1qwkTX.ttf",
		    "200italic": "http://fonts.gstatic.com/s/spectralsc/v3/Ktk2ALCRZonmalTgyPmRfsWg26zWN4M.ttf",
		    "300": "http://fonts.gstatic.com/s/spectralsc/v3/Ktk0ALCRZonmalTgyPmRfs0OwUTX.ttf",
		    "300italic": "http://fonts.gstatic.com/s/spectralsc/v3/Ktk2ALCRZonmalTgyPmRfsWg28jVN4M.ttf",
		    "regular": "http://fonts.gstatic.com/s/spectralsc/v3/KtkpALCRZonmalTgyPmRfvWi.ttf",
		    "italic": "http://fonts.gstatic.com/s/spectralsc/v3/KtkrALCRZonmalTgyPmRfsWg42Q.ttf",
		    "500": "http://fonts.gstatic.com/s/spectralsc/v3/Ktk0ALCRZonmalTgyPmRfs1WwETX.ttf",
		    "500italic": "http://fonts.gstatic.com/s/spectralsc/v3/Ktk2ALCRZonmalTgyPmRfsWg25DUN4M.ttf",
		    "600": "http://fonts.gstatic.com/s/spectralsc/v3/Ktk0ALCRZonmalTgyPmRfs16x0TX.ttf",
		    "600italic": "http://fonts.gstatic.com/s/spectralsc/v3/Ktk2ALCRZonmalTgyPmRfsWg27zTN4M.ttf",
		    "700": "http://fonts.gstatic.com/s/spectralsc/v3/Ktk0ALCRZonmalTgyPmRfs0exkTX.ttf",
		    "700italic": "http://fonts.gstatic.com/s/spectralsc/v3/Ktk2ALCRZonmalTgyPmRfsWg29jSN4M.ttf",
		    "800": "http://fonts.gstatic.com/s/spectralsc/v3/Ktk0ALCRZonmalTgyPmRfs0CxUTX.ttf",
		    "800italic": "http://fonts.gstatic.com/s/spectralsc/v3/Ktk2ALCRZonmalTgyPmRfsWg28TRN4M.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Spicy Rice",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/spicyrice/v6/uK_24rSEd-Uqwk4jY1RyGv8.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Spinnaker",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/spinnaker/v9/w8gYH2oyX-I0_rvR6Hmn3A.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Spirax",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/spirax/v6/buE3poKgYNLy0F3cXg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Squada One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/squadaone/v6/BCasqZ8XsOrx4mcOk6MtWaA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Sree Krushnadevaraya",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin",
		    "telugu"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sreekrushnadevaraya/v5/R70FjzQeifmPepmyQQjQ9kvwMkWYPfTA_EWb.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Sriracha",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "thai",
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sriracha/v2/0nkrC9D4IuYBgWcI9ObY.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Srisakdi",
		   "category": "display",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "thai",
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2018-11-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/srisakdi/v2/yMJRMIlvdpDbkB0A-jq8fSx5i814.ttf",
		    "700": "http://fonts.gstatic.com/s/srisakdi/v2/yMJWMIlvdpDbkB0A-gIAUghxoNFxW0Hz.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Stalemate",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/stalemate/v5/taiIGmZ_EJq97-UfkZRpug.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Stalinist One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v17",
		   "lastModified": "2018-08-01",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/stalinistone/v17/MQpS-WezM9W4Dd7D3B7I-UT7eZ8.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Stardos Stencil",
		   "category": "display",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/stardosstencil/v7/X7n94bcuGPC8hrvEOHXOgaKCc2TR7w.ttf",
		    "700": "http://fonts.gstatic.com/s/stardosstencil/v7/X7n44bcuGPC8hrvEOHXOgaKCc2TpU3tTvg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Stint Ultra Condensed",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/stintultracondensed/v6/-W_gXIrsVjjeyEnPC45qD2NoFPtBE0xCh2A-qg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Stint Ultra Expanded",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/stintultraexpanded/v5/CSRg4yNNh-GbW3o3JkwoDcdvMKMf0oBAd0qo.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Stoke",
		   "category": "serif",
		   "variants": [
		    "300",
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/stoke/v7/z7NXdRb7aTMfKNvFVgxC.ttf",
		    "regular": "http://fonts.gstatic.com/s/stoke/v7/z7NadRb7aTMfKONp.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Strait",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/strait/v5/DtViJxy6WaEr1LZzeA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Stylish",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "korean",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2018-08-29",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/stylish/v4/m8JSjfhPYriQkk7-fo0.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Sue Ellen Francisco",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sueellenfrancisco/v8/wXK3E20CsoJ9j1DDkjHcQ5ZL8xRaxru9roo.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Suez One",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "hebrew",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/suezone/v2/taiJGmd_EZ6rqscQgNFJ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Sumana",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sumana/v2/4UaDrE5TqRBjGj-G8A.ttf",
		    "700": "http://fonts.gstatic.com/s/sumana/v2/4UaArE5TqRBjGj--TDfG5w.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Sunflower",
		   "category": "sans-serif",
		   "variants": [
		    "300",
		    "500",
		    "700"
		   ],
		   "subsets": [
		    "korean",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2018-08-29",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/sunflower/v5/RWmPoKeF8fUjqIj7Vc-06MfiqQ.ttf",
		    "500": "http://fonts.gstatic.com/s/sunflower/v5/RWmPoKeF8fUjqIj7Vc-0sMbiqQ.ttf",
		    "700": "http://fonts.gstatic.com/s/sunflower/v5/RWmPoKeF8fUjqIj7Vc-0-MDiqQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Sunshiney",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sunshiney/v8/LDIwapGTLBwsS-wT4vcgEw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Supermercado One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/supermercadoone/v7/OpNXnpQWg8jc_xps_Gi14kVVEXOn60Y.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Sura",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/sura/v2/SZc23FL5PbyzFf4.ttf",
		    "700": "http://fonts.gstatic.com/s/sura/v2/SZc53FL5PbyzLUJ7fz0.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Suranna",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin",
		    "telugu"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/suranna/v5/gokuH6ztGkFjWe58tBQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Suravaram",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin",
		    "telugu"
		   ],
		   "version": "v4",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/suravaram/v4/_gP61R_usiY7SCym4xIAiw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Suwannaphum",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "khmer"
		   ],
		   "version": "v11",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/suwannaphum/v11/jAnCgHV7GtDvc8jbe8hXXIWl.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Swanky and Moo Moo",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/swankyandmoomoo/v7/flUlRrKz24IuWVI_WJYTYcqbEsMUZ3kUtQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Syncopate",
		   "category": "sans-serif",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/syncopate/v9/pe0sMIuPIYBCpEV5eFdyAg.ttf",
		    "700": "http://fonts.gstatic.com/s/syncopate/v9/pe0pMIuPIYBCpEV5eFdKvtKaAw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Tajawal",
		   "category": "sans-serif",
		   "variants": [
		    "200",
		    "300",
		    "regular",
		    "500",
		    "700",
		    "800",
		    "900"
		   ],
		   "subsets": [
		    "arabic",
		    "latin"
		   ],
		   "version": "v1",
		   "lastModified": "2018-08-29",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/tajawal/v1/Iurf6YBj_oCad4k1l_6gLrY.ttf",
		    "300": "http://fonts.gstatic.com/s/tajawal/v1/Iurf6YBj_oCad4k1l5qjLrY.ttf",
		    "regular": "http://fonts.gstatic.com/s/tajawal/v1/Iura6YBj_oCad4k1rzY.ttf",
		    "500": "http://fonts.gstatic.com/s/tajawal/v1/Iurf6YBj_oCad4k1l8KiLrY.ttf",
		    "700": "http://fonts.gstatic.com/s/tajawal/v1/Iurf6YBj_oCad4k1l4qkLrY.ttf",
		    "800": "http://fonts.gstatic.com/s/tajawal/v1/Iurf6YBj_oCad4k1l5anLrY.ttf",
		    "900": "http://fonts.gstatic.com/s/tajawal/v1/Iurf6YBj_oCad4k1l7KmLrY.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Tangerine",
		   "category": "handwriting",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/tangerine/v9/IurY6Y5j_oScZZow4VOBDg.ttf",
		    "700": "http://fonts.gstatic.com/s/tangerine/v9/Iurd6Y5j_oScZZow4VO5srNpjA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Taprom",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "khmer"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/taprom/v9/UcCn3F82JHycULbFQw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Tauri",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/tauri/v6/TwMA-IISS0AM3IpV.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Taviraj",
		   "category": "serif",
		   "variants": [
		    "100",
		    "100italic",
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "thai",
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/taviraj/v3/ahcbv8Cj3ylylTXzRIorVw.ttf",
		    "100italic": "http://fonts.gstatic.com/s/taviraj/v3/ahcdv8Cj3ylylTXzTOwTM8lx.ttf",
		    "200": "http://fonts.gstatic.com/s/taviraj/v3/ahccv8Cj3ylylTXzRCYKd-k.ttf",
		    "200italic": "http://fonts.gstatic.com/s/taviraj/v3/ahcev8Cj3ylylTXzTOwTn-hRhQ.ttf",
		    "300": "http://fonts.gstatic.com/s/taviraj/v3/ahccv8Cj3ylylTXzREIJd-k.ttf",
		    "300italic": "http://fonts.gstatic.com/s/taviraj/v3/ahcev8Cj3ylylTXzTOwT--tRhQ.ttf",
		    "regular": "http://fonts.gstatic.com/s/taviraj/v3/ahcZv8Cj3ylylTXzfO4.ttf",
		    "italic": "http://fonts.gstatic.com/s/taviraj/v3/ahcbv8Cj3ylylTXzTOwrVw.ttf",
		    "500": "http://fonts.gstatic.com/s/taviraj/v3/ahccv8Cj3ylylTXzRBoId-k.ttf",
		    "500italic": "http://fonts.gstatic.com/s/taviraj/v3/ahcev8Cj3ylylTXzTOwTo-pRhQ.ttf",
		    "600": "http://fonts.gstatic.com/s/taviraj/v3/ahccv8Cj3ylylTXzRDYPd-k.ttf",
		    "600italic": "http://fonts.gstatic.com/s/taviraj/v3/ahcev8Cj3ylylTXzTOwTj-1RhQ.ttf",
		    "700": "http://fonts.gstatic.com/s/taviraj/v3/ahccv8Cj3ylylTXzRFIOd-k.ttf",
		    "700italic": "http://fonts.gstatic.com/s/taviraj/v3/ahcev8Cj3ylylTXzTOwT6-xRhQ.ttf",
		    "800": "http://fonts.gstatic.com/s/taviraj/v3/ahccv8Cj3ylylTXzRE4Nd-k.ttf",
		    "800italic": "http://fonts.gstatic.com/s/taviraj/v3/ahcev8Cj3ylylTXzTOwT9-9RhQ.ttf",
		    "900": "http://fonts.gstatic.com/s/taviraj/v3/ahccv8Cj3ylylTXzRGoMd-k.ttf",
		    "900italic": "http://fonts.gstatic.com/s/taviraj/v3/ahcev8Cj3ylylTXzTOwT0-5RhQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Teko",
		   "category": "sans-serif",
		   "variants": [
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/teko/v7/LYjCdG7kmE0gdQhfgCM.ttf",
		    "regular": "http://fonts.gstatic.com/s/teko/v7/LYjNdG7kmE0gTaQ.ttf",
		    "500": "http://fonts.gstatic.com/s/teko/v7/LYjCdG7kmE0gdVBegCM.ttf",
		    "600": "http://fonts.gstatic.com/s/teko/v7/LYjCdG7kmE0gdXxZgCM.ttf",
		    "700": "http://fonts.gstatic.com/s/teko/v7/LYjCdG7kmE0gdRhYgCM.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Telex",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/telex/v6/ieVw2Y1fKWmIO9fT.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Tenali Ramakrishna",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin",
		    "telugu"
		   ],
		   "version": "v4",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/tenaliramakrishna/v4/raxgHj6Yt9gAN3LLKs0BZVMo8jmwn1-8KA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Tenor Sans",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v9",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/tenorsans/v9/bx6ANxqUneKx06UkIXISr3I.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Text Me One",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/textmeone/v5/i7dOIFdlayuLUvgoFvHQFWZc.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "The Girl Next Door",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/thegirlnextdoor/v8/pe0zMJCIMIsBjFxqYBIcZ6_OI5oFHCYIVw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Tienne",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "700",
		    "900"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v10",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/tienne/v10/AYCKpX7pe9YCRP0LkA.ttf",
		    "700": "http://fonts.gstatic.com/s/tienne/v10/AYCJpX7pe9YCRP0zLGzjQA.ttf",
		    "900": "http://fonts.gstatic.com/s/tienne/v10/AYCJpX7pe9YCRP0zFG7jQA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Tillana",
		   "category": "handwriting",
		   "variants": [
		    "regular",
		    "500",
		    "600",
		    "700",
		    "800"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/tillana/v3/VuJxdNvf35P4qJ1OeKY.ttf",
		    "500": "http://fonts.gstatic.com/s/tillana/v3/VuJ0dNvf35P4qJ1OQFL-HIk.ttf",
		    "600": "http://fonts.gstatic.com/s/tillana/v3/VuJ0dNvf35P4qJ1OQH75HIk.ttf",
		    "700": "http://fonts.gstatic.com/s/tillana/v3/VuJ0dNvf35P4qJ1OQBr4HIk.ttf",
		    "800": "http://fonts.gstatic.com/s/tillana/v3/VuJ0dNvf35P4qJ1OQAb7HIk.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Timmana",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin",
		    "telugu"
		   ],
		   "version": "v2",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/timmana/v2/6xKvdShfL9yK-rvpCms.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Tinos",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "greek-ext",
		    "vietnamese",
		    "hebrew",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v11",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/tinos/v11/buE4poGnedXvwgX8.ttf",
		    "italic": "http://fonts.gstatic.com/s/tinos/v11/buE2poGnedXvwjX-fmE.ttf",
		    "700": "http://fonts.gstatic.com/s/tinos/v11/buE1poGnedXvwj1AW0Fp.ttf",
		    "700italic": "http://fonts.gstatic.com/s/tinos/v11/buEzpoGnedXvwjX-Rt1s0Co.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Titan One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/titanone/v5/mFTzWbsGxbbS_J5cQcjykw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Titillium Web",
		   "category": "sans-serif",
		   "variants": [
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "900"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-11",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/titilliumweb/v6/NaPDcZTIAOhVxoMyOr9n_E7ffAzHKIw.ttf",
		    "200italic": "http://fonts.gstatic.com/s/titilliumweb/v6/NaPFcZTIAOhVxoMyOr9n_E7fdMbewI1zZg.ttf",
		    "300": "http://fonts.gstatic.com/s/titilliumweb/v6/NaPDcZTIAOhVxoMyOr9n_E7ffGjEKIw.ttf",
		    "300italic": "http://fonts.gstatic.com/s/titilliumweb/v6/NaPFcZTIAOhVxoMyOr9n_E7fdMbepI5zZg.ttf",
		    "regular": "http://fonts.gstatic.com/s/titilliumweb/v6/NaPecZTIAOhVxoMyOr9n_E7fRMQ.ttf",
		    "italic": "http://fonts.gstatic.com/s/titilliumweb/v6/NaPAcZTIAOhVxoMyOr9n_E7fdMbmCA.ttf",
		    "600": "http://fonts.gstatic.com/s/titilliumweb/v6/NaPDcZTIAOhVxoMyOr9n_E7ffBzCKIw.ttf",
		    "600italic": "http://fonts.gstatic.com/s/titilliumweb/v6/NaPFcZTIAOhVxoMyOr9n_E7fdMbe0IhzZg.ttf",
		    "700": "http://fonts.gstatic.com/s/titilliumweb/v6/NaPDcZTIAOhVxoMyOr9n_E7ffHjDKIw.ttf",
		    "700italic": "http://fonts.gstatic.com/s/titilliumweb/v6/NaPFcZTIAOhVxoMyOr9n_E7fdMbetIlzZg.ttf",
		    "900": "http://fonts.gstatic.com/s/titilliumweb/v6/NaPDcZTIAOhVxoMyOr9n_E7ffEDBKIw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Trade Winds",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/tradewinds/v6/AYCPpXPpYNIIT7h8-QenM3Jq.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Trirong",
		   "category": "serif",
		   "variants": [
		    "100",
		    "100italic",
		    "200",
		    "200italic",
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "800",
		    "800italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "thai",
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/trirong/v3/7r3EqXNgp8wxdOdOl-go3Q.ttf",
		    "100italic": "http://fonts.gstatic.com/s/trirong/v3/7r3CqXNgp8wxdOdOn44QuY5h.ttf",
		    "200": "http://fonts.gstatic.com/s/trirong/v3/7r3DqXNgp8wxdOdOl0QJ_a4.ttf",
		    "200italic": "http://fonts.gstatic.com/s/trirong/v3/7r3BqXNgp8wxdOdOn44QFa9B4g.ttf",
		    "300": "http://fonts.gstatic.com/s/trirong/v3/7r3DqXNgp8wxdOdOlyAK_a4.ttf",
		    "300italic": "http://fonts.gstatic.com/s/trirong/v3/7r3BqXNgp8wxdOdOn44QcaxB4g.ttf",
		    "regular": "http://fonts.gstatic.com/s/trirong/v3/7r3GqXNgp8wxdOdOr4w.ttf",
		    "italic": "http://fonts.gstatic.com/s/trirong/v3/7r3EqXNgp8wxdOdOn44o3Q.ttf",
		    "500": "http://fonts.gstatic.com/s/trirong/v3/7r3DqXNgp8wxdOdOl3gL_a4.ttf",
		    "500italic": "http://fonts.gstatic.com/s/trirong/v3/7r3BqXNgp8wxdOdOn44QKa1B4g.ttf",
		    "600": "http://fonts.gstatic.com/s/trirong/v3/7r3DqXNgp8wxdOdOl1QM_a4.ttf",
		    "600italic": "http://fonts.gstatic.com/s/trirong/v3/7r3BqXNgp8wxdOdOn44QBapB4g.ttf",
		    "700": "http://fonts.gstatic.com/s/trirong/v3/7r3DqXNgp8wxdOdOlzAN_a4.ttf",
		    "700italic": "http://fonts.gstatic.com/s/trirong/v3/7r3BqXNgp8wxdOdOn44QYatB4g.ttf",
		    "800": "http://fonts.gstatic.com/s/trirong/v3/7r3DqXNgp8wxdOdOlywO_a4.ttf",
		    "800italic": "http://fonts.gstatic.com/s/trirong/v3/7r3BqXNgp8wxdOdOn44QfahB4g.ttf",
		    "900": "http://fonts.gstatic.com/s/trirong/v3/7r3DqXNgp8wxdOdOlwgP_a4.ttf",
		    "900italic": "http://fonts.gstatic.com/s/trirong/v3/7r3BqXNgp8wxdOdOn44QWalB4g.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Trocchi",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/trocchi/v6/qWcqB6WkuIDxDZLcDrs.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Trochut",
		   "category": "display",
		   "variants": [
		    "regular",
		    "italic",
		    "700"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/trochut/v5/CHyjV-fDDlP9bDIw5nQ.ttf",
		    "italic": "http://fonts.gstatic.com/s/trochut/v5/CHyhV-fDDlP9bDIw1naCeQ.ttf",
		    "700": "http://fonts.gstatic.com/s/trochut/v5/CHymV-fDDlP9bDIw3sinWVo.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Trykker",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/trykker/v6/KtktALyWZJXudUPzhNk.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Tulpen One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/tulpenone/v7/dFa6ZfeC474skLgesc0CWj0.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Ubuntu",
		   "category": "sans-serif",
		   "variants": [
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "greek-ext",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v12",
		   "lastModified": "2018-08-01",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/ubuntu/v12/4iCv6KVjbNBYlgoC1CzTtw.ttf",
		    "300italic": "http://fonts.gstatic.com/s/ubuntu/v12/4iCp6KVjbNBYlgoKejZftWyI.ttf",
		    "regular": "http://fonts.gstatic.com/s/ubuntu/v12/4iCs6KVjbNBYlgo6eA.ttf",
		    "italic": "http://fonts.gstatic.com/s/ubuntu/v12/4iCu6KVjbNBYlgoKeg7z.ttf",
		    "500": "http://fonts.gstatic.com/s/ubuntu/v12/4iCv6KVjbNBYlgoCjC3Ttw.ttf",
		    "500italic": "http://fonts.gstatic.com/s/ubuntu/v12/4iCp6KVjbNBYlgoKejYHtGyI.ttf",
		    "700": "http://fonts.gstatic.com/s/ubuntu/v12/4iCv6KVjbNBYlgoCxCvTtw.ttf",
		    "700italic": "http://fonts.gstatic.com/s/ubuntu/v12/4iCp6KVjbNBYlgoKejZPsmyI.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Ubuntu Condensed",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "greek-ext",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/ubuntucondensed/v8/u-4k0rCzjgs5J7oXnJcM_0kACGMtf-c.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Ubuntu Mono",
		   "category": "monospace",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "greek-ext",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/ubuntumono/v7/KFOjCneDtsqEr0keqCMhbBc9.ttf",
		    "italic": "http://fonts.gstatic.com/s/ubuntumono/v7/KFOhCneDtsqEr0keqCMhbCc_CsE.ttf",
		    "700": "http://fonts.gstatic.com/s/ubuntumono/v7/KFO-CneDtsqEr0keqCMhbC-BL-Hy.ttf",
		    "700italic": "http://fonts.gstatic.com/s/ubuntumono/v7/KFO8CneDtsqEr0keqCMhbCc_Mn33tYg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Ultra",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v10",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/ultra/v10/zOLy4prXmrtY-tT6.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Uncial Antiqua",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/uncialantiqua/v5/N0bM2S5WOex4OUbESzoESK-i-PfR.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Underdog",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/underdog/v6/CHygV-jCElj7diMroVSi.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Unica One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/unicaone/v5/DPEuYwWHyAYGVTSmalshdg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "UnifrakturCook",
		   "category": "display",
		   "variants": [
		    "700"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "700": "http://fonts.gstatic.com/s/unifrakturcook/v9/IurA6Yli8YOdcoky-0PTTdkm56n05Uw1.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "UnifrakturMaguntia",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/unifrakturmaguntia/v8/WWXPlieVYwiGNomYU-ciRLRvEmK7oaVunw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Unkempt",
		   "category": "display",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/unkempt/v9/2EbnL-Z2DFZue0DSSYY.ttf",
		    "700": "http://fonts.gstatic.com/s/unkempt/v9/2EbiL-Z2DFZue0DScTow1zU.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Unlock",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/unlock/v7/7Au-p_8ykD-cDl7GKA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Unna",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v11",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/unna/v11/AYCEpXzofN0NCpg.ttf",
		    "italic": "http://fonts.gstatic.com/s/unna/v11/AYCKpXzofN0NOpoLkA.ttf",
		    "700": "http://fonts.gstatic.com/s/unna/v11/AYCLpXzofN0NMiQusGk.ttf",
		    "700italic": "http://fonts.gstatic.com/s/unna/v11/AYCJpXzofN0NOpozLGzjQA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "VT323",
		   "category": "monospace",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/vt323/v9/pxiKyp0ihIEF2hsY.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Vampiro One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/vampiroone/v8/gokqH6DoDl5yXvJytFsdLkqn.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Varela",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/varela/v8/DPEtYwqExx0AWHXJBA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Varela Round",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "hebrew",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v10",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/varelaround/v10/w8gdH283Tvk__Lua32TysjIvoA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Vast Shadow",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/vastshadow/v7/pe0qMImKOZ1V62ZwbVY9dfe6.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Vesper Libre",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "500",
		    "700",
		    "900"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/vesperlibre/v9/bx6CNxyWnf-uxPdXDHUD_Rd4Dw.ttf",
		    "500": "http://fonts.gstatic.com/s/vesperlibre/v9/bx6dNxyWnf-uxPdXDHUD_RdA-2ap0g.ttf",
		    "700": "http://fonts.gstatic.com/s/vesperlibre/v9/bx6dNxyWnf-uxPdXDHUD_RdAs2Cp0g.ttf",
		    "900": "http://fonts.gstatic.com/s/vesperlibre/v9/bx6dNxyWnf-uxPdXDHUD_RdAi2Kp0g.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Vibur",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/vibur/v8/DPEiYwmEzw0QRjTp.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Vidaloka",
		   "category": "serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v10",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/vidaloka/v10/7cHrv4c3ipenMKlEass8.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Viga",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/viga/v6/xMQbuFFdSaiX_QI.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Voces",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/voces/v7/-F6_fjJyLyU8d4PB.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Volkhov",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/volkhov/v9/SlGQmQieoJcKemNeQTI.ttf",
		    "italic": "http://fonts.gstatic.com/s/volkhov/v9/SlGSmQieoJcKemNecTAEgA.ttf",
		    "700": "http://fonts.gstatic.com/s/volkhov/v9/SlGVmQieoJcKemNeeY4hoHQ.ttf",
		    "700italic": "http://fonts.gstatic.com/s/volkhov/v9/SlGXmQieoJcKemNecTA8PHFSaA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Vollkorn",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic",
		    "900",
		    "900italic"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext",
		    "greek"
		   ],
		   "version": "v8",
		   "lastModified": "2017-11-21",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/vollkorn/v8/0yb9GDoxxrvAnPhYGyku.ttf",
		    "italic": "http://fonts.gstatic.com/s/vollkorn/v8/0yb7GDoxxrvAnPhYGxksaEg.ttf",
		    "600": "http://fonts.gstatic.com/s/vollkorn/v8/0yb6GDoxxrvAnPhYGxH2TGg-.ttf",
		    "600italic": "http://fonts.gstatic.com/s/vollkorn/v8/0yb4GDoxxrvAnPhYGxksUJA6jBA.ttf",
		    "700": "http://fonts.gstatic.com/s/vollkorn/v8/0yb6GDoxxrvAnPhYGxGSTWg-.ttf",
		    "700italic": "http://fonts.gstatic.com/s/vollkorn/v8/0yb4GDoxxrvAnPhYGxksUPQ7jBA.ttf",
		    "900": "http://fonts.gstatic.com/s/vollkorn/v8/0yb6GDoxxrvAnPhYGxGqT2g-.ttf",
		    "900italic": "http://fonts.gstatic.com/s/vollkorn/v8/0yb4GDoxxrvAnPhYGxksUMw5jBA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Vollkorn SC",
		   "category": "serif",
		   "variants": [
		    "regular",
		    "600",
		    "700",
		    "900"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v1",
		   "lastModified": "2018-08-29",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/vollkornsc/v1/j8_v6-zQ3rXpceZj9cqnVhF5.ttf",
		    "600": "http://fonts.gstatic.com/s/vollkornsc/v1/j8_y6-zQ3rXpceZj9cqnVimhGluq.ttf",
		    "700": "http://fonts.gstatic.com/s/vollkornsc/v1/j8_y6-zQ3rXpceZj9cqnVinFG1uq.ttf",
		    "900": "http://fonts.gstatic.com/s/vollkornsc/v1/j8_y6-zQ3rXpceZj9cqnVin9GVuq.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Voltaire",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/voltaire/v7/1Pttg8PcRfSblAvGvQoo.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Waiting for the Sunrise",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/waitingforthesunrise/v8/WBL1rFvOYl9CEv2i1mO6KUW8RKWJ2zoXoz5JsYZQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Wallpoet",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/wallpoet/v9/f0X10em2_8RnXVVdUNbu.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Walter Turncoat",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/walterturncoat/v8/snfys0Gs98ln43n0d-14ULoToe67YA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Warnes",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-09",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/warnes/v7/pONn1hc0GsW6sW5Opg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Wellfleet",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/wellfleet/v5/nuF7D_LfQJb3VYgX6eyT4w.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Wendy One",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2018-10-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/wendyone/v6/2sDcZGJOipXfgfXV5wgDbw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Wire One",
		   "category": "sans-serif",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/wireone/v8/qFdH35Wah5htUhV75WGi.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Work Sans",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "200",
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700",
		    "800",
		    "900"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/worksans/v3/QGYqz_wNahGAdqQ43Rh3H6Ds.ttf",
		    "200": "http://fonts.gstatic.com/s/worksans/v3/QGYpz_wNahGAdqQ43Rh3s4HMnw.ttf",
		    "300": "http://fonts.gstatic.com/s/worksans/v3/QGYpz_wNahGAdqQ43Rh314LMnw.ttf",
		    "regular": "http://fonts.gstatic.com/s/worksans/v3/QGYsz_wNahGAdqQ43RhPew.ttf",
		    "500": "http://fonts.gstatic.com/s/worksans/v3/QGYpz_wNahGAdqQ43Rh3j4PMnw.ttf",
		    "600": "http://fonts.gstatic.com/s/worksans/v3/QGYpz_wNahGAdqQ43Rh3o4TMnw.ttf",
		    "700": "http://fonts.gstatic.com/s/worksans/v3/QGYpz_wNahGAdqQ43Rh3x4XMnw.ttf",
		    "800": "http://fonts.gstatic.com/s/worksans/v3/QGYpz_wNahGAdqQ43Rh324bMnw.ttf",
		    "900": "http://fonts.gstatic.com/s/worksans/v3/QGYpz_wNahGAdqQ43Rh3_4fMnw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Yanone Kaffeesatz",
		   "category": "sans-serif",
		   "variants": [
		    "200",
		    "300",
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic"
		   ],
		   "version": "v9",
		   "lastModified": "2017-10-10",
		   "files": {
		    "200": "http://fonts.gstatic.com/s/yanonekaffeesatz/v9/3y9-6aknfjLm_3lMKjiMgmUUYBs04YfUPs-t.ttf",
		    "300": "http://fonts.gstatic.com/s/yanonekaffeesatz/v9/3y9-6aknfjLm_3lMKjiMgmUUYBs04YewPc-t.ttf",
		    "regular": "http://fonts.gstatic.com/s/yanonekaffeesatz/v9/3y976aknfjLm_3lMKjiMgmUUYBs04b8c.ttf",
		    "700": "http://fonts.gstatic.com/s/yanonekaffeesatz/v9/3y9-6aknfjLm_3lMKjiMgmUUYBs04YegOs-t.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Yantramanav",
		   "category": "sans-serif",
		   "variants": [
		    "100",
		    "300",
		    "regular",
		    "500",
		    "700",
		    "900"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "100": "http://fonts.gstatic.com/s/yantramanav/v3/flU-Rqu5zY00QEpyWJYWN5-QXeM.ttf",
		    "300": "http://fonts.gstatic.com/s/yantramanav/v3/flUhRqu5zY00QEpyWJYWN59Yf8NZ.ttf",
		    "regular": "http://fonts.gstatic.com/s/yantramanav/v3/flU8Rqu5zY00QEpyWJYWN6f0.ttf",
		    "500": "http://fonts.gstatic.com/s/yantramanav/v3/flUhRqu5zY00QEpyWJYWN58AfsNZ.ttf",
		    "700": "http://fonts.gstatic.com/s/yantramanav/v3/flUhRqu5zY00QEpyWJYWN59IeMNZ.ttf",
		    "900": "http://fonts.gstatic.com/s/yantramanav/v3/flUhRqu5zY00QEpyWJYWN59wesNZ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Yatra One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "devanagari",
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v4",
		   "lastModified": "2017-11-21",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/yatraone/v4/C8ch4copsHzj8p7NaF0xww.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Yellowtail",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v8",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/yellowtail/v8/OZpGg_pnoDtINPfRIlLotlw.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Yeon Sung",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "korean",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2018-11-08",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/yeonsung/v5/QldMNTpbohAGtsJvUn6xSVNazqx2xg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Yeseva One",
		   "category": "display",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "vietnamese",
		    "latin-ext",
		    "latin",
		    "cyrillic",
		    "cyrillic-ext"
		   ],
		   "version": "v12",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/yesevaone/v12/OpNJno4ck8vc-xYpwWWxpio.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Yesteryear",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v6",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/yesteryear/v6/dg4g_p78rroaKl8kRKo1r7w.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Yrsa",
		   "category": "serif",
		   "variants": [
		    "300",
		    "regular",
		    "500",
		    "600",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-10-10",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/yrsa/v3/wlpxgwnQFlxs3af93IQ.ttf",
		    "regular": "http://fonts.gstatic.com/s/yrsa/v3/wlp-gwnQFlxs5Qs.ttf",
		    "500": "http://fonts.gstatic.com/s/yrsa/v3/wlpxgwnQFlxs3f_83IQ.ttf",
		    "600": "http://fonts.gstatic.com/s/yrsa/v3/wlpxgwnQFlxs3dP73IQ.ttf",
		    "700": "http://fonts.gstatic.com/s/yrsa/v3/wlpxgwnQFlxs3bf63IQ.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Zeyada",
		   "category": "handwriting",
		   "variants": [
		    "regular"
		   ],
		   "subsets": [
		    "latin"
		   ],
		   "version": "v7",
		   "lastModified": "2017-10-10",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/zeyada/v7/11hAGpPTxVPUbgZDNA.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Zilla Slab",
		   "category": "serif",
		   "variants": [
		    "300",
		    "300italic",
		    "regular",
		    "italic",
		    "500",
		    "500italic",
		    "600",
		    "600italic",
		    "700",
		    "700italic"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v3",
		   "lastModified": "2017-11-21",
		   "files": {
		    "300": "http://fonts.gstatic.com/s/zillaslab/v3/dFa5ZfeM_74wlPZtksIFYpEY2HQ.ttf",
		    "300italic": "http://fonts.gstatic.com/s/zillaslab/v3/dFanZfeM_74wlPZtksIFaj8CVHapXg.ttf",
		    "regular": "http://fonts.gstatic.com/s/zillaslab/v3/dFa6ZfeM_74wlPZtksIFWj0.ttf",
		    "italic": "http://fonts.gstatic.com/s/zillaslab/v3/dFa4ZfeM_74wlPZtksIFaj86-A.ttf",
		    "500": "http://fonts.gstatic.com/s/zillaslab/v3/dFa5ZfeM_74wlPZtksIFYskZ2HQ.ttf",
		    "500italic": "http://fonts.gstatic.com/s/zillaslab/v3/dFanZfeM_74wlPZtksIFaj8CDHepXg.ttf",
		    "600": "http://fonts.gstatic.com/s/zillaslab/v3/dFa5ZfeM_74wlPZtksIFYuUe2HQ.ttf",
		    "600italic": "http://fonts.gstatic.com/s/zillaslab/v3/dFanZfeM_74wlPZtksIFaj8CIHCpXg.ttf",
		    "700": "http://fonts.gstatic.com/s/zillaslab/v3/dFa5ZfeM_74wlPZtksIFYoEf2HQ.ttf",
		    "700italic": "http://fonts.gstatic.com/s/zillaslab/v3/dFanZfeM_74wlPZtksIFaj8CRHGpXg.ttf"
		   }
		  },
		  {
		   "kind": "webfonts#webfont",
		   "family": "Zilla Slab Highlight",
		   "category": "display",
		   "variants": [
		    "regular",
		    "700"
		   ],
		   "subsets": [
		    "latin-ext",
		    "latin"
		   ],
		   "version": "v5",
		   "lastModified": "2018-08-29",
		   "files": {
		    "regular": "http://fonts.gstatic.com/s/zillaslabhighlight/v5/gNMbW2BrTpK8-inLtBJgMMfbm6uNVDvRxhtI.ttf",
		    "700": "http://fonts.gstatic.com/s/zillaslabhighlight/v5/gNMUW2BrTpK8-inLtBJgMMfbm6uNVDvRxiP0TET4.ttf"
		   }
		  }
		 ]
		}
';
		
		$google_fonts_decoded  = json_decode($google_fonts_json, true);
		$brick_fonts_array = $google_fonts_decoded['items'];
	}
	
	add_action('after_setup_theme', 'brick_qode_init_google_fonts_array');
}