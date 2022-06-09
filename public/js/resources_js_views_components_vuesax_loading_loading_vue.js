(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_views_components_vuesax_loading_loading_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/vuesax/loading/loading.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/vuesax/loading/loading.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************************************************************************************************************************************************/
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
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
  name: "list",
  data: function data() {
    return {
      title: "List",
      defaultloading: false,
      loadingtype: false,
      types: ["default", "point", "radius", "corners", "border", "sound", "material"],
      activeLoading: false,
      loadingcolor: false,
      colorLoading: "#2962ff",
      loadingbgcolor: false,
      backgroundLoading: "#2962ff",
      containedloading: false
    };
  },
  methods: {
    openLoading: function openLoading() {
      var _this = this;

      this.$vs.loading();
      setTimeout(function () {
        _this.$vs.loading.close();
      }, 2000);
    },
    openLoading2: function openLoading2(type) {
      var _this2 = this;

      this.activeLoading = true;
      this.$vs.loading({
        type: type
      });
      setTimeout(function () {
        _this2.activeLoading = false;

        _this2.$vs.loading.close();
      }, 3000);
    },
    openLoadingColor: function openLoadingColor() {
      var _this3 = this;

      this.$vs.loading({
        color: this.colorLoading
      });
      setTimeout(function () {
        _this3.$vs.loading.close();
      }, 2000);
    },
    openLoadingBackground: function openLoadingBackground() {
      var _this4 = this;

      this.$vs.loading({
        background: this.backgroundLoading,
        color: "rgb(255, 255, 255)"
      });
      setTimeout(function () {
        _this4.$vs.loading.close();
      }, 3000);
    },
    openLoadingContained: function openLoadingContained() {
      var _this5 = this;

      this.$vs.loading({
        background: this.backgroundLoading,
        color: this.colorLoading,
        container: this.refs.loadableButton,
        scale: 0.45
      });
      setTimeout(function () {
        _this5.$vs.loading.close(_this5.refs.loadableButton);
      }, 3000);
    },
    openLoadingInDiv: function openLoadingInDiv() {
      var _this6 = this;

      this.$vs.loading({
        container: "#div-with-loading",
        scale: 0.6
      });
      setTimeout(function () {
        _this6.$vs.loading.close("#div-with-loading > .con-vs-loading");
      }, 3000);
    }
  },
  mounted: function mounted() {
    var _this7 = this;

    this.types.forEach(function (type) {
      _this7.$vs.loading({
        container: "#loading-".concat(type),
        type: type,
        text: type
      });
    });
  }
});

/***/ }),

/***/ "./resources/js/views/components/vuesax/loading/loading.vue":
/*!******************************************************************!*\
  !*** ./resources/js/views/components/vuesax/loading/loading.vue ***!
  \******************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _loading_vue_vue_type_template_id_7f141ea8___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./loading.vue?vue&type=template&id=7f141ea8& */ "./resources/js/views/components/vuesax/loading/loading.vue?vue&type=template&id=7f141ea8&");
