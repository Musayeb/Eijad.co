(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_views_StarterPage_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/StarterPage.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/StarterPage.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _components_dashboard_YearlySales_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/dashboard/YearlySales.vue */ "./resources/js/views/components/dashboard/YearlySales.vue");
/* harmony import */ var _components_dashboard_SalesOverview_vue__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/dashboard/SalesOverview.vue */ "./resources/js/views/components/dashboard/SalesOverview.vue");
/* harmony import */ var _components_dashboard_States_vue__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/dashboard/States.vue */ "./resources/js/views/components/dashboard/States.vue");
/* harmony import */ var _components_dashboard_Blogs_vue__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/dashboard/Blogs.vue */ "./resources/js/views/components/dashboard/Blogs.vue");
/* harmony import */ var _components_dashboard_SalesDifference__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./components/dashboard/SalesDifference */ "./resources/js/views/components/dashboard/SalesDifference.vue");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//





/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "StarterPage",
  components: {
    YearlySales: _components_dashboard_YearlySales_vue__WEBPACK_IMPORTED_MODULE_0__.default,
    SalesOverview: _components_dashboard_SalesOverview_vue__WEBPACK_IMPORTED_MODULE_1__.default,
    States: _components_dashboard_States_vue__WEBPACK_IMPORTED_MODULE_2__.default,
    Blogs: _components_dashboard_Blogs_vue__WEBPACK_IMPORTED_MODULE_3__.default,
    SalesDifference: _components_dashboard_SalesDifference__WEBPACK_IMPORTED_MODULE_4__.default
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/Blogs.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/Blogs.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "Blogs"
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/LineAreaChart.vue?vue&type=script&lang=js&":
/*!************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/LineAreaChart.vue?vue&type=script&lang=js& ***!
  \************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
Object(function webpackMissingModule() { var e = new Error("Cannot find module 'vue-chartjs'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  "extends": Object(function webpackMissingModule() { var e = new Error("Cannot find module 'vue-chartjs'"); e.code = 'MODULE_NOT_FOUND'; throw e; }()),
  data: function data() {
    return {
      gradient: null,
      gradient2: null
    };
  },
  mounted: function mounted() {
    this.gradient = this.$refs.canvas.getContext("2d").createLinearGradient(0, 0, 0, 450);
    this.gradient2 = this.$refs.canvas.getContext("2d").createLinearGradient(0, 0, 0, 450);
    this.gradient.addColorStop(0, "rgba(180, 190, 203, 0.5)");
    this.gradient.addColorStop(0.4, "rgba(180, 190, 203, 0.25)");
    this.gradient.addColorStop(1, "rgba(255, 255, 255, 0)");
    this.gradient2.addColorStop(0, "rgba(1, 192, 200, 0.5)");
    this.gradient2.addColorStop(0.4, "rgba(1, 192, 200, 0.25)");
    this.gradient2.addColorStop(1, "rgba(1, 192, 200, 0.2)");
    this.renderChart({
      labels: ["2010", "2011", "2012", "2013", "2014", "2015", "2016"],
      datasets: [{
        label: "Site A",
        borderColor: "rgba(180, 190, 203, 0.5)",
        pointBackgroundColor: "white",
        borderWidth: 2,
        pointBorderWidth: 0,
        backgroundColor: this.gradient,
        data: [0, 130, 80, 70, 180, 105, 250],
        pointStrokeColors: "rgba(180, 190, 203, 0.5)",
        lineTension: 0
      }, {
        label: "Site B",
        borderColor: "rgba(1, 192, 200, 0.5)",
        pointBackgroundColor: "white",
        borderWidth: 2,
        pointBorderWidth: 0,
        backgroundColor: this.gradient2,
        data: [0, 100, 60, 200, 150, 90, 150],
        pointStrokeColors: "rgba(1, 192, 200, 0.5)",
        lineTension: 0
      }]
    }, {
      responsive: true,
      maintainAspectRatio: false
    });
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/LineChart.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/LineChart.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
Object(function webpackMissingModule() { var e = new Error("Cannot find module 'vue-chartjs'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  "extends": Object(function webpackMissingModule() { var e = new Error("Cannot find module 'vue-chartjs'"); e.code = 'MODULE_NOT_FOUND'; throw e; }()),
  data: function data() {
    return {};
  },
  mounted: function mounted() {
    this.renderChart({
      labels: ["2010", "2011", "2012", "2013", "2014", "2015", "2016"],
      datasets: [{
        label: "Iphone",
        borderColor: "#00bfc7",
        pointBackgroundColor: "white",
        borderWidth: 3,
        backgroundColor: "transparent",
        pointBorderWidth: 3,
        data: [50, 130, 80, 70, 180, 105, 250]
      }, {
        label: "Ipad",
        borderColor: "#fb9678",
        pointBackgroundColor: "white",
        borderWidth: 3,
        backgroundColor: "transparent",
        pointBorderWidth: 3,
        data: [80, 100, 60, 200, 150, 100, 150]
      }]
    }, {
      responsive: true,
      maintainAspectRatio: false,
      gridLines: {
        color: "#e0e0e0"
      },
      legend: {
        position: "bottom"
      }
    });
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/SalesDifference.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/SalesDifference.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _LineAreaChart_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./LineAreaChart.vue */ "./resources/js/views/components/dashboard/LineAreaChart.vue");
//
//
//
//

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "SalesDifference",
  components: {
    LineAreaChart: _LineAreaChart_vue__WEBPACK_IMPORTED_MODULE_0__.default
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/SalesOverview.vue?vue&type=script&lang=js&":
/*!************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/SalesOverview.vue?vue&type=script&lang=js& ***!
  \************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "SalesOverview"
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/States.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/States.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "States"
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/YearlySales.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/YearlySales.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _LineChart_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./LineChart.vue */ "./resources/js/views/components/dashboard/LineChart.vue");
//
//
//
//

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "SalesSummary",
  components: {
    LineChart: _LineChart_vue__WEBPACK_IMPORTED_MODULE_0__.default
  }
});

