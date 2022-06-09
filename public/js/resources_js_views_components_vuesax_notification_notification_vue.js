(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_views_components_vuesax_notification_notification_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/vuesax/notification/notification.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/vuesax/notification/notification.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************************************************************************************/
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
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
  name: "notification",
  data: function data() {
    return {
      title: "Notification",
      defaultnotification: false,
      posnotification: false,
      iconnotification: false,
      funnotification: false,
      timenotification: false
    };
  },
  methods: {
    random: function random() {
      function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min)) + min;
      }

      var color = "rgb(".concat(getRandomInt(0, 255), ",").concat(getRandomInt(0, 255), ",").concat(getRandomInt(0, 255), ")");
      this.$vs.notify({
        title: "Color",
        text: "Lorem ipsum dolor sit amet, consectetur",
        color: color
      });
    },
    randomCenter: function randomCenter() {
      function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min)) + min;
      }

      var color = "rgb(".concat(getRandomInt(0, 255), ",").concat(getRandomInt(0, 255), ",").concat(getRandomInt(0, 255), ")");
      this.$vs.notify({
        title: "Position top-center",
        text: "Lorem ipsum dolor sit amet, consectetur",
        color: color,
        position: "top-center"
      });
    },
    randomIcon: function randomIcon() {
      function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min)) + min;
      }

      var color = "rgb(".concat(getRandomInt(0, 255), ",").concat(getRandomInt(0, 255), ",").concat(getRandomInt(0, 255), ")");
      this.$vs.notify({
        title: "Icon mail",
        text: "Lorem ipsum dolor sit amet, consectetur",
        color: color,
        icon: "verified_user"
      });
    },
    myFunction: function myFunction() {
      var _this = this;

      this.$vs.notify({
        title: "Function click",
        text: "Click on me",
        color: "primary",
        fixed: true,
        click: function click() {
          // Secondary function
          _this.$vs.notify({
            title: "Secondary function",
            text: "Executed the function when clicking",
            color: "success",
            icon: "check_box"
          });
        }
      });
    }
  }
});

/***/ }),

/***/ "./resources/js/views/components/vuesax/notification/notification.vue":
/*!****************************************************************************!*\
  !*** ./resources/js/views/components/vuesax/notification/notification.vue ***!
  \****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _notification_vue_vue_type_template_id_c8c049e4___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./notification.vue?vue&type=template&id=c8c049e4& */ "./resources/js/views/components/vuesax/notification/notification.vue?vue&type=template&id=c8c049e4&");
/* harmony import */ var _notification_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./notification.vue?vue&type=script&lang=js& */ "./resources/js/views/components/vuesax/notification/notification.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _notification_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _notification_vue_vue_type_template_id_c8c049e4___WEBPACK_IMPORTED_MODULE_0__.render,
  _notification_vue_vue_type_template_id_c8c049e4___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/views/components/vuesax/notification/notification.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/views/components/vuesax/notification/notification.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************!*\
  !*** ./resources/js/views/components/vuesax/notification/notification.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_notification_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./notification.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/vuesax/notification/notification.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_notification_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/views/components/vuesax/notification/notification.vue?vue&type=template&id=c8c049e4&":