/* harmony import */ var _loading_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./loading.vue?vue&type=script&lang=js& */ "./resources/js/views/components/vuesax/loading/loading.vue?vue&type=script&lang=js&");
Object(function webpackMissingModule() { var e = new Error("Cannot find module './loading.vue?vue&type=style&index=0&lang=scss&'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! !../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");



;


/* normalize component */

var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__.default)(
  _loading_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _loading_vue_vue_type_template_id_7f141ea8___WEBPACK_IMPORTED_MODULE_0__.render,
  _loading_vue_vue_type_template_id_7f141ea8___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/views/components/vuesax/loading/loading.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/views/components/vuesax/loading/loading.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************!*\
  !*** ./resources/js/views/components/vuesax/loading/loading.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_loading_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./loading.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/vuesax/loading/loading.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_loading_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/views/components/vuesax/loading/loading.vue?vue&type=template&id=7f141ea8&":
/*!*************************************************************************************************!*\
  !*** ./resources/js/views/components/vuesax/loading/loading.vue?vue&type=template&id=7f141ea8& ***!
  \*************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_loading_vue_vue_type_template_id_7f141ea8___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_loading_vue_vue_type_template_id_7f141ea8___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_loading_vue_vue_type_template_id_7f141ea8___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./loading.vue?vue&type=template&id=7f141ea8& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/vuesax/loading/loading.vue?vue&type=template&id=7f141ea8&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/vuesax/loading/loading.vue?vue&type=template&id=7f141ea8&":
/*!****************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/vuesax/loading/loading.vue?vue&type=template&id=7f141ea8& ***!
  \****************************************************************************************************************************************************************************************************************************************/
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
    { attrs: { "vs-justify": "center" } },
    [
      _c(
        "vs-col",
        {
          attrs: {
            type: "flex",
            "vs-justify": "center",
            "vs-align": "center",
            "vs-lg": "12",
            "vs-xs": "12"
          }
        },
        [
          _c(
            "vs-card",
            [
              _c(
                "h4",
                { staticClass: "card-title d-flex" },
                [
                  _vm._v("\n        Default loading\n        "),
                  _c(
                    "vs-button",
                    {
                      staticClass: "ml-auto p-0",
                      attrs: { type: "line" },
                      on: {
                        click: function($event) {
                          _vm.defaultloading = true
                        }
                      }
                    },
                    [_c("vs-icon", { attrs: { icon: "code" } })],
                    1
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c("p", { staticClass: "card-subtitle" }, [
                _vm._v(
                  "\n        To add a loading in any part of your application we have the global function\n        "
                ),
                _c("code", [_vm._v("$vs.loading ()")]),
                _vm._v(
                  ", and then when you want to remove it we have\n        "
                ),
                _c("code", [_vm._v("$vs.loading.close()")]),
                _vm._v(".\n      ")
              ]),
              _vm._v(" "),
              _c(
                "vs-button",
                {
                  attrs: { type: "filled", color: "primary" },
                  on: { click: _vm.openLoading }
                },
                [_vm._v("Loading Default")]
              ),
              _vm._v(" "),
              _c(
                "vs-popup",
                {
                  staticClass: "holamundo",
                  attrs: { title: "Code", active: _vm.defaultloading },
                  on: {
                    "update:active": function($event) {
                      _vm.defaultloading = $event
                    }
                  }
                },
                [
                  _c("vs-prism", [
                    _vm._v(
                      '\n          <template lang="html">\n          <div class="centerx">\n          <vs-button @click="openLoading" type="filled" color="primary">Loading Default</vs-button>\n          </div>\n          </template>\n          <script>\n          export default {\n          methods:{\n          openLoading(){\n          this.$vs.loading()\n          setTimeout( ()=> {\n          this.$vs.loading.close()\n          }, 2000);\n          },\n          }\n          }\n          </script>\n        '
                    )
                  ])
                ],
                1
              )
            ],
            1
          ),
          _vm._v(" "),
          _c(
            "vs-card",
            [
              _c(
                "h4",
                { staticClass: "card-title d-flex" },
                [
                  _vm._v("\n        Loading Type\n        "),
                  _c(
                    "vs-button",
                    {
                      staticClass: "ml-auto p-0",
                      attrs: { type: "line" },
                      on: {
                        click: function($event) {
                          _vm.loadingtype = true
                        }
                      }
                    },
                    [_c("vs-icon", { attrs: { icon: "code" } })],
                    1
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c("p", { staticClass: "card-subtitle" }, [
                _vm._v("\n        You can change the\n        "),
                _c("code", [_vm._v("type")]),
                _vm._v(
                  " of animation with the type property and the animations so far are:\n      "
                )
              ]),
              _vm._v(" "),
              _c(
                "ul",
                { staticClass: "list-group list-group-horizontal-lg mb-3" },
                [
                  _c("li", { staticClass: "list-group-item rounded-0 py-2" }, [
                    _c("span", [_vm._v("point")])
                  ]),
                  _vm._v(" "),
                  _c("li", { staticClass: "list-group-item py-2" }, [
                    _c("span", [_vm._v("radius")])
                  ]),
                  _vm._v(" "),
                  _c("li", { staticClass: "list-group-item py-2" }, [
                    _c("span", [_vm._v("border")])
                  ]),
                  _vm._v(" "),
                  _c("li", { staticClass: "list-group-item py-2" }, [
                    _c("span", [_vm._v("corners")])
                  ]),
                  _vm._v(" "),
                  _c("li", { staticClass: "list-group-item py-2" }, [
                    _c("span", [_vm._v("sound")])
                  ]),
                  _vm._v(" "),
                  _c("li", { staticClass: "list-group-item rounded-0 py-2" }, [
                    _c("span", [_vm._v("material")])
                  ])
                ]
              ),
              _vm._v(" "),
              _c(
                "div",
                {
                  staticClass:
                    "fill-row-loading d-flex align-items-center justify-content-center"
                },
                _vm._l(_vm.types, function(type) {
                  return _c("div", {
                    key: type,
                    staticClass: "vs-con-loading__container loading-example",
                    class: { activeLoading: _vm.activeLoading },
                    attrs: { id: ["loading-" + type] },
                    on: {
                      click: function($event) {
                        return _vm.openLoading2(type)
                      }
                    }
                  })
                }),
                0
              ),
              _vm._v(" "),
              _c(
                "vs-popup",
                {
                  staticClass: "holamundo",
                  attrs: { title: "Code", active: _vm.loadingtype },
                  on: {
                    "update:active": function($event) {
                      _vm.loadingtype = $event
                    }
                  }
                },
                [
                  _c("vs-prism", [
                    _vm._v(
                      '\n          <template lang="html">\n          <div class="demo-alignment">\n          <div class="fill-row-loading">\n          <div :class="{\'activeLoading\':activeLoading}" @click="openLoading(type)" v-for="type in types" :id="[`loading-${type}`]" class="vs-con-loading__container loading-example">\n          </div>\n          </div>\n          </div>\n          </template>\n          <script>\n          export default {\n          data:()=>({\n          types:[\n          \'default\',\n          \'point\',\n          \'radius\',\n          \'corners\',\n          \'border\',\n          \'sound\',\n          \'material\',\n          ],\n          activeLoading:false,\n          }),\n          mounted(){\n          this.types.forEach((type)=>{\n          this.$vs.loading({\n          container: `#loading-${type}`,\n          type,\n          text:type\n          })\n          })\n          },\n          methods:{\n          openLoading(type){\n          this.activeLoading = true\n          this.$vs.loading({\n          type:type,\n          })\n          setTimeout( ()=> {\n          this.activeLoading = false\n          this.$vs.loading.close()\n          }, 3000);\n          },\n          }\n          }\n          </script>\n          <style lang="scss">\n          .fill-row-loading {\n          display: flex;\n          align-items: center;\n          justify-content: center;\n          flex-wrap: wrap;\n          .loading-example {\n          width: 120px;\n          float: left;\n          height: 120px;\n          box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.05);\n          border-radius: 10px;\n          margin: 8px;\n          transition: all 0.3s ease;\n          cursor: pointer;\n          &:hover {\n          box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.05);\n          transform: translate(0, 4px);\n          }\n          h4 {\n          z-index: 40000;\n          position: relative;\n          text-align: center;\n          padding: 10px;\n          }\n          &.activeLoading {\n          opacity: 0 !important;\n          transform: scale(0.5);\n          }\n          }\n          }\n          </style>\n        '
                    )
                  ])
                ],
                1
              )
            ],
            1
          ),
          _vm._v(" "),
          _c(
            "vs-card",
            [
              _c(
                "h4",
                { staticClass: "card-title d-flex" },
                [
                  _vm._v("\n        Loading Color\n        "),
                  _c(
                    "vs-button",
                    {
                      staticClass: "ml-auto p-0",
                      attrs: { type: "line" },
                      on: {
                        click: function($event) {
                          _vm.loadingcolor = true
                        }
                      }
                    },
                    [_c("vs-icon", { attrs: { icon: "code" } })],
                    1
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c("p", { staticClass: "card-subtitle" }, [
                _vm._v(
                  "\n        You can change the color of the loading with the property\n        "
                ),
                _c("code", [_vm._v("color")]),
                _vm._v(".\n      ")
              ]),
              _vm._v(" "),
              _c(
                "div",
                {},
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.colorLoading,
                        expression: "colorLoading"
                      }
                    ],
                    attrs: { type: "color", name: "", value: "" },
                    domProps: { value: _vm.colorLoading },
                    on: {
                      input: function($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.colorLoading = $event.target.value
                      }
                    }
                  }),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      staticClass: "ml-3",
                      attrs: { type: "gradient", color: "primary" },
                      on: { click: _vm.openLoadingColor }
                    },
                    [_vm._v("Primary")]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "vs-popup",
                {
                  staticClass: "holamundo",
                  attrs: { title: "Code", active: _vm.loadingcolor },
                  on: {
                    "update:active": function($event) {
                      _vm.loadingcolor = $event
                    }
                  }
                },
                [
                  _c("vs-prism", [
                    _vm._v(
                      '\n          <template lang="html">\n          <div class="centerx">\n          <input type="color" v-model="colorLoading" name="" value="">\n          <vs-button @click="openLoadingColor" type="gradient" color="danger">Danger</vs-button>\n          </div>\n          </template>\n          <script>\n          export default {\n          data(){\n          return {\n          colorLoading:\'#7d0c3f\',\n          }\n          },\n          methods:{\n          openLoadingColor(){\n          this.$vs.loading({color:this.colorLoading})\n          setTimeout( ()=> {\n          this.$vs.loading.close()\n          }, 2000);\n          },\n          }\n          }\n          </script>\n        '
                    )
                  ])
                ],
                1
              )
            ],
            1
          ),
          _vm._v(" "),
          _c(
            "vs-card",
            [
              _c(
                "h4",
                { staticClass: "card-title d-flex" },
                [
                  _vm._v("\n        Loading Backgroundcolor\n        "),
                  _c(
                    "vs-button",
                    {
                      staticClass: "ml-auto p-0",
                      attrs: { type: "line" },
                      on: {
                        click: function($event) {
                          _vm.loadingbgcolor = true
                        }
                      }
                    },
                    [_c("vs-icon", { attrs: { icon: "code" } })],
                    1
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c("p", { staticClass: "card-subtitle" }, [
                _vm._v(
                  "\n        If you need to change the background of the loading, you can use the property\n        "
                ),
                _c("code", [_vm._v("background")]),
                _vm._v(".\n      ")
              ]),
              _vm._v(" "),
              _c(
                "div",
                {},
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.backgroundLoading,
                        expression: "backgroundLoading"
                      }
                    ],
                    attrs: { type: "color", name: "", value: "" },
                    domProps: { value: _vm.backgroundLoading },
                    on: {
                      input: function($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.backgroundLoading = $event.target.value
                      }
                    }
                  }),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      staticClass: "ml-3",
                      attrs: { type: "gradient", color: "primary" },
                      on: { click: _vm.openLoadingBackground }
                    },
                    [_vm._v("Primary")]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "vs-popup",
                {
                  staticClass: "holamundo",
                  attrs: { title: "Code", active: _vm.loadingbgcolor },
                  on: {
                    "update:active": function($event) {
                      _vm.loadingbgcolor = $event
                    }
                  }
                },
                [
                  _c("vs-prism", [
                    _vm._v(
                      '\n          <template lang="html">\n          <div class="centerx">\n          <input type="color" v-model="backgroundLoading" name="" value="">\n          <vs-button @click="openLoadingBackground" type="gradient" color="success">Success</vs-button>\n          </div>\n          </template>\n          <script>\n          export default {\n          data(){\n          return {\n          backgroundLoading:\'#22c16b\',\n          }\n          },\n          methods:{\n          openLoadingBackground(){\n          this.$vs.loading({background:this.backgroundLoading,color:\'rgb(255, 255, 255)\'})\n          setTimeout( ()=> {\n          this.$vs.loading.close()\n          }, 3000);\n          },\n          }\n          }\n          </script>\n        '
                    )
                  ])
                ],
                1
              )
            ],
            1
          ),
          _vm._v(" "),
          _c(
            "vs-card",
            [
              _c(
                "h4",
                { staticClass: "card-title d-flex" },
                [
                  _vm._v("\n        Loading Contained\n        "),
                  _c(
                    "vs-button",
                    {
                      staticClass: "ml-auto p-0",
                      attrs: { type: "line" },
                      on: {
                        click: function($event) {
                          _vm.containedloading = true
                        }
                      }
                    },
                    [_c("vs-icon", { attrs: { icon: "code" } })],
                    1
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c("p", { staticClass: "card-subtitle" }, [
                _vm._v(
                  "\n        To add a loading within a container, call the\n        "
                ),
                _c("code", [_vm._v("$ vs.loading ()")]),
                _vm._v(" global function passing the\n        "),
                _c("code", [_vm._v("container")]),
                _vm._v(" and the\n        "),
                _c("code", [_vm._v("scale")]),
                _vm._v(
                  " parameters. When you want to remove it we have\n        "
                ),
                _c("code", [_vm._v("$ vs.loading.close ()")]),
                _vm._v(", passing the\n        "),
                _c("code", [_vm._v("same")]),
                _vm._v(" container parameter.\n      ")
              ]),
              _vm._v(" "),
              _c(
                "div",
                {},
                [
                  _c(
                    "vs-button",
                    {
                      ref: "loadableButton",
                      staticClass: "vs-con-loading__container",
                      attrs: {
                        id: "button-with-loading",
                        type: "relief",
                        vslor: "primary"
                      },
                      on: { click: _vm.openLoadingContained }
                    },
                    [_vm._v("Button with Loading")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      staticClass: "ml-3",
                      attrs: { type: "relief", vslor: "primary" },
                      on: { click: _vm.openLoadingInDiv }
                    },
                    [_vm._v("Div with Loading")]
                  ),
                  _vm._v(" "),
                  _c(
                    "div",
                    { staticClass: "fill-row px-3 py-5 w-25 mt-3 shadow" },
                    [
                      _c(
                        "div",
                        {
                          staticClass: "vs-con-loading__container",
                          attrs: { id: "div-with-loading" }
                        },
                        [_vm._v("Load Me!")]
                      )
                    ]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "vs-popup",
                {
                  staticClass: "holamundo",
                  attrs: { title: "Code", active: _vm.containedloading },
                  on: {
                    "update:active": function($event) {
                      _vm.containedloading = $event
                    }
                  }
                },
                [_c("vs-prism")],
                1
              )
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



/***/ })

}]);