/***/ }),

/***/ "./resources/js/views/StarterPage.vue":
/*!********************************************!*\
  !*** ./resources/js/views/StarterPage.vue ***!
  \********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _StarterPage_vue_vue_type_template_id_362f486f___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./StarterPage.vue?vue&type=template&id=362f486f& */ "./resources/js/views/StarterPage.vue?vue&type=template&id=362f486f&");
/* harmony import */ var _StarterPage_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./StarterPage.vue?vue&type=script&lang=js& */ "./resources/js/views/StarterPage.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _StarterPage_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _StarterPage_vue_vue_type_template_id_362f486f___WEBPACK_IMPORTED_MODULE_0__.render,
  _StarterPage_vue_vue_type_template_id_362f486f___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/views/StarterPage.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/views/components/dashboard/Blogs.vue":
/*!***********************************************************!*\
  !*** ./resources/js/views/components/dashboard/Blogs.vue ***!
  \***********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Blogs_vue_vue_type_template_id_03ddb67c___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Blogs.vue?vue&type=template&id=03ddb67c& */ "./resources/js/views/components/dashboard/Blogs.vue?vue&type=template&id=03ddb67c&");
/* harmony import */ var _Blogs_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Blogs.vue?vue&type=script&lang=js& */ "./resources/js/views/components/dashboard/Blogs.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _Blogs_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _Blogs_vue_vue_type_template_id_03ddb67c___WEBPACK_IMPORTED_MODULE_0__.render,
  _Blogs_vue_vue_type_template_id_03ddb67c___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/views/components/dashboard/Blogs.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/views/components/dashboard/LineAreaChart.vue":
/*!*******************************************************************!*\
  !*** ./resources/js/views/components/dashboard/LineAreaChart.vue ***!
  \*******************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _LineAreaChart_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./LineAreaChart.vue?vue&type=script&lang=js& */ "./resources/js/views/components/dashboard/LineAreaChart.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");
var render, staticRenderFns
;



/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_1__.default)(
  _LineAreaChart_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default,
  render,
  staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/views/components/dashboard/LineAreaChart.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/views/components/dashboard/LineChart.vue":
/*!***************************************************************!*\
  !*** ./resources/js/views/components/dashboard/LineChart.vue ***!
  \***************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _LineChart_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./LineChart.vue?vue&type=script&lang=js& */ "./resources/js/views/components/dashboard/LineChart.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");
var render, staticRenderFns
;



/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_1__.default)(
  _LineChart_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default,
  render,
  staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/views/components/dashboard/LineChart.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/views/components/dashboard/SalesDifference.vue":
/*!*********************************************************************!*\
  !*** ./resources/js/views/components/dashboard/SalesDifference.vue ***!
  \*********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _SalesDifference_vue_vue_type_template_id_05143514___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./SalesDifference.vue?vue&type=template&id=05143514& */ "./resources/js/views/components/dashboard/SalesDifference.vue?vue&type=template&id=05143514&");
/* harmony import */ var _SalesDifference_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./SalesDifference.vue?vue&type=script&lang=js& */ "./resources/js/views/components/dashboard/SalesDifference.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _SalesDifference_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _SalesDifference_vue_vue_type_template_id_05143514___WEBPACK_IMPORTED_MODULE_0__.render,
  _SalesDifference_vue_vue_type_template_id_05143514___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/views/components/dashboard/SalesDifference.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/views/components/dashboard/SalesOverview.vue":
/*!*******************************************************************!*\
  !*** ./resources/js/views/components/dashboard/SalesOverview.vue ***!
  \*******************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _SalesOverview_vue_vue_type_template_id_a0bc59e0___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./SalesOverview.vue?vue&type=template&id=a0bc59e0& */ "./resources/js/views/components/dashboard/SalesOverview.vue?vue&type=template&id=a0bc59e0&");
