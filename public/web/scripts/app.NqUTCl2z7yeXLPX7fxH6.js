function _toConsumableArray(arr){return _arrayWithoutHoles(arr)||_iterableToArray(arr)||_unsupportedIterableToArray(arr)||_nonIterableSpread()}function _nonIterableSpread(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}function _iterableToArray(iter){if("undefined"!=typeof Symbol&&null!=iter[Symbol.iterator]||null!=iter["@@iterator"])return Array.from(iter)}function _arrayWithoutHoles(arr){if(Array.isArray(arr))return _arrayLikeToArray(arr)}function _slicedToArray(arr,i){return _arrayWithHoles(arr)||_iterableToArrayLimit(arr,i)||_unsupportedIterableToArray(arr,i)||_nonIterableRest()}function _nonIterableRest(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}function _unsupportedIterableToArray(o,minLen){if(o){if("string"==typeof o)return _arrayLikeToArray(o,minLen);var n=Object.prototype.toString.call(o).slice(8,-1);return"Object"===n&&o.constructor&&(n=o.constructor.name),"Map"===n||"Set"===n?Array.from(o):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?_arrayLikeToArray(o,minLen):void 0}}function _arrayLikeToArray(arr,len){(null==len||len>arr.length)&&(len=arr.length);for(var i=0,arr2=new Array(len);i<len;i++)arr2[i]=arr[i];return arr2}function _iterableToArrayLimit(arr,i){var _i=null==arr?null:"undefined"!=typeof Symbol&&arr[Symbol.iterator]||arr["@@iterator"];if(null!=_i){var _s,_e,_arr=[],_n=!0,_d=!1;try{for(_i=_i.call(arr);!(_n=(_s=_i.next()).done)&&(_arr.push(_s.value),!i||_arr.length!==i);_n=!0);}catch(err){_d=!0,_e=err}finally{try{_n||null==_i.return||_i.return()}finally{if(_d)throw _e}}return _arr}}function _arrayWithHoles(arr){if(Array.isArray(arr))return arr}!function(){var __webpack_modules__={462:function(e,t,n){n(788);var r=n(613),o=n.n(r),a=function(){var e=window,t=document,n=t.documentElement,r=t.getElementsByTagName("body")[0];return{x:e.innerWidth||n.clientWidth||r.clientWidth,y:e.innerHeight||n.clientHeight||r.clientHeight}},i=n(290),l=(n(716),n(305)),c=n.n(l),d=function(e,t){var n;n=!1;var r=document.createElement("script");function o(){n||this.readyState&&"complete"!==this.readyState||(n=!0,t&&t())}r.type="text/javascript",r.src=e,r.onload=o,r.onreadystatechange=o;var a=_slicedToArray(document.getElementsByTagName("script"),1)[0];a.parentNode.insertBefore(r,a)},u=[],m=function(){return u},p=function(_ref2){var e=_ref2.form,t=_ref2.url,n=e.formData?e.formData:new FormData(e);e=e.formData?e.formElement:e;var r=m().find(function(t){return t.form===e}).validate();if("FILE"===(e.hasAttribute("data-submit-type")?e.getAttribute("data-submit-type"):"NORMAL"))return!1;if(r){var _r=e.querySelector(".loading"),_o=e.querySelector('button[type="submit"]'),_a2=_o.textContent||_o.innerText,_s2=function(_ref3){var e=_ref3.elementHtml,t=_ref3.parent,n=document.createElement("div");n.innerHTML=e,t.insertBefore(n,t.firstChild)};_r.classList.add("loading--active"),_o.textContent="Sending...";var _i2=new XMLHttpRequest;_i2.open("POST",t,!0),_i2.setRequestHeader("X-Requested-With","XMLHttpRequest"),_i2.onload=function(){if(200<=_i2.status&&_i2.status<400){var _t=JSON.parse(_i2.response);_o.textContent=_a2,_r.classList.remove("loading--active"),function(e){var t=e.getAttribute("data-ga-event-category"),n=e.getAttribute("data-ga-event-action"),r=e.getAttribute("data-ga-event-label"),o=e.getAttribute("data-ga-event-value");(t||n||r)&&function(_ref4){var e=_ref4.eventName,t=_ref4.eventCategory,n=_ref4.eventAction,r=_ref4.eventLabel,o=_ref4.eventValue,a=_ref4.conversionId,s=_ref4.conversionLabel;void 0!==window.dataLayer&&(window.dataLayer.push({event:e,"event-tracking-category":t,"event-tracking-action":n,"event-tracking-label":r,"event-tracking-value":o}),a&&s&&window.dataLayer.push({event:"google-ads-tracking","conversion-id":a,"conversion-label":s}))}({eventName:"contact-form-submission",eventCategory:t,eventAction:n,eventLabel:r,eventValue:o})}(e),_t.url?window.location.href=_t.url:(_r.classList.remove("loading--active"),e.querySelectorAll(".response--success").length?e.querySelector(".response--success p").textContent=_t.message:_s2({elementHtml:'<div class="response response--success"><p>\n                '.concat(_t.message,"</p></div>"),parent:e}));var _n2=e.querySelector(".response--error");return _n2&&_n2.parentNode.removeChild(_n2),function(e){e.reset();var t=e.querySelectorAll(".filled");[].forEach.call(t,function(e){e.classList.remove("filled")})}(e),!1}var t="",n=_i2.response;if(404!==_i2.status&&(n=JSON.parse(_i2.response)),422===_i2.status){var _e2=n.errors;for(var _n4 in _e2)_e2.hasOwnProperty(_n4)&&_e2[_n4].length&&(t+="".concat(_e2[_n4].join("<br>"),"<br>"))}else 404===_i2.status?t="Page not found - incorrect url.":n.message&&(t=n.message);t&&(e.querySelectorAll(".response--error").length?e.querySelector(".response--error p").textContent=t:_s2({elementHtml:'<div class="response response--error"><p>'.concat(t,"</p></div>"),parent:e}));var l=e.querySelector(".response--success");return l&&l.parentNode.removeChild(l),_o.textContent=_a2,_r.classList.remove("loading--active"),!1},_i2.send(n)}return!1},g=function(){return!("undefined"==typeof grecaptcha||null===grecaptcha)},h=function(){return!("undefined"==typeof googleRecaptchaClientId||null===googleRecaptchaClientId)},_={zoom:15,disableDefaultUI:!0,scrollwheel:!1,draggable:!function(){try{return document.createEvent("TouchEvent"),!0}catch(e){return!1}}(),styles:[]},v=!1,f=function(){var e=0<arguments.length&&void 0!==arguments[0]?arguments[0]:document.querySelectorAll(".js-map");[].forEach.call(e,function(e){var t=e.getAttribute("data-latitude"),n=e.getAttribute("data-longitude");_.center=new google.maps.LatLng(t,n),_.zoomControlOptions={style:google.maps.ZoomControlStyle.LARGE,position:google.maps.ControlPosition.RIGHT_TOP};var r=new google.maps.Map(e,_);new google.maps.Marker({title:"",position:r.getCenter(),map:r,icon:{url:"",scaledSize:new google.maps.Size(50,71)}}),window.addEventListener("resize",function(){var e=r.getCenter();google.maps.event.trigger(r,"resize"),r.setCenter(e)})})};window.loadMaps=f;var w=n(677),y=function(){var e_runAnimation=function(e,t){var n=t.split("-"),r=e.getAttribute("data-animation-delay")||0;setTimeout(function(){e.classList.remove(t)},r+1200),setTimeout(function(){e.classList.add("animated"),e.classList.add(n[1]),e.classList.add("active")},r)},n=["animation-fadeIn","animation-fadeInUp","animation-fadeInDown","animation-rotateLeft90","animation-rotateRight90","animation-rotateLeft180","animation-slideOut","animation-slideUp","animation-css"],r=0,_loop=function(){var o=".".concat(n[r]),a=n[r];document.querySelector(o)&&document.querySelectorAll(o).forEach(function(t){new Waypoint({element:t,handler:function(n){"down"===n&&(e_runAnimation(t,a),this.destroy())},offset:t.hasAttribute("data-animation-offset")&&(t.closest(".l-header")||t.closest(".l-footer"))?t.getAttribute("data-animation-offset"):"80%"})})};for(r=0;r<n.length;r++)_loop()},b=n(727),E=n.n(b),k={duration:400,easing:function(e,t,n,r){return-n*(e/=r)*(e-2)+t}},L=function(e){var t=1<arguments.length&&void 0!==arguments[1]?arguments[1]:{};x(t)&&(t={duration:t});var n=P(k,t);n.direction=2,n.to=0,n.startingHeight=e.scrollHeight,n.distanceHeight=-n.startingHeight,q(e),window.requestAnimationFrame(function(t){return A(e,n,t)})},S=function(e){var t=1<arguments.length&&void 0!==arguments[1]?arguments[1]:{};x(t)&&(t={duration:t}),e.style.height="0px",q(e);var n=P(k,t);n.direction=1,n.to=e.scrollHeight,n.startingHeight=0,n.distanceHeight=n.to,window.requestAnimationFrame(function(t){return A(e,n,t)})},A=function A(e,t,n){t.startTime||(t.startTime=n);var r=n-t.startTime,o=r<t.duration,a=t.easing(r,t.startingHeight,t.distanceHeight,t.duration);o?(e.style.height="".concat(a.toFixed(2),"px"),window.requestAnimationFrame(function(n){return A(e,t,n)})):(2===t.direction&&e.setAttribute("style",""),1===t.direction&&(e.style.display="block"),C(e))},q=function(e){e.style.display="block",e.style.overflow="hidden",e.style.marginTop="0",e.style.marginBottom="0",e.style.paddingTop="0",e.style.paddingBottom="0"},C=function(e){e.style.height=null,e.style.overflow=null,e.style.marginTop=null,e.style.marginBottom=null,e.style.paddingTop=null,e.style.paddingBottom=null},x=function(e){return Number.isInteger?Number.isInteger(e):"number"==typeof e&&isFinite(e)&&Math.floor(e)===e},P=function(e,t){var n={};for(var _r2 in e)e.hasOwnProperty(_r2)&&(n[_r2]=t[_r2]||e[_r2]);return n},T=document.body.scrollTop,I=function(){if(document.querySelector(".js-navbar")){var e=window.scrollY||window.pageYOffset||document.documentElement.scrollTop;T<=e&&100<T?document.body.classList.add("page-scrolled"):document.body.classList.remove("page-scrolled"),T=e}},O=function(){var e=document.querySelectorAll(".js-dropdown"),t=a().x;e.forEach(function(e){e.parentNode.classList.contains("open-dropdown")&&(t<1200&&L(e.nextElementSibling,1e3),e.parentNode.classList.remove("open-dropdown"))})},j=function(e){var t=e.target,n=t.parentNode,r=!1;if(1200<=a().x&&!t.closest(".open-dropdown")&&!t.classList.contains("js-dropdown")){if(!n||n===document)return!1;"HTML"!==n.tagName&&t.classList&&(t.classList.contains("l-navbar__link--dropdown")?r=!0:(t=t.parentNode,n=n.parentNode)),!0!==r&&O()}},R=function(e){e.target.classList[e.target.value?"add":"remove"]("filled")};n(69);var X,F=function(){void 0!==window.lazyLoadInstance&&window.lazyLoadInstance.update()},M=function(e){e.classList.remove("open"),e.parentNode.classList.remove("open"),L(e.nextElementSibling,500)},H=n(250),N=n(436),$=n.n(N),U=function(){var e=document.querySelectorAll(".js-panning-list");e.length<1||e.forEach(function(e){var t=0,n=e.getBoundingClientRect().width;e.appendChild(e.firstElementChild.cloneNode(!0)),_toConsumableArray(e.children[0].children).forEach(function(e){t+=parseInt(e.getBoundingClientRect().width)}),50<t-n?(e.classList.add("panning"),e.setAttribute("style","--panningValue: -".concat(t,"px"))):(e.classList.remove("panning"),e.setAttribute("style","--panningValue: 0px"))})},B=function(e){for(var t=e.files,n="",_e3=0;_e3<t.length;_e3++){var _r3=t[_e3].name;n+=0!==_e3?", "+_r3:_r3}e.parentNode.querySelector(".form__drop-area").classList.add("file-uploaded"),e.parentNode.querySelector(".form__replace-text").innerText=n},V=n(91),Y=n.n(V),W=function(){var e=document.getElementById("calculator").getAttribute("data-set"),t=JSON.parse(e),n=Vue.createApp,r=t[0].initSubmissionUrl;n({data:function(){return{headline:"ROI Calculator",showResult:!1,sendData:!1,showPopup:!1,form:{averageEmailsReceivedIntoTeamEachMonth:"",numberOfStaffHandlingEmails:"",hoursWorkedPerEmployeeEachDay:"",percentageOfEmailsDeflected:40},data:{employeeCostsPerYear:t[0].employeeCostsPerYear,standardSetUpCostsOfInbox:5500,monthlyPlatformCharge:750,monthlyAdminUserCharge:25,adminUserMin:2,monthlyUserCharge:10,monthlySupportChargeOfPlatform:15},staffCostSavingAchievedPerMonth:0,inboxMonthlyCosts:0,totalMonthlySavingsAfterInvestment:0,netSavingAchievedOverThreeYears:0,calculationId:"",workingDaysPerEmployeePerYearForAPI:0,employeeCostsPerYearForAPI:0,savingsAchievedOverThreeYearsForAPI:0,inboxInvestmentOverThreeYearForAPI:0,ROIForAPI:0}},methods:{openPopup:function(e,t){e.target;var n=this;return t.eventTracking&&this.submitEventTracking(t.eventTracking),fetch(r,{method:"POST",body:JSON.stringify({average_emails_received_into_team_each_month:"".concat(this.form.averageEmailsReceivedIntoTeamEachMonth),number_of_staff_handling_emails:"".concat(this.form.numberOfStaffHandlingEmails),hours_worked_per_employee_each_day:"".concat(this.form.hoursWorkedPerEmployeeEachDay),percentage_of_emails_deflected:"".concat(this.form.percentageOfEmailsDeflected),working_days_per_employee_per_year:"".concat(this.workingDaysPerEmployeePerYearForAPI),agent_annual_salary:"".concat(this.employeeCostsPerYearForAPI),staff_cost_saving_achieved_per_month:"".concat(this.staffCostSavingAchievedPerMonth),inbox_monthly_costs:"".concat(this.inboxMonthlyCosts),total_monthly_savings_after_investment:"".concat(this.totalMonthlySavingsAfterInvestment),saving_achieved_over_three_years:"".concat(this.savingsAchievedOverThreeYearsForAPI),inbox_investment_over_three_years:"".concat(this.inboxInvestmentOverThreeYearForAPI),net_saving_achieved_over_3_years:"".concat(this.netSavingAchievedOverThreeYears),roi:"".concat(this.ROIForAPI)}),headers:{"Content-type":"application/json; charset=UTF-8",Accept:"application/json"}}).then(function(e){return n.sendData=!0,200===e.status&&(n.showPopup=!0,document.body.classList.add("stop-scrolling")),e.json()}).then(function(e){e.calculation_id&&(n.calculationId=e.calculation_id,e.calculation_id&&setInterval(function(){var t=document.querySelector('input[name="0-2/calculation_id"]');t&&(t.value="".concat(e.calculation_id))},1e3))}).catch(function(e){console.error("Error:",e)}),!1},submitCalcForm:function(){var e=0<arguments.length&&void 0!==arguments[0]?arguments[0]:{};this.validCalcForm()&&(this.calculateROI(),e.eventTracking&&this.submitEventTracking(e.eventTracking),window.innerWidth<=991&&document.querySelector("#roi-result").scrollIntoView({behavior:"smooth"}))},submitEventTracking:function(){var e=0<arguments.length&&void 0!==arguments[0]?arguments[0]:null;if(void 0!==window.gtag){var t={event_category:e.category,event_action:e.action,event_label:e.label};e.value&&(t.event_value=e.value),gtag("event","roi_button_click_event",t)}},calculateROI:function(){var e=this.form,t=this.data,n=Number(e.averageEmailsReceivedIntoTeamEachMonth),r=Number(e.numberOfStaffHandlingEmails),o=Number(e.hoursWorkedPerEmployeeEachDay),a=Number(e.percentageOfEmailsDeflected),s=12*n,i=232*o,l=t.employeeCostsPerYear/232/7,c=Math.round(100*l)/100,d=(60/(s/r/i)).toFixed(2),u=a*(s/12)/100,m=d.indexOf("."),p=Number(d.slice(0,m)),g=Number(d.slice(m+1))/100*60,h=(p*u+parseInt(Math.round(g))*u/60)/60,_=Math.round(h*c*100)/100,v=t.standardSetUpCostsOfInbox/36,f=t.monthlyPlatformCharge,w=t.monthlyAdminUserCharge*t.adminUserMin,y=t.monthlyUserCharge*r,b=v+f+w+y+(f+w+y)*t.monthlySupportChargeOfPlatform/100+.1*u,E=Math.floor(100*b)/100,k=_-E,L=36*_,S=36*E,A=L-S,q=parseInt(Math.round(A/S*100));this.staffCostSavingAchievedPerMonth="£".concat(_.toLocaleString("en-US",{maximumFractionDigits:2})),this.inboxMonthlyCosts="£".concat(E.toLocaleString("en-US",{maximumFractionDigits:2})),this.totalMonthlySavingsAfterInvestment="£".concat(k.toLocaleString("en-US",{maximumFractionDigits:2})),this.netSavingAchievedOverThreeYears="£".concat(A.toLocaleString("en-US",{maximumFractionDigits:2})),this.workingDaysPerEmployeePerYearForAPI=232,this.employeeCostsPerYearForAPI="£".concat(this.data.employeeCostsPerYear.toLocaleString("en-US",{maximumFractionDigits:2})),this.savingsAchievedOverThreeYearsForAPI="£".concat(L.toLocaleString("en-US",{maximumFractionDigits:2})),this.inboxInvestmentOverThreeYearForAPI="£".concat(S.toLocaleString("en-US",{maximumFractionDigits:2})),this.ROIForAPI="".concat(q.toLocaleString("en-US",{maximumFractionDigits:2}),"%"),this.showResult=!0},validCalcForm:function(){return document.querySelectorAll(".js-calculator-form-input").forEach(function(e){var t=e.parentElement,n=t.querySelector(".has-danger");0===e.value.length&&null==n&&t.classList.add("has-danger")}),!(0<document.querySelectorAll(".has-danger").length)},removeError:function(e){var t=e.target.parentElement;0===e.target.value.length?t.classList.add("has-danger"):t.classList.remove("has-danger")},closePopup:function(){this.showPopup=!1,this.sendData=!1,document.body.classList.remove("stop-scrolling")}}}).mount("#calculator")};X=Boolean("localhost"===window.location.hostname||"[::1]"===window.location.hostname||window.location.hostname.match(/^127(?:\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)){3}$/)),"serviceWorker"in navigator&&("https:"===window.location.protocol||X)&&window.addEventListener("load",function(){navigator.serviceWorker.register("/service-worker.js").then(function(e){e.onupdatefound=function(){if(navigator.serviceWorker.controller){var t=e.installing;t.onstatechange=function(){switch(t.state){case"installed":break;case"redundant":throw new Error("The installing service worker became redundant.")}}}}}).catch(function(e){console.error("Error during service worker registration:",e)})}),window.addEventListener("scroll",function(){I()}),window.addEventListener("resize",function(){U()}),function(){var e=0<arguments.length&&void 0!==arguments[0]?arguments[0]:{};F(),u.forEach(function(e){return e.destroy()}),u=[],function(){var e=document.querySelectorAll("form"),t={classTo:"form__group",errorClass:"has-danger",successClass:"has-success",errorTextParent:"form__group",errorTextTag:"div",errorTextClass:"form__error"};[].forEach.call(e,function(e){!function(e){u.push(e)}(new(c())(e,t,!0))})}(),function(){var e=.01*window.innerHeight;document.documentElement.style.setProperty("--vh","".concat(e,"px"))}(),document.querySelectorAll('a[href^="#"]:not(.js-scroll-to)').forEach(function(e){e.addEventListener("click",function(e){var t=this.hash,n=t.substr(t.indexOf("#"));return n.length&&function(_ref){var e=_ref.id,_ref$context=_ref.context,t=void 0===_ref$context?window:_ref$context,_ref$offSet=_ref.offSet,n=void 0===_ref$offSet?-80:_ref$offSet,r=a().x,s=document.querySelector(e),i=n;r<768&&(i=-60),s&&o()(s,{elementToScroll:t,verticalOffset:i,maxDuration:1e3,minDuration:250})}({id:n}),e.preventDefault(),!1})}),(0,i.Z)(),function(){var e=document.querySelectorAll(".js-map");e.length&&new Waypoint({element:e[0],handler:function(e){if("down"===e)if(v)f();else{var _e4=document.createElement("script");_e4.type="text/javascript",_e4.src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyB4FjzL0gSI2KdXA9LTOvq_2kV-S5bb7qo&callback=loadMaps",document.body.appendChild(_e4),v=!0}},offset:"80%"})}(),(0,w.t)(),new(E())({selector:".js-popup",autoplayVideos:!0,height:"auto"}),function(){var e=document.querySelector(".js-burger"),t=document.querySelector(".js-navbar");e&&e.addEventListener("click",function(e){return e.preventDefault(),t.classList.contains("open")?(t.classList.remove("open"),document.body.classList.remove("stop-scrolling")):(t.classList.add("open"),document.body.classList.add("stop-scrolling")),O(),!1})}(),I(),document.querySelectorAll(".js-dropdown:not(.dropdown-active)").forEach(function(e){e.classList.add("dropdown-active"),e.addEventListener("click",function(t){var n=a().x;e.parentNode.classList.contains("open-dropdown")?(O(),n<1200&&L(e.nextElementSibling,1e3),e.parentNode.classList.remove("open-dropdown")):(O(),n<1200&&S(e.nextElementSibling,1e3),e.parentNode.classList.add("open-dropdown"))})}),document.addEventListener("click",j,!1),document.addEventListener("keyup",function(e){27===e.keyCode&&O()}),y(),function(){var e=document.querySelectorAll(".js-expand-btn");e&&e.forEach(function(e){e.addEventListener("click",function(){document.querySelectorAll(".js-expand-btn.open").forEach(function(t){t!==e&&M(t)}),e.classList.contains("open")?M(e):function(e){e.classList.add("open"),e.parentNode.classList.add("open"),S(e.nextElementSibling,500)}(e)})})}(),function(){if(document.querySelector("input")){var _e5=document.querySelectorAll("input"),_t2=document.querySelectorAll("textarea"),_n5=document.querySelectorAll("select");[].forEach.call(_e5,function(e){e.classList[e.value?"add":"remove"]("filled"),e.addEventListener("change",R),e.addEventListener("keyup",R),e.addEventListener("keydown",R)}),[].forEach.call(_t2,function(e){e.classList[e.value?"add":"remove"]("filled"),e.addEventListener("change",R),e.addEventListener("keyup",R)}),[].forEach.call(_n5,function(e){e.classList[e.value?"add":"remove"]("filled"),e.addEventListener("change",R),e.addEventListener("keyup",R)})}}(),function(){var e=document.querySelectorAll(".js-slider");e&&e.forEach(function(e){switch(e.getAttribute("id")){case"image-carousel":new H.Z("#image-carousel",{loop:!0,slidesPerView:1.25,spaceBetween:0,observer:!0,breakpoints:{768:{slidesPerView:1.75},1200:{slidesPerView:2.5}},navigation:{nextEl:".btn--grid-next",prevEl:".btn--grid-prev"}});break;case"insights-reel":new H.Z("#insights-reel",{loop:!1,slidesPerView:1.25,spaceBetween:28,observer:!0,scrollbar:{el:".js-insights-scrollbar",hide:!1},navigation:{nextEl:".btn--round-next",prevEl:".btn--round-prev"},breakpoints:{768:{slidesPerView:1.75,spaceBetween:36},1200:{slidesPerView:3.25,spaceBetween:24,scrollbar:{hide:!0}},1600:{slidesPerView:3,spaceBetween:48}}});break;case"logo-cards":new H.Z("#logo-cards",{loop:!1,slidesPerView:1.25,spaceBetween:28,observer:!0,scrollbar:{el:".js-insights-scrollbar",enabled:!0},breakpoints:{768:{slidesPerView:1.75,spaceBetween:36},1200:{slidesPerView:3.25,spaceBetween:24,scrollbar:{enabled:!1}}}});break;case"case-study-reel":new H.Z("#case-study-reel",{loop:!0,slidesPerView:1,autoHeight:!0,centerInsufficientSlides:!0,observer:!0,navigation:{nextEl:".js-cs-reel-next",prevEl:".js-cs-reel-prev"}});break;case"testimonial-reel":new H.Z("#testimonial-reel",{loop:!1,slidesPerView:1.2,centerInsufficientSlides:!0,observer:!0,scrollbar:{el:".js-testimonial-reel-scrollbar",hide:!1},navigation:{nextEl:".btn--grid-next",prevEl:".btn--grid-prev"},breakpoints:{1200:{slidesPerView:2,scrollbar:{hide:!0}}}})}})}(),function(){var e=document.querySelectorAll(".js-stat-meter");0!=e.length&&e.forEach(function(e){var t=e.getTotalLength()*((100-parseInt(e.parentNode.getAttribute("data-value")))/100);e.getBoundingClientRect(),new Waypoint({element:e,handler:function(n){"down"===n&&(e.style.strokeDashoffset=Math.max(0,t))},offset:"75%"})})}(),document.querySelector(".js-sticky")&&new(Y())(".js-sticky"),function(){var e=document.querySelectorAll("form");!g()&&h()&&e.forEach(function(e){e.addEventListener("click",function(){g()||d("https://www.google.com/recaptcha/api.js?render=".concat(googleRecaptchaClientId))})})}(),document.querySelector(".js-marquee")&&$().init({selector:"js-marquee"}),U(),document.getElementById("calculator")&&(window.Vue?W():d("https://cdn.jsdelivr.net/npm/vue@3/dist/vue.global.prod.js",function(){W()})),(0,i._)({url:window.location.pathname+window.location.search,isFirstVisit:e.firstTime||!1})}({firstTime:!0}),window.App={metaTags:{},submitForm:function(_ref5){var e=_ref5.form,t=_ref5.url;return e||t?!!m().find(function(t){return t.form===e}).validate()&&(h()?function(e,t){if(e){var n=e.querySelector('input[name="recaptcha"]');n&&grecaptcha.execute(googleRecaptchaClientId,{action:"/ajax/sendForm"}).then(function(e){n.value=e,t()})}}(e,function(){p({form:e,url:t})}):p({form:e,url:t}),!1):(console.error("Form or/and form URI not specified."),!1)},refine:w.Z,scriptsAsCallback:function(){console.log("run scripts as callback")},goToSelectedUrl:function(e){var t=window.location.origin+e;return window.location.replace(t),!1},loadMore:function(_ref6){var e=_ref6.obj,_ref6$target=_ref6.target,t=void 0===_ref6$target?".js-load-more-container":_ref6$target,n=_ref6.url,_ref6$callback=_ref6.callback,r=void 0===_ref6$callback?null:_ref6$callback,o=document.querySelector(t);e.parentNode.remove();var a=new XMLHttpRequest;a.open("GET",n,!0),a.setRequestHeader("Content-Type","text/html; charset=UTF-8"),a.setRequestHeader("X-Requested-With","XMLHttpRequest"),a.onload=function(){if(200===a.status){var _e6=a.response;o.insertAdjacentHTML("beforeend",_e6),y(),F(),r&&r()}else console.warn(a)},a.send()},formDragOverHandler:function(e){e.preventDefault()},formDropHandler:function(e){var t=e.target.parentNode;e.preventDefault(),t.files=e.dataTransfer.files,B(t),e.dataTransfer.items?_toConsumableArray(e.dataTransfer.items).forEach(function(e,t){"file"===e.kind&&e.getAsFile()}):_toConsumableArray(e.dataTransfer.files).forEach(function(e,t){})},fileUploaded:B}},677:function _(__unused_webpack_module,__webpack_exports__,__webpack_require__){__webpack_require__.d(__webpack_exports__,{t:function(){return initRefinement},Z:function(){return __WEBPACK_DEFAULT_EXPORT__}});var _track_event__WEBPACK_IMPORTED_MODULE_0__=__webpack_require__(290),getCurrentCategorySlug=function(){return document.querySelector("[data-filter-category]").getAttribute("data-filter-category")},adjustParamsInUrl=function(_ref7){var e=_ref7.url;if(-1<e.indexOf(".html"))return e;var t=e;return-1<e.indexOf("?")?t+="/":t+="/?",t+Math.random()},loadContent=function loadContent(_ref8){var url=_ref8.url,callback=_ref8.callback,loadingLayer=document.querySelector(".loading");loadingLayer.classList.add("loading--active"),"/"===url.slice(-1)&&(url=url.slice(0,-1));var newUrl=adjustParamsInUrl({url:url}),request=new XMLHttpRequest;request.open("GET",newUrl,!0),request.setRequestHeader("Content-Type","text/html; charset=UTF-8"),request.setRequestHeader("X-Requested-With","XMLHttpRequest"),request.onload=function fn(){loadingLayer.classList.remove("loading--active");var refinedContent=document.querySelector("#js-refined-content");if(200===request.status){var response=request.response,newRefinedContentElement=document.createElement("div");newRefinedContentElement.setAttribute("id","js-refined-content"),newRefinedContentElement.innerHTML=response,refinedContent.parentNode.replaceChild(newRefinedContentElement,refinedContent);var jsScript=document.querySelector("#js-meta-tags");jsScript?(eval(jsScript.text),document.title=window.App.metaTags.title,document.querySelector("meta[name=description]").setAttribute("content",window.App.metaTags.description)):console.error("No script specified means no dynamic title loading"),callback&&callback()}else{var e=document.createElement("div");e.classList.add("response"),e.classList.add("response--error"),e.innerHTML="<p>Error while loading the content.</p>",refinedContent.appendChild(e),refinedContent.insertBefore(e,refinedContent.firstChild)}},request.send()},refine=function(_ref9){var e=_ref9.type,t=_ref9.url,n=_ref9.callback,r=getCurrentCategorySlug();"label"===e&&(t="".concat(r,"/").concat(t)),(0,_track_event__WEBPACK_IMPORTED_MODULE_0__._)({url:t}),history.pushState({url:t},null,t),loadContent({url:t,callback:n})};function initRefinement(){window.addEventListener("popstate",function(e){var t=e.state;t&&t.url?loadContent({url:t.url,callback:App.scriptsAsCallback}):null===t&&location.reload()})}var __WEBPACK_DEFAULT_EXPORT__=refine},290:function(e,t,n){n.d(t,{Z:function(){return o},_:function(){return a}});var r=function(_ref10){var _ref10$link=_ref10.link,e=void 0===_ref10$link?null:_ref10$link,_ref10$url=_ref10.url,t=void 0===_ref10$url?null:_ref10$url,_ref10$event=_ref10.event,n=void 0===_ref10$event?"page-visit":_ref10$event,r=window.dataLayer||[],o={event:n,url:t};"buttonClick"===n&&(o["event-tracking-category"]=e.getAttribute("data-category")?e.getAttribute("data-category"):"",o["event-tracking-action"]=e.getAttribute("data-action")?e.getAttribute("data-action"):"",o["event-tracking-label"]=e.getAttribute("data-label")?e.getAttribute("data-label"):"",o["event-tracking-value"]=e.getAttribute("data-value")?e.getAttribute("data-value"):""),e&&(o.url=e.getAttribute("href")),r.push(o)},o=function(){document.querySelectorAll('a[data-type="trackEvent"]').forEach(function(e){e.addEventListener("click",function(t){r({link:e,event:"buttonClick"})},!1)})};function a(_ref11){var e=_ref11.url,_ref11$isFirstVisit=_ref11.isFirstVisit,t=void 0!==_ref11$isFirstVisit&&_ref11$isFirstVisit;window.dataLayer&&(t&&window.dataLayer.push({originalLocation:"".concat(document.location.protocol,"//").concat(document.location.hostname).concat(document.location.pathname).concat(document.location.search)}),r({url:e}))}}},__webpack_module_cache__={},deferred;function __webpack_require__(e){var t=__webpack_module_cache__[e];if(void 0!==t)return t.exports;var n=__webpack_module_cache__[e]={exports:{}};return __webpack_modules__[e].call(n.exports,n,n.exports,__webpack_require__),n.exports}__webpack_require__.m=__webpack_modules__,deferred=[],__webpack_require__.O=function(e,t,n,r){if(!t){var o=1/0;for(l=0;l<deferred.length;l++){for(var _deferred$l=_slicedToArray(deferred[l],3),a=(t=_deferred$l[0],n=_deferred$l[1],r=_deferred$l[2],!0),s=0;s<t.length;s++)(!1&r||r<=o)&&Object.keys(__webpack_require__.O).every(function(e){return __webpack_require__.O[e](t[s])})?t.splice(s--,1):(a=!1,r<o&&(o=r));if(a){deferred.splice(l--,1);var i=n();void 0!==i&&(e=i)}}return e}r=r||0;for(var l=deferred.length;0<l&&deferred[l-1][2]>r;l--)deferred[l]=deferred[l-1];deferred[l]=[t,n,r]},__webpack_require__.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return __webpack_require__.d(t,{a:t}),t},__webpack_require__.d=function(e,t){for(var n in t)__webpack_require__.o(t,n)&&!__webpack_require__.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:t[n]})},__webpack_require__.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},function(){var e={143:0};__webpack_require__.O.j=function(t){return 0===e[t]};var t=function(_t3,n){var r,o,_n6=_slicedToArray(n,3),a=_n6[0],s=_n6[1],i=_n6[2],l=0;if(a.some(function(t){return 0!==e[t]})){for(r in s)__webpack_require__.o(s,r)&&(__webpack_require__.m[r]=s[r]);if(i)var c=i(__webpack_require__)}for(_t3&&_t3(n);l<a.length;l++)o=a[l],__webpack_require__.o(e,o)&&e[o]&&e[o][0](),e[a[l]]=0;return __webpack_require__.O(c)},n=self.webpackChunk=self.webpackChunk||[];n.forEach(t.bind(null,0)),n.push=t.bind(null,n.push.bind(n))}();var __webpack_exports__=__webpack_require__.O(void 0,[736],function(){return __webpack_require__(462)});__webpack_exports__=__webpack_require__.O(__webpack_exports__)}();