/*!***********************************************************************************************************!*\
  !*** ./resources/js/views/components/vuesax/notification/notification.vue?vue&type=template&id=c8c049e4& ***!
  \***********************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_notification_vue_vue_type_template_id_c8c049e4___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_notification_vue_vue_type_template_id_c8c049e4___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_notification_vue_vue_type_template_id_c8c049e4___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./notification.vue?vue&type=template&id=c8c049e4& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/vuesax/notification/notification.vue?vue&type=template&id=c8c049e4&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/vuesax/notification/notification.vue?vue&type=template&id=c8c049e4&":
/*!**************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/vuesax/notification/notification.vue?vue&type=template&id=c8c049e4& ***!
  \**************************************************************************************************************************************************************************************************************************************************/
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
                  _vm._v("\n        Default Notification\n        "),
                  _c(
                    "vs-button",
                    {
                      staticClass: "ml-auto p-0",
                      attrs: { type: "line" },
                      on: {
                        click: function($event) {
                          _vm.defaultnotification = true
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
                  "\n        To add a notification we have the global function\n        "
                ),
                _c("code", [_vm._v("$vs.notify")]),
                _vm._v(
                  ". The first parameter is a json with all the necessary attributes, or if we only want the standard notification we can only add a string with the text of the notification.\n      "
                )
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "btn-alignment" },
                [
                  _c(
                    "vs-button",
                    {
                      attrs: { color: "primary", type: "flat" },
                      on: {
                        click: function($event) {
                          return _vm.$vs.notify({
                            title: "Primary",
                            text: "Lorem ipsum dolor sit amet, consectetur",
                            color: "primary"
                          })
                        }
                      }
                    },
                    [_vm._v("Notification Primary")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      attrs: { color: "success", type: "flat" },
                      on: {
                        click: function($event) {
                          return _vm.$vs.notify({
                            title: "Success",
                            text: "Lorem ipsum dolor sit amet, consectetur",
                            color: "success"
                          })
                        }
                      }
                    },
                    [_vm._v("Notification Success")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      attrs: { color: "danger", type: "flat" },
                      on: {
                        click: function($event) {
                          return _vm.$vs.notify({
                            title: "Danger",
                            text: "Lorem ipsum dolor sit amet, consectetur",
                            color: "danger"
                          })
                        }
                      }
                    },
                    [_vm._v("Notification Danger")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      attrs: { color: "warning", type: "flat" },
                      on: {
                        click: function($event) {
                          return _vm.$vs.notify({
                            title: "Warning",
                            text: "Lorem ipsum dolor sit amet, consectetur",
                            color: "warning"
                          })
                        }
                      }
                    },
                    [_vm._v("Notification Warning")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      attrs: { color: "dark", type: "flat" },
                      on: {
                        click: function($event) {
                          return _vm.$vs.notify({
                            title: "dark",
                            text: "Lorem ipsum dolor sit amet, consectetur",
                            color: "dark"
                          })
                        }
                      }
                    },
                    [_vm._v("Notification Dark")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      attrs: { color: "success", type: "gradient" },
                      on: {
                        click: function($event) {
                          return _vm.random()
                        }
                      }
                    },
                    [_vm._v("Notification Random Color")]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "vs-popup",
                {
                  staticClass: "holamundo",
                  attrs: { title: "Code", active: _vm.defaultnotification },
                  on: {
                    "update:active": function($event) {
                      _vm.defaultnotification = $event
                    }
                  }
                },
                [
                  _c("vs-prism", [
                    _vm._v(
                      '\n          <template lang="html">\n          <div class="con-notifications">\n          <vs-button @click="$vs.notify({title:\'Default\',text:\'Lorem ipsum dolor sit amet, consectetur\'})" color="primary" type="border">Notification white</vs-button>\n          <vs-button @click="$vs.notify({title:\'Primary\',text:\'Lorem ipsum dolor sit amet, consectetur\',color:\'primary\'})" color="primary" type="flat">Notification Primary</vs-button>\n          <vs-button @click="$vs.notify({title:\'Success\',text:\'Lorem ipsum dolor sit amet, consectetur\',color:\'success\'})" color="success" type="flat">Notification Success</vs-button>\n          <vs-button @click="$vs.notify({title:\'Danger\',text:\'Lorem ipsum dolor sit amet, consectetur\',color:\'danger\'})" color="danger" type="flat">Notification Danger</vs-button>\n          <vs-button @click="$vs.notify({title:\'Warning\',text:\'Lorem ipsum dolor sit amet, consectetur\',color:\'warning\'})" color="warning" type="flat">Notification Warning</vs-button>\n          <vs-button @click="$vs.notify({title:\'dark\',text:\'Lorem ipsum dolor sit amet, consectetur\',color:\'dark\'})" color="dark" type="flat">Notification Dark</vs-button>\n          <vs-button @click="random()" color="success" type="gradient">Notification Random Color</vs-button>\n          </div>\n          </template>\n          <script>\n          export default {\n          methods:{\n          random(){\n          function getRandomInt(min, max) {\n          return Math.floor(Math.random() * (max - min)) + min;\n          }\n          let color = `rgb(${getRandomInt(0,255)},${getRandomInt(0,255)},${getRandomInt(0,255)})`\n          this.$vs.notify({\n          title:\'Color\',\n          text:\'Lorem ipsum dolor sit amet, consectetur\',\n          color:color\n          })\n          },\n          }\n          }\n          </script>\n        '
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
                  _vm._v("\n        Notification Position\n        "),
                  _c(
                    "vs-button",
                    {
                      staticClass: "ml-auto p-0",
                      attrs: { type: "line" },
                      on: {
                        click: function($event) {
                          _vm.posnotification = true
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
                  "\n        We can change the place where the notification appears with the property\n        "
                ),
                _c("code", [_vm._v("position")]),
                _vm._v(". A practical example would be:\n        "),
                _c("code", [_vm._v("position: 'top-right'")]),
                _vm._v(". The supported values are:\n      ")
              ]),
              _vm._v(" "),
              _c(
                "ul",
                { staticClass: "list-group list-group-horizontal-lg mb-3" },
                [
                  _c("li", { staticClass: "list-group-item rounded-0 py-2" }, [
                    _c("span", [_vm._v("top-right")])
                  ]),
                  _vm._v(" "),
                  _c("li", { staticClass: "list-group-item rounded-0 py-2" }, [
                    _c("span", [_vm._v("top-left")])
                  ]),
                  _vm._v(" "),
                  _c("li", { staticClass: "list-group-item rounded-0 py-2" }, [
                    _c("span", [_vm._v("bottom-left")])
                  ]),
                  _vm._v(" "),
                  _c("li", { staticClass: "list-group-item rounded-0 py-2" }, [
                    _c("span", [_vm._v("bottom-center")])
                  ]),
                  _vm._v(" "),
                  _c("li", { staticClass: "list-group-item rounded-0 py-2" }, [
                    _c("span", [_vm._v("top-center")])
                  ])
                ]
              ),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "btn-alignment" },
                [
                  _c(
                    "vs-button",
                    {
                      attrs: { color: "primary", type: "flat" },
                      on: {
                        click: function($event) {
                          return _vm.$vs.notify({
                            title: "Position Default",
                            text: "Lorem ipsum dolor sit amet, consectetur",
                            color: "primary"
                          })
                        }
                      }
                    },
                    [_vm._v("Position Default")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      attrs: { color: "success", type: "flat" },
                      on: {
                        click: function($event) {
                          return _vm.$vs.notify({
                            title: "Position top-right",
                            text: "Lorem ipsum dolor sit amet, consectetur",
                            color: "success",
                            position: "top-right"
                          })
                        }
                      }
                    },
                    [_vm._v("Position Top Right")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      attrs: { color: "danger", type: "flat" },
                      on: {
                        click: function($event) {
                          return _vm.$vs.notify({
                            title: "Position top-left",
                            text: "Lorem ipsum dolor sit amet, consectetur",
                            color: "danger",
                            position: "top-left"
                          })
                        }
                      }
                    },
                    [_vm._v("Position Top Left")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      attrs: { color: "warning", type: "flat" },
                      on: {
                        click: function($event) {
                          return _vm.$vs.notify({
                            title: "Position bottom-left",
                            text: "Lorem ipsum dolor sit amet, consectetur",
                            color: "warning",
                            position: "bottom-left"
                          })
                        }
                      }
                    },
                    [_vm._v("Position Bottom Left")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      attrs: { color: "dark", type: "flat" },
                      on: {
                        click: function($event) {
                          return _vm.$vs.notify({
                            title: "Position bottom-center",
                            text: "Lorem ipsum dolor sit amet, consectetur",
                            color: "dark",
                            position: "bottom-center"
                          })
                        }
                      }
                    },
                    [_vm._v("Position Bottom Center")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      attrs: { color: "success", type: "gradient" },
                      on: {
                        click: function($event) {
                          return _vm.randomCenter()
                        }
                      }
                    },
                    [_vm._v("Position Top Center Random Color")]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "vs-popup",
                {
                  staticClass: "holamundo",
                  attrs: { title: "Code", active: _vm.posnotification },
                  on: {
                    "update:active": function($event) {
                      _vm.posnotification = $event
                    }
                  }
                },
                [
                  _c("vs-prism", [
                    _vm._v(
                      "\n          <template lang=\"html\">\n          <div class=\"con-notifications-position\">\n          <vs-button @click=\"$vs.notify({title:'Position Default',text:'Lorem ipsum dolor sit amet, consectetur',color:'primary'})\" color=\"primary\" type=\"flat\">Position Default</vs-button>\n          <vs-button @click=\"$vs.notify({title:'Position top-right',text:'Lorem ipsum dolor sit amet, consectetur',color:'success',position:'top-right'})\" color=\"success\" type=\"flat\">Position Top Right</vs-button>\n          <vs-button @click=\"$vs.notify({title:'Position top-left',text:'Lorem ipsum dolor sit amet, consectetur',color:'danger',position:'top-left'})\" color=\"danger\" type=\"flat\">Position Top Left</vs-button>\n          <vs-button @click=\"$vs.notify({title:'Position bottom-left',text:'Lorem ipsum dolor sit amet, consectetur',color:'warning',position:'bottom-left'})\" color=\"warning\" type=\"flat\">Position Bottom Left</vs-button>\n          <vs-button @click=\"$vs.notify({title:'Position bottom-center',text:'Lorem ipsum dolor sit amet, consectetur',color:'dark',position:'bottom-center'})\" color=\"dark\" type=\"flat\"> Position Bottom Center</vs-button>\n          <vs-button @click=\"randomCenter()\" color=\"success\" type=\"gradient\">Position Top Center Random Color</vs-button>\n          </div>\n          </template>\n          <script>\n          export default {\n          methods:{\n          randomCenter(){\n          function getRandomInt(min, max) {\n          return Math.floor(Math.random() * (max - min)) + min;\n          }\n          let color = `rgb(${getRandomInt(0,255)},${getRandomInt(0,255)},${getRandomInt(0,255)})`\n          this.$vs.notify({title:'Position top-center',text:'Lorem ipsum dolor sit amet, consectetur',color:color,position:'top-center'})\n          }\n          }\n          }\n          </script>\n        "
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
                  _vm._v("\n        Notification Icon\n        "),
                  _c(
                    "vs-button",
                    {
                      staticClass: "ml-auto p-0",
                      attrs: { type: "line" },
                      on: {
                        click: function($event) {
                          _vm.iconnotification = true
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
                  "\n        Notifications can include icons to improve the user experience and to construct a more pleasant and intuitive notification. To make this, use the\n        "
                ),
                _c("code", [_vm._v("icon")]),
                _vm._v(" property. A practical example would be:\n        "),
                _c("code", [_vm._v("icon: 'chat'")]),
                _vm._v(".\n      ")
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "btn-alignment" },
                [
                  _c(
                    "vs-button",
                    {
                      attrs: { color: "primary", type: "flat" },
                      on: {
                        click: function($event) {
                          return _vm.$vs.notify({
                            title: "Icon mail",
                            text: "Lorem ipsum dolor sit amet, consectetur",
                            color: "primary",
                            icon: "mail"
                          })
                        }
                      }
                    },
                    [_vm._v("Icon Mail")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      attrs: { color: "success", type: "flat" },
                      on: {
                        click: function($event) {
                          return _vm.$vs.notify({
                            title: "Icon mail",
                            text: "Lorem ipsum dolor sit amet, consectetur",
                            color: "success",
                            icon: "check_box"
                          })
                        }
                      }
                    },
                    [_vm._v("Icon check_box")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      attrs: { color: "danger", type: "flat" },
                      on: {
                        click: function($event) {
                          return _vm.$vs.notify({
                            title: "Icon mail",
                            text: "Lorem ipsum dolor sit amet, consectetur",
                            color: "danger",
                            icon: "favorite"
                          })
                        }
                      }
                    },
                    [_vm._v("Icon favorite")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      attrs: { color: "warning", type: "flat" },
                      on: {
                        click: function($event) {
                          return _vm.$vs.notify({
                            title: "Icon mail",
                            text: "Lorem ipsum dolor sit amet, consectetur",
                            color: "warning",
                            icon: "error"
                          })
                        }
                      }
                    },
                    [_vm._v("Icon error")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      attrs: { color: "dark", type: "flat" },
                      on: {
                        click: function($event) {
                          return _vm.$vs.notify({
                            title: "Icon mail",
                            text: "Lorem ipsum dolor sit amet, consectetur",
                            color: "dark",
                            icon: "chat"
                          })
                        }
                      }
                    },
                    [_vm._v("Icon chat")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      attrs: { color: "success", type: "gradient" },
                      on: {
                        click: function($event) {
                          return _vm.randomIcon()
                        }
                      }
                    },
                    [_vm._v("Icon Random Color")]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "vs-popup",
                {
                  staticClass: "holamundo",
                  attrs: { title: "Code", active: _vm.iconnotification },
                  on: {
                    "update:active": function($event) {
                      _vm.iconnotification = $event
                    }
                  }
                },
                [
                  _c("vs-prism", [
                    _vm._v(
                      "\n          <template lang=\"html\">\n          <div class=\"centerx\">\n          <vs-button @click=\"$vs.notify({title:'Icon mail',text:'Lorem ipsum dolor sit amet, consectetur',color:'primary',icon:'mail'})\" color=\"primary\" type=\"flat\">Icon Mail</vs-button>\n          <vs-button @click=\"$vs.notify({title:'Icon mail',text:'Lorem ipsum dolor sit amet, consectetur',color:'success',icon:'check_box'})\" color=\"success\" type=\"flat\">Icon check_box</vs-button>\n          <vs-button @click=\"$vs.notify({title:'Icon mail',text:'Lorem ipsum dolor sit amet, consectetur',color:'danger',icon:'favorite'})\" color=\"danger\" type=\"flat\">Icon favorite</vs-button>\n          <vs-button @click=\"$vs.notify({title:'Icon mail',text:'Lorem ipsum dolor sit amet, consectetur',color:'warning',icon:'error'})\" color=\"warning\" type=\"flat\">Icon error</vs-button>\n          <vs-button @click=\"$vs.notify({title:'Icon mail',text:'Lorem ipsum dolor sit amet, consectetur',color:'dark',icon:'chat'})\" color=\"dark\" type=\"flat\">Icon chat</vs-button>\n          <vs-button @click=\"randomIcon()\" color=\"success\" type=\"gradient\">Icon Random Color</vs-button>\n          </div>\n          </template>\n          <script>\n          export default {\n          methods:{\n          randomIcon(){\n          function getRandomInt(min, max) {\n          return Math.floor(Math.random() * (max - min)) + min;\n          }\n          let color = `rgb(${getRandomInt(0,255)},${getRandomInt(0,255)},${getRandomInt(0,255)})`\n          this.$vs.notify({title:'Icon mail',text:'Lorem ipsum dolor sit amet, consectetur',color:color,icon:'verified_user'})\n          }\n          }\n          }\n          </script>\n        "
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
                  _vm._v("\n        Fixed and Function click\n        "),
                  _c(
                    "vs-button",
                    {
                      staticClass: "ml-auto p-0",
                      attrs: { type: "line" },
                      on: {
                        click: function($event) {
                          _vm.funnotification = true
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
                  "\n        Sometimes we need to execute a function when the user clicks on the notification. For this, pass a function to the click property. Example:\n        "
                ),
                _c("code", [_vm._v("click:()=>{ ... }")])
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "btn-alignment" },
                [
                  _c(
                    "vs-button",
                    {
                      attrs: { type: "flat" },
                      on: {
                        click: function($event) {
                          return _vm.myFunction()
                        }
                      }
                    },
                    [_vm._v("Run Example")]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "vs-popup",
                {
                  staticClass: "holamundo",
                  attrs: { title: "Code", active: _vm.funnotification },
                  on: {
                    "update:active": function($event) {
                      _vm.funnotification = $event
                    }
                  }
                },
                [
                  _c("vs-prism", [
                    _vm._v(
                      "\n          <template lang=\"html\">\n          <div class=\"centerx\">\n          <vs-button @click=\"myFunction()\" type=\"flat\">Run Example</vs-button>\n          </div>\n          </template>\n          <script>\n          export default {\n          methods:{\n          myFunction(){\n          this.$vs.notify({\n          title:'Function click',\n          text:'Click on me',\n          color:'primary',\n          fixed:true,\n          click:()=>{\n          // Secondary function\n          this.$vs.notify({\n          title:'Secondary function',\n          text:'Executed the function when clicking',\n          color:'success',\n          icon:'check_box'\n          })\n          },\n          })\n          },\n          }\n          }\n          </script>\n        "
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
                  _vm._v("\n        Time Notification\n        "),
                  _c(
                    "vs-button",
                    {
                      staticClass: "ml-auto p-0",
                      attrs: { type: "line" },
                      on: {
                        click: function($event) {
                          _vm.timenotification = true
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
                  "\n        You can change the total time that the notification stays on the screen with the time property. Example:\n        "
                ),
                _c("code", [_vm._v("time: 4000")]),
                _vm._v(".\n      ")
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "btn-alignment" },
                [
                  _c(
                    "vs-button",
                    {
                      attrs: { color: "primary", type: "flat" },
                      on: {
                        click: function($event) {
                          return _vm.$vs.notify({
                            title: "Time default",
                            text: "Lorem ipsum dolor sit amet consectetur",
                            color: "primary",
                            icon: "query_builder"
                          })
                        }
                      }
                    },
                    [_vm._v("Time default")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      attrs: { color: "primary", type: "flat" },
                      on: {
                        click: function($event) {
                          _vm.$vs.notify({
                            time: 4000,
                            title: "Time 4s (4000)",
                            text: "Lorem ipsum dolor sit amet consectetur",
                            color: "primary",
                            icon: "query_builder"
                          })
                        }
                      }
                    },
                    [_vm._v("Time 4s (4000)")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      attrs: { color: "primary", type: "flat" },
                      on: {
                        click: function($event) {
                          _vm.$vs.notify({
                            time: 8000,
                            title: "Time 8s (8000)",
                            text: "Lorem ipsum dolor sit amet consectetur",
                            color: "primary",
                            icon: "query_builder"
                          })
                        }
                      }
                    },
                    [_vm._v("Time 8s (8000)")]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "vs-popup",
                {
                  staticClass: "holamundo",
                  attrs: { title: "Code", active: _vm.timenotification },
                  on: {
                    "update:active": function($event) {
                      _vm.timenotification = $event
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