/* harmony import */ var _SalesOverview_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./SalesOverview.vue?vue&type=script&lang=js& */ "./resources/js/views/components/dashboard/SalesOverview.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _SalesOverview_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _SalesOverview_vue_vue_type_template_id_a0bc59e0___WEBPACK_IMPORTED_MODULE_0__.render,
  _SalesOverview_vue_vue_type_template_id_a0bc59e0___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/views/components/dashboard/SalesOverview.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/views/components/dashboard/States.vue":
/*!************************************************************!*\
  !*** ./resources/js/views/components/dashboard/States.vue ***!
  \************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _States_vue_vue_type_template_id_40056aa7___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./States.vue?vue&type=template&id=40056aa7& */ "./resources/js/views/components/dashboard/States.vue?vue&type=template&id=40056aa7&");
/* harmony import */ var _States_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./States.vue?vue&type=script&lang=js& */ "./resources/js/views/components/dashboard/States.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _States_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _States_vue_vue_type_template_id_40056aa7___WEBPACK_IMPORTED_MODULE_0__.render,
  _States_vue_vue_type_template_id_40056aa7___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/views/components/dashboard/States.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/views/components/dashboard/YearlySales.vue":
/*!*****************************************************************!*\
  !*** ./resources/js/views/components/dashboard/YearlySales.vue ***!
  \*****************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _YearlySales_vue_vue_type_template_id_af7ec966___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./YearlySales.vue?vue&type=template&id=af7ec966& */ "./resources/js/views/components/dashboard/YearlySales.vue?vue&type=template&id=af7ec966&");
/* harmony import */ var _YearlySales_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./YearlySales.vue?vue&type=script&lang=js& */ "./resources/js/views/components/dashboard/YearlySales.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _YearlySales_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _YearlySales_vue_vue_type_template_id_af7ec966___WEBPACK_IMPORTED_MODULE_0__.render,
  _YearlySales_vue_vue_type_template_id_af7ec966___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/views/components/dashboard/YearlySales.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/views/StarterPage.vue?vue&type=script&lang=js&":
/*!*********************************************************************!*\
  !*** ./resources/js/views/StarterPage.vue?vue&type=script&lang=js& ***!
  \*********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_StarterPage_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./StarterPage.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/StarterPage.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_StarterPage_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/views/components/dashboard/Blogs.vue?vue&type=script&lang=js&":
/*!************************************************************************************!*\
  !*** ./resources/js/views/components/dashboard/Blogs.vue?vue&type=script&lang=js& ***!
  \************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Blogs_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Blogs.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/Blogs.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Blogs_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/views/components/dashboard/LineAreaChart.vue?vue&type=script&lang=js&":
/*!********************************************************************************************!*\
  !*** ./resources/js/views/components/dashboard/LineAreaChart.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_LineAreaChart_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./LineAreaChart.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/LineAreaChart.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_LineAreaChart_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/views/components/dashboard/LineChart.vue?vue&type=script&lang=js&":
/*!****************************************************************************************!*\
  !*** ./resources/js/views/components/dashboard/LineChart.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_LineChart_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./LineChart.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/LineChart.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_LineChart_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/views/components/dashboard/SalesDifference.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************!*\
  !*** ./resources/js/views/components/dashboard/SalesDifference.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_SalesDifference_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./SalesDifference.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/SalesDifference.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_SalesDifference_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/views/components/dashboard/SalesOverview.vue?vue&type=script&lang=js&":
/*!********************************************************************************************!*\
  !*** ./resources/js/views/components/dashboard/SalesOverview.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_SalesOverview_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./SalesOverview.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/SalesOverview.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_SalesOverview_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/views/components/dashboard/States.vue?vue&type=script&lang=js&":
/*!*************************************************************************************!*\
  !*** ./resources/js/views/components/dashboard/States.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_States_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./States.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/States.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_States_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/views/components/dashboard/YearlySales.vue?vue&type=script&lang=js&":
/*!******************************************************************************************!*\
  !*** ./resources/js/views/components/dashboard/YearlySales.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_YearlySales_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./YearlySales.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/YearlySales.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_YearlySales_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/views/StarterPage.vue?vue&type=template&id=362f486f&":
/*!***************************************************************************!*\
  !*** ./resources/js/views/StarterPage.vue?vue&type=template&id=362f486f& ***!
  \***************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_StarterPage_vue_vue_type_template_id_362f486f___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_StarterPage_vue_vue_type_template_id_362f486f___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_StarterPage_vue_vue_type_template_id_362f486f___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./StarterPage.vue?vue&type=template&id=362f486f& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/StarterPage.vue?vue&type=template&id=362f486f&");


/***/ }),

/***/ "./resources/js/views/components/dashboard/Blogs.vue?vue&type=template&id=03ddb67c&":
/*!******************************************************************************************!*\
  !*** ./resources/js/views/components/dashboard/Blogs.vue?vue&type=template&id=03ddb67c& ***!
  \******************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Blogs_vue_vue_type_template_id_03ddb67c___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Blogs_vue_vue_type_template_id_03ddb67c___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Blogs_vue_vue_type_template_id_03ddb67c___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Blogs.vue?vue&type=template&id=03ddb67c& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/Blogs.vue?vue&type=template&id=03ddb67c&");


/***/ }),

