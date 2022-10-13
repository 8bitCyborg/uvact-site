"use strict";var liveChatTimezonesWhiteList=function(){var e={};function t(e){var t=new Set;return e.map(function(e){e.timezones.map(function(e){t.add(e)})}),t}return e.timezonesWhiteList=t([{country:"United States",timezones:["America/New_York","America/Detroit","America/Kentucky/Louisville","America/Kentucky/Monticello","America/Indiana/Indianapolis","America/Indiana/Vincennes","America/Indiana/Winamac","America/Indiana/Marengo","America/Indiana/Petersburg","America/Indiana/Vevay","America/Chicago","America/Indiana/Tell_City","America/Indiana/Knox","America/Menominee","America/North_Dakota/Center","America/North_Dakota/New_Salem","America/North_Dakota/Beulah","America/Denver","America/Boise","America/Phoenix","America/Los_Angeles","America/Anchorage","America/Juneau","America/Sitka","America/Metlakatla","America/Yakutat","America/Nome","America/Adak","Pacific/Honolulu"]},{country:"Canada",timezones:["America/St_Johns","America/Halifax","America/Glace_Bay","America/Moncton","America/Goose_Bay","America/Blanc-Sablon","America/Toronto","America/Nipigon","America/Thunder_Bay","America/Iqaluit","America/Pangnirtung","America/Atikokan","America/Winnipeg","America/Rainy_River","America/Resolute","America/Rankin_Inlet","America/Regina","America/Swift_Current","America/Edmonton","America/Cambridge_Bay","America/Yellowknife","America/Inuvik","America/Creston","America/Dawson_Creek","America/Fort_Nelson","America/Vancouver","America/Whitehorse","America/Dawson"]},{country:"Britain (UK)",timezones:["Europe/London"]},{country:"Germany",timezones:["Europe/Zurich","Europe/Berlin"]},{country:"Norway",timezones:["Europe/Oslo"]},{country:"Finland",timezones:["Europe/Helsinki"]},{country:"Denmark",timezones:["Europe/Copenhagen"]},{country:"Belgium",timezones:["Europe/Brussels"]},{country:"France",timezones:["Europe/Paris"]},{country:"Luxembourg",timezones:["Europe/Luxembourg"]},{country:"Switzerland",timezones:["Europe/Zurich"]},{country:"Netherlands",timezones:["Europe/Amsterdam"]}]),e.timezonesBlackList=t([{country:"India",timezones:["Asia/Colombo","Asia/Kolkata","Asia/Calcutta"]},{country:"Pakistan",timezones:["Asia/Karachi"]}]),e}();"undefined"!=typeof module&&void 0!==module.exports&&(module.exports=liveChatTimezonesWhiteList),function(e,t){var n=function(){var n=t.querySelector("body"),i=Cookies.get("_ga"),a=t.querySelector("#chat-with-us-button"),o=t.querySelector("#live-chat-button"),r=t.querySelector("#business-chat-button-fake"),c=t.querySelector("#apple-business-chat-fallback-container"),s=t.querySelector(".business-chat-button a"),m=t.querySelector("#offline-chat-button"),l=t.querySelector("#connection-description-available-chat"),u=t.querySelector("#open-popup-schedule"),d=t.querySelector("#disabled-schedule-button"),h=t.querySelector("#connection-description-not-available-chat"),A=t.querySelector("#live-chat-working-hours"),p=moment.tz.guess(!0),y="\n                  window.__lc = window.__lc || {};\n                  window.__lc.license = 11154687;\n                  window.__lc.params = [\n                    { name: 'Analytics Client Id', value: '".concat(i||"Cannot get Id","' }\n                  ];\n                  (function() {\n                      var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;\n                      lc.src = 'https://cdn.livechatinc.com/tracking.js';\n                      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);\n                  })();"),f='<a href="https://www.livechatinc.com/chat-with/11154687/" rel="nofollow">Chat with us</a>,\n                  powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>',v={from:moment().tz("US/Central").set({hour:8,minute:0,second:0,millisecond:0}),to:moment().tz("US/Central").set({hour:18,minute:0,second:0,millisecond:0})},_={from:moment.tz(v.from,p),to:moment.tz(v.to,p)},w=liveChatTimezonesWhiteList,g=!1,b=e.navigator.userAgent,L=new RegExp("\\biPhone.*Mobile|\\biPod|\\biPad|AppleCoreMedia|Android","i").test(b);function k(){var e=t.createElement("script"),i=t.createElement("noscript");e.setAttribute("type","text/javascript"),e.innerHTML=y,i.innerHTML=f,n.appendChild(e),n.appendChild(i)}function C(){o.classList.remove("hidden"),k(),a.classList.remove("hidden"),a.addEventListener("click",S)}function z(){var e=t.querySelector("#chat-widget-container");"undefined"!=typeof LC_API&&e&&e.length&&(LC_API.on_chat_state_changed=function(t){"online_for_chat"===t.state?e.style.display="block":g||(e.style.display="none")},LC_API.on_chat_started=function(){g=!0})}function S(){"undefined"!=typeof LC_API&&t.querySelector("#chat-widget-container")&&LC_API.open_chat_window()}!function(){var n=moment().set({hour:21,minute:0,second:0,millisecond:0}),i=n.isBefore(_.to)?n:_.to,a=moment(),o=a.isAfter(_.from)&&a.isBefore(i),y=(g=p,w.timezonesWhiteList.has(g)),f=!function(e){return w.timezonesBlackList.has(e)}(p),v=!e.location.href.match(/\/contact-us$/);var g;f?u&&u.classList.remove("hidden"):d&&d.classList.remove("hidden");if(!y)return void(h&&h.classList.remove("hidden"));if(v)return k(),void setTimeout(z,2e3);if(l.classList.remove("hidden"),A.innerHTML="".concat(_.from.format("hh:mm A")," - ").concat(i.format("hh:mm A")),!o)return void m.classList.remove("hidden");if(L)if(c&&c.classList.contains("apple-business-chat-fallback-container"))C();else{var b=s.getAttribute("href");r.classList.remove("hidden"),r.setAttribute("href",b)}else{var S=t.querySelector("#apple-business-chat-message-container");S.parentNode.removeChild(S),C()}}()};"loading"!==t.readyState?n():t.addEventListener("DOMContentLoaded",n)}(window,document);