/***/ "./resources/js/views/components/dashboard/SalesDifference.vue?vue&type=template&id=05143514&":
/*!****************************************************************************************************!*\
  !*** ./resources/js/views/components/dashboard/SalesDifference.vue?vue&type=template&id=05143514& ***!
  \****************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_SalesDifference_vue_vue_type_template_id_05143514___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_SalesDifference_vue_vue_type_template_id_05143514___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_SalesDifference_vue_vue_type_template_id_05143514___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./SalesDifference.vue?vue&type=template&id=05143514& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/SalesDifference.vue?vue&type=template&id=05143514&");


/***/ }),

/***/ "./resources/js/views/components/dashboard/SalesOverview.vue?vue&type=template&id=a0bc59e0&":
/*!**************************************************************************************************!*\
  !*** ./resources/js/views/components/dashboard/SalesOverview.vue?vue&type=template&id=a0bc59e0& ***!
  \**************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_SalesOverview_vue_vue_type_template_id_a0bc59e0___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_SalesOverview_vue_vue_type_template_id_a0bc59e0___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_SalesOverview_vue_vue_type_template_id_a0bc59e0___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./SalesOverview.vue?vue&type=template&id=a0bc59e0& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/SalesOverview.vue?vue&type=template&id=a0bc59e0&");


/***/ }),

/***/ "./resources/js/views/components/dashboard/States.vue?vue&type=template&id=40056aa7&":
/*!*******************************************************************************************!*\
  !*** ./resources/js/views/components/dashboard/States.vue?vue&type=template&id=40056aa7& ***!
  \*******************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_States_vue_vue_type_template_id_40056aa7___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_States_vue_vue_type_template_id_40056aa7___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_States_vue_vue_type_template_id_40056aa7___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./States.vue?vue&type=template&id=40056aa7& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/States.vue?vue&type=template&id=40056aa7&");


/***/ }),

/***/ "./resources/js/views/components/dashboard/YearlySales.vue?vue&type=template&id=af7ec966&":
/*!************************************************************************************************!*\
  !*** ./resources/js/views/components/dashboard/YearlySales.vue?vue&type=template&id=af7ec966& ***!
  \************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_YearlySales_vue_vue_type_template_id_af7ec966___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_YearlySales_vue_vue_type_template_id_af7ec966___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_YearlySales_vue_vue_type_template_id_af7ec966___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./YearlySales.vue?vue&type=template&id=af7ec966& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/YearlySales.vue?vue&type=template&id=af7ec966&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/StarterPage.vue?vue&type=template&id=362f486f&":
/*!******************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/StarterPage.vue?vue&type=template&id=362f486f& ***!
  \******************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      _c("States"),
      _vm._v(" "),
      _c(
        "vs-row",
        { attrs: { "vs-justify": "center" } },
        [
          _c(
            "vs-col",
            {
              attrs: {
                type: "flex",
                "vs-justify": "center",
                "vs-align": "center",
                "vs-lg": "6",
                "vs-sm": "12",
                "vs-xs": "12",
                "code-toggler": ""
              }
            },
            [
              _c("vs-card", { staticClass: "cardx" }, [
                _c("div", { attrs: { slot: "header" }, slot: "header" }, [
                  _c("h5", { staticClass: "card-title" }, [
                    _vm._v("Yearly Sales")
                  ])
                ]),
                _vm._v(" "),
                _c("div", [_c("YearlySales")], 1)
              ])
            ],
            1
          ),
          _vm._v(" "),
          _c(
            "vs-col",
            {
              attrs: {
                type: "flex",
                "vs-justify": "center",
                "vs-align": "center",
                "vs-lg": "6",
                "vs-sm": "12",
                "vs-xs": "12",
                "code-toggler": ""
              }
            },
            [
              _c("vs-card", { staticClass: "cardx" }, [
                _c("div", { attrs: { slot: "header" }, slot: "header" }, [
                  _c("h5", { staticClass: "card-title" }, [
                    _vm._v("Sales Difference")
                  ])
                ]),
                _vm._v(" "),
                _c("div", [_c("SalesDifference")], 1)
              ])
            ],
            1
          ),
          _vm._v(" "),
          _c(
            "vs-col",
            { attrs: { "vs-lg": "12" } },
            [
              _c(
                "vs-card",
                [
                  _c("div", { attrs: { slot: "header" }, slot: "header" }, [
                    _c("div", { staticClass: "d-flex align-items-center" }, [
                      _c("div", [
                        _c("h5", { staticClass: "card-title" }, [
                          _vm._v("Sales Overview")
                        ]),
                        _vm._v(" "),
                        _c("h6", { staticClass: "card-subtitle mb-0" }, [
                          _vm._v("Check the monthly sales")
                        ])
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "ml-auto text-right" }, [
                        _c("div", [
                          _c("span", { staticClass: "text-muted" }, [
                            _vm._v("Total Sales")
                          ]),
                          _vm._v(" "),
                          _c("h2", { staticClass: "text-success mb-0" }, [
                            _vm._v("$3,690")
                          ])
                        ])
                      ])
                    ])
                  ]),
                  _vm._v(" "),
                  _c("SalesOverview")
                ],
                1
              )
            ],
            1
          )
        ],
        1
      ),
      _vm._v(" "),
      _c("Blogs")
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/Blogs.vue?vue&type=template&id=03ddb67c&":
/*!*********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/Blogs.vue?vue&type=template&id=03ddb67c& ***!
  \*********************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "vs-row",
    [
      _c(
        "vs-col",
        { attrs: { "vs-lg": "3", "vs-sm": "6", "vs-xs": "12" } },
        [
          _c(
            "vs-card",
            { attrs: { actionable: "" } },
            [
              _c("div", { attrs: { slot: "header" }, slot: "header" }, [
                _c("h5", { staticClass: "font-weight-bold" }, [
                  _vm._v("Hello world !")
                ])
              ]),
              _vm._v(" "),
              _c("div", { attrs: { slot: "media" }, slot: "media" }, [
                _c("img", { attrs: { src: "assets/images/big/img5.jpg" } })
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "mb-2" }, [
                _c("h6", { staticClass: "mb-2" }, [
                  _vm._v("\n          23\n          "),
                  _c("sup", [_vm._v("rd")]),
                  _vm._v(" oct 2020\n        ")
                ]),
                _vm._v(" "),
                _c("span", { staticClass: "py-2 d-block" }, [
                  _vm._v(
                    "Lorem ipsum dolor sit amet, consectetur ipsum dolor sit amet, consectetur ipsum dolor."
                  )
                ])
              ]),
              _vm._v(" "),
              _c("vs-button", { attrs: { color: "primary", type: "border" } }, [
                _vm._v("Read More")
              ])
            ],
            1
          )
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "vs-col",
        { attrs: { "vs-lg": "3", "vs-sm": "6", "vs-xs": "12" } },
        [
          _c(
            "vs-card",
            { attrs: { actionable: "" } },
            [
              _c("div", { attrs: { slot: "header" }, slot: "header" }, [
                _c("h5", { staticClass: "font-weight-bold" }, [
                  _vm._v("Hello world !")
                ])
              ]),
              _vm._v(" "),
              _c("div", { attrs: { slot: "media" }, slot: "media" }, [
                _c("img", { attrs: { src: "assets/images/big/img4.jpg" } })
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "mb-2" }, [
                _c("h6", { staticClass: "mb-2" }, [
                  _vm._v("\n          23\n          "),
                  _c("sup", [_vm._v("rd")]),
                  _vm._v(" oct 2020\n        ")
                ]),
                _vm._v(" "),
                _c("span", { staticClass: "py-2 d-block" }, [
                  _vm._v(
                    "Lorem ipsum dolor sit amet, consectetur ipsum dolor sit amet, consectetur ipsum dolor."
                  )
                ])
              ]),
              _vm._v(" "),
              _c("vs-button", { attrs: { color: "primary", type: "border" } }, [
                _vm._v("Read More")
              ])
            ],
            1
          )
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "vs-col",
        { attrs: { "vs-lg": "3", "vs-sm": "6", "vs-xs": "12" } },
        [
          _c(
            "vs-card",
            { attrs: { actionable: "" } },
            [
              _c("div", { attrs: { slot: "header" }, slot: "header" }, [
                _c("h5", { staticClass: "font-weight-bold" }, [
                  _vm._v("Hello world !")
                ])
              ]),
              _vm._v(" "),
              _c("div", { attrs: { slot: "media" }, slot: "media" }, [
                _c("img", { attrs: { src: "assets/images/big/img3.jpg" } })
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "mb-2" }, [
                _c("h6", { staticClass: "mb-2" }, [
                  _vm._v("\n          23\n          "),
                  _c("sup", [_vm._v("rd")]),
                  _vm._v(" oct 2020\n        ")
                ]),
                _vm._v(" "),
                _c("span", { staticClass: "py-2 d-block" }, [
                  _vm._v(
                    "Lorem ipsum dolor sit amet, consectetur ipsum dolor sit amet, consectetur ipsum dolor."
                  )
                ])
              ]),
              _vm._v(" "),
              _c("vs-button", { attrs: { color: "primary", type: "border" } }, [
                _vm._v("Read More")
              ])
            ],
            1
          )
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "vs-col",
        { attrs: { "vs-lg": "3", "vs-sm": "6", "vs-xs": "12" } },
        [
          _c(
            "vs-card",
            { attrs: { actionable: "" } },
            [
              _c("div", { attrs: { slot: "header" }, slot: "header" }, [
                _c("h5", { staticClass: "font-weight-bold" }, [
                  _vm._v("Hello world !")
                ])
              ]),
              _vm._v(" "),
              _c("div", { attrs: { slot: "media" }, slot: "media" }, [
                _c("img", { attrs: { src: "assets/images/big/img1.jpg" } })
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "mb-2" }, [
                _c("h6", { staticClass: "mb-2" }, [
                  _vm._v("\n          23\n          "),
                  _c("sup", [_vm._v("rd")]),
                  _vm._v(" oct 2020\n        ")
                ]),
                _vm._v(" "),
                _c("span", { staticClass: "py-2 d-block" }, [
                  _vm._v(
                    "Lorem ipsum dolor sit amet, consectetur ipsum dolor sit amet, consectetur ipsum dolor."
                  )
                ])
              ]),
              _vm._v(" "),
              _c("vs-button", { attrs: { color: "primary", type: "border" } }, [
                _vm._v("Read More")
              ])
            ],
            1
          )
        ],
        1
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/SalesDifference.vue?vue&type=template&id=05143514&":
/*!*******************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/SalesDifference.vue?vue&type=template&id=05143514& ***!
  \*******************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("LineAreaChart")
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/SalesOverview.vue?vue&type=template&id=a0bc59e0&":
/*!*****************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/SalesOverview.vue?vue&type=template&id=a0bc59e0& ***!
  \*****************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "table-responsive" }, [
    _c("table", { staticClass: "table v-middle border" }, [
      _vm._m(0),
      _vm._v(" "),
      _c("tbody", [
        _c("tr", [
          _c("td", [_vm._v("1")]),
          _vm._v(" "),
          _vm._m(1),
          _vm._v(" "),
          _vm._m(2),
          _vm._v(" "),
          _c("td", [_vm._v("April 18, 2017")]),
          _vm._v(" "),
          _vm._m(3),
          _vm._v(" "),
          _c("td", [
            _c("div", { staticClass: "d-flex" }, [
              _c(
                "a",
                {
                  staticClass: "text-success mr-2",
                  attrs: { href: "javascript:void(0)" }
                },
                [_c("vs-icon", { attrs: { icon: "add_circle" } })],
                1
              ),
              _vm._v(" "),
              _c(
                "a",
                {
                  staticClass: "text-danger",
                  attrs: { href: "javascript:void(0)" }
                },
                [_c("vs-icon", { attrs: { icon: "delete_sweep" } })],
                1
              )
            ])
          ])
        ]),
        _vm._v(" "),
        _c("tr", [
          _c("td", [_vm._v("2")]),
          _vm._v(" "),
          _vm._m(4),
          _vm._v(" "),
          _vm._m(5),
          _vm._v(" "),
          _c("td", [_vm._v("April 19, 2017")]),
          _vm._v(" "),
          _vm._m(6),
          _vm._v(" "),
          _c("td", [
            _c("div", { staticClass: "d-flex" }, [
              _c(
                "a",
                {
                  staticClass: "text-success mr-2",
                  attrs: { href: "javascript:void(0)" }
                },
                [_c("vs-icon", { attrs: { icon: "add_circle" } })],
                1
              ),
              _vm._v(" "),
              _c(
                "a",
                {
                  staticClass: "text-danger",
                  attrs: { href: "javascript:void(0)" }
                },
                [_c("vs-icon", { attrs: { icon: "delete_sweep" } })],
                1
              )
            ])
          ])
        ]),
        _vm._v(" "),
        _c("tr", [
          _c("td", [_vm._v("3")]),
          _vm._v(" "),
          _vm._m(7),
          _vm._v(" "),
          _vm._m(8),
          _vm._v(" "),
          _c("td", [_vm._v("April 19, 2017")]),
          _vm._v(" "),
          _vm._m(9),
          _vm._v(" "),
          _c("td", [
            _c("div", { staticClass: "d-flex" }, [
              _c(
                "a",
                {
                  staticClass: "text-success mr-2",
                  attrs: { href: "javascript:void(0)" }
                },
                [_c("vs-icon", { attrs: { icon: "add_circle" } })],
                1
              ),
              _vm._v(" "),
              _c(
                "a",
                {
                  staticClass: "text-danger",
                  attrs: { href: "javascript:void(0)" }
                },
                [_c("vs-icon", { attrs: { icon: "delete_sweep" } })],
                1
              )
            ])
          ])
        ]),
        _vm._v(" "),
        _c("tr", [
          _c("td", [_vm._v("4")]),
          _vm._v(" "),
          _vm._m(10),
          _vm._v(" "),
          _vm._m(11),
          _vm._v(" "),
          _c("td", [_vm._v("April 20, 2017")]),
          _vm._v(" "),
          _vm._m(12),
          _vm._v(" "),
          _c("td", [
            _c("div", { staticClass: "d-flex" }, [
              _c(
                "a",
                {
                  staticClass: "text-success mr-2",
                  attrs: { href: "javascript:void(0)" }
                },
                [_c("vs-icon", { attrs: { icon: "add_circle" } })],
                1
              ),
              _vm._v(" "),
              _c(
                "a",
                {
                  staticClass: "text-danger",
                  attrs: { href: "javascript:void(0)" }
                },
                [_c("vs-icon", { attrs: { icon: "delete_sweep" } })],
                1
              )
            ])
          ])
        ]),
        _vm._v(" "),
        _c("tr", [
          _c("td", [_vm._v("5")]),
          _vm._v(" "),
          _vm._m(13),
          _vm._v(" "),
          _vm._m(14),
          _vm._v(" "),
          _c("td", [_vm._v("April 21, 2017")]),
          _vm._v(" "),
          _vm._m(15),
          _vm._v(" "),
          _c("td", [
            _c("div", { staticClass: "d-flex" }, [
              _c(
                "a",
                {
                  staticClass: "text-success mr-2",
                  attrs: { href: "javascript:void(0)" }
                },
                [_c("vs-icon", { attrs: { icon: "add_circle" } })],
                1
              ),
              _vm._v(" "),
              _c(
                "a",
                {
                  staticClass: "text-danger",
                  attrs: { href: "javascript:void(0)" }
                },
                [_c("vs-icon", { attrs: { icon: "delete_sweep" } })],
                1
              )
            ])
          ])
        ]),
        _vm._v(" "),
        _c("tr", [
          _c("td", [_vm._v("6")]),
          _vm._v(" "),
          _vm._m(16),
          _vm._v(" "),
          _vm._m(17),
          _vm._v(" "),
          _c("td", [_vm._v("April 23, 2017")]),
          _vm._v(" "),
          _vm._m(18),
          _vm._v(" "),
          _c("td", [
            _c("div", { staticClass: "d-flex" }, [
              _c(
                "a",
                {
                  staticClass: "text-success mr-2",
                  attrs: { href: "javascript:void(0)" }
                },
                [_c("vs-icon", { attrs: { icon: "add_circle" } })],
                1
              ),
              _vm._v(" "),
              _c(
                "a",
                {
                  staticClass: "text-danger",
                  attrs: { href: "javascript:void(0)" }
                },
                [_c("vs-icon", { attrs: { icon: "delete_sweep" } })],
                1
              )
            ])
          ])
        ]),
        _vm._v(" "),
        _c("tr", [
          _c("td", [_vm._v("7")]),
          _vm._v(" "),
          _vm._m(19),
          _vm._v(" "),
          _vm._m(20),
          _vm._v(" "),
          _c("td", [_vm._v("April 22, 2017")]),
          _vm._v(" "),
          _vm._m(21),
          _vm._v(" "),
          _c("td", [
            _c("div", { staticClass: "d-flex" }, [
              _c(
                "a",
                {
                  staticClass: "text-success mr-2",
                  attrs: { href: "javascript:void(0)" }
                },
                [_c("vs-icon", { attrs: { icon: "add_circle" } })],
                1
              ),
              _vm._v(" "),
              _c(
                "a",
                {
                  staticClass: "text-danger",
                  attrs: { href: "javascript:void(0)" }
                },
                [_c("vs-icon", { attrs: { icon: "delete_sweep" } })],
                1
              )
            ])
          ])
        ]),
        _vm._v(" "),
        _c("tr", [
          _c("td", [_vm._v("8")]),
          _vm._v(" "),
          _vm._m(22),
          _vm._v(" "),
          _vm._m(23),
          _vm._v(" "),
          _c("td", [_vm._v("April 19, 2017")]),
          _vm._v(" "),
          _vm._m(24),
          _vm._v(" "),
          _c("td", [
            _c("div", { staticClass: "d-flex" }, [
              _c(
                "a",
                {
                  staticClass: "text-success mr-2",
                  attrs: { href: "javascript:void(0)" }
                },
                [_c("vs-icon", { attrs: { icon: "add_circle" } })],
                1
              ),
              _vm._v(" "),
              _c(
                "a",
                {
                  staticClass: "text-danger",
                  attrs: { href: "javascript:void(0)" }
                },
                [_c("vs-icon", { attrs: { icon: "delete_sweep" } })],
                1
              )
            ])
          ])
        ])
      ])
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("thead", [
      _c("tr", {}, [
        _c("th", { staticClass: "border-top-0" }, [_vm._v("#")]),
        _vm._v(" "),
        _c("th", { staticClass: "border-top-0" }, [_vm._v("NAME")]),
        _vm._v(" "),
        _c("th", { staticClass: "border-top-0" }, [_vm._v("STATUS")]),
        _vm._v(" "),
        _c("th", { staticClass: "border-top-0" }, [_vm._v("DATE")]),
        _vm._v(" "),
        _c("th", { staticClass: "border-top-0" }, [_vm._v("PRICE")]),
        _vm._v(" "),
        _c("th", { staticClass: "border-top-0" }, [_vm._v("ACTION")])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("td", [_c("span", [_vm._v("Elite admin")])])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("td", [
      _c(
        "span",
        {
          staticClass:
            "font-weight-normal badge badge-success badge-pill px-2 py-1"
        },
        [_vm._v("Sale")]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("td", [
      _c("h5", { staticClass: "mb-0 text-success" }, [_vm._v("$24")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("td", [_c("span", [_vm._v("Real Homes")])])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("td", [
      _c(
        "span",
        {
          staticClass:
            "font-weight-normal badge badge-info badge-pill px-2 py-1"
        },
        [_vm._v("extended")]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("td", [
      _c("h5", { staticClass: "mb-0 text-info" }, [_vm._v("$1250")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("td", [_c("span", [_vm._v("Ample Admin")])])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("td", [
      _c(
        "span",
        {
          staticClass:
            "font-weight-normal badge badge-info badge-pill px-2 py-1"
        },
        [_vm._v("extended")]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("td", [
      _c("h5", { staticClass: "mb-0 text-info" }, [_vm._v("$1250")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("td", [_c("span", [_vm._v("Medical Pro")])])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("td", [
      _c(
        "span",
        {
          staticClass:
            "font-weight-normal badge badge-danger badge-pill px-2 py-1"
        },
        [_vm._v("Tax")]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("td", [
      _c("h5", { staticClass: "mb-0 text-danger" }, [_vm._v("-$24")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("td", [_c("span", [_vm._v("Hosting press html")])])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("td", [
      _c(
        "span",
        {
          staticClass:
            "font-weight-normal badge badge-success badge-pill px-2 py-1"
        },
        [_vm._v("Sale")]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("td", [
      _c("h5", { staticClass: "mb-0 text-success" }, [_vm._v("$24")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("td", [_c("span", [_vm._v("Digital Agency PSD")])])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("td", [
      _c(
        "span",
        {
          staticClass:
            "font-weight-normal badge badge-success badge-pill px-2 py-1"
        },
        [_vm._v("Sale")]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("td", [
      _c("h5", { staticClass: "mb-0 text-danger" }, [_vm._v("-$14")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("td", [_c("span", [_vm._v("Helping Hands")])])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("td", [
      _c(
        "span",
        {
          staticClass:
            "font-weight-normal badge badge-warning badge-pill px-2 py-1"
        },
        [_vm._v("member")]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("td", [
      _c("h5", { staticClass: "mb-0 text-success" }, [_vm._v("$64")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("td", [_c("span", [_vm._v("Ample Admin")])])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("td", [
      _c(
        "span",
        {
          staticClass:
            "font-weight-normal badge badge-info badge-pill px-2 py-1"
        },
        [_vm._v("extended")]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("td", [
      _c("h5", { staticClass: "mb-0 text-info" }, [_vm._v("$1250")])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/States.vue?vue&type=template&id=40056aa7&":
/*!**********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/States.vue?vue&type=template&id=40056aa7& ***!
  \**********************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "vs-row",
    [
      _c(
        "vs-col",
        { attrs: { "vs-lg": "3", "vs-xs": "12" } },
        [
          _c(
            "vs-card",
            [
              _c("h3", { staticClass: "mb-1 font-weight-normal" }, [
                _vm._v("86%")
              ]),
              _vm._v(" "),
              _c("span", { staticClass: "text-muted" }, [
                _vm._v("Total Product")
              ]),
              _vm._v(" "),
              _c("vs-progress", { attrs: { percent: 70, color: "success" } }, [
                _vm._v("success")
              ])
            ],
            1
          )
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "vs-col",
        { attrs: { "vs-lg": "3", "vs-xs": "12" } },
        [
          _c(
            "vs-card",
            [
              _c("h3", { staticClass: "mb-1 font-weight-normal" }, [
                _vm._v("40%")
              ]),
              _vm._v(" "),
              _c("span", { staticClass: "text-muted" }, [
                _vm._v("Pending Product")
              ]),
              _vm._v(" "),
              _c("vs-progress", { attrs: { percent: 25, color: "primary" } }, [
                _vm._v("primary")
              ])
            ],
            1
          )
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "vs-col",
        { attrs: { "vs-lg": "3", "vs-xs": "12" } },
        [
          _c(
            "vs-card",
            [
              _c("h3", { staticClass: "mb-1 font-weight-normal" }, [
                _vm._v("56%")
              ]),
              _vm._v(" "),
              _c("span", { staticClass: "text-muted" }, [
                _vm._v("Yearly Sales")
              ]),
              _vm._v(" "),
              _c("vs-progress", { attrs: { percent: 50, color: "warning" } }, [
                _vm._v("warning")
              ])
            ],
            1
          )
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "vs-col",
        { attrs: { "vs-lg": "3", "vs-xs": "12" } },
        [
          _c(
            "vs-card",
            [
              _c("h3", { staticClass: "mb-1 font-weight-normal" }, [
                _vm._v("30%")
              ]),
              _vm._v(" "),
              _c("span", { staticClass: "text-muted" }, [
                _vm._v("Company Growth")
              ]),
              _vm._v(" "),
              _c("vs-progress", { attrs: { percent: 78, color: "dark" } }, [
                _vm._v("dark")
              ])
            ],
            1
          )
        ],
        1
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/YearlySales.vue?vue&type=template&id=af7ec966&":
/*!***************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/dashboard/YearlySales.vue?vue&type=template&id=af7ec966& ***!
  \***************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("LineChart")
}
var staticRenderFns = []
render._withStripped = true



/***/ })

}]);