(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_views_components_vuesax_dialog_dialog_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/vuesax/dialog/dialog.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/vuesax/dialog/dialog.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************************************************************************/
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
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "dialog",
  data: function data() {
    return {
      title: "Dialog",
      defaultalert: false,
      colorAlert: "primary",
      titleAlert: "Alert",
      activeAlert: false,
      valueInput: "",
      activeConfirm: false,
      confirmalert: false,
      select1: 2,
      options1: [{
        text: "IT",
        value: 0
      }, {
        text: "Blade Runner",
        value: 2
      }, {
        text: "Thor Ragnarok",
        value: 3
      }],
      activePrompt: false,
      activePrompt2: false,
      val: "",
      valMultipe: {
        value1: "",
        value2: ""
      },
      promtalert: false
    };
  },
  computed: {
    validName: function validName() {
      return this.valMultipe.value1.length > 0 && this.valMultipe.value2.length > 0;
    }
  },
  methods: {
    openAlert: function openAlert(color) {
      this.colorAlert = color || this.getColorRandom();
      this.$vs.dialog({
        color: this.colorAlert,
        title: "Dialog - ".concat(this.colorAlert),
        text: "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        accept: this.acceptAlert
      });
    },
    acceptAlert: function acceptAlert() {
      this.$vs.notify({
        color: this.colorAlert,
        title: "Accept Selected",
        text: "Lorem ipsum dolor sit amet, consectetur"
      });
    },
    getColorRandom: function getColorRandom() {
      function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min)) + min;
      }

      return "rgb(".concat(getRandomInt(0, 255), ",").concat(getRandomInt(0, 255), ",").concat(getRandomInt(0, 255), ")");
    },
    openConfirm: function openConfirm() {
      this.$vs.dialog({
        type: "confirm",
        color: "primary",
        title: "Confirm",
        text: "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        accept: this.acceptAlert2
      });
    },
    acceptAlert2: function acceptAlert2() {
      this.$vs.notify({
        color: "primary",
        title: "Deleted image",
        text: "The selected image was successfully deleted"
      });
    },
    acceptAlert3: function acceptAlert3() {
      this.$vs.notify({
        color: "success",
        title: "Accept Selected",
        text: "Lorem ipsum dolor sit amet, consectetur"
      });
    },
    close: function close() {
      this.$vs.notify({
        color: "danger",
        title: "Closed",
        text: "You close a dialog!"
      });
    }
  }
});

/***/ }),

/***/ "./resources/js/views/components/vuesax/dialog/dialog.vue":
/*!****************************************************************!*\
  !*** ./resources/js/views/components/vuesax/dialog/dialog.vue ***!
  \****************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _dialog_vue_vue_type_template_id_0c7465ee___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./dialog.vue?vue&type=template&id=0c7465ee& */ "./resources/js/views/components/vuesax/dialog/dialog.vue?vue&type=template&id=0c7465ee&");
/* harmony import */ var _dialog_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./dialog.vue?vue&type=script&lang=js& */ "./resources/js/views/components/vuesax/dialog/dialog.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _dialog_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _dialog_vue_vue_type_template_id_0c7465ee___WEBPACK_IMPORTED_MODULE_0__.render,
  _dialog_vue_vue_type_template_id_0c7465ee___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/views/components/vuesax/dialog/dialog.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/views/components/vuesax/dialog/dialog.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************!*\
  !*** ./resources/js/views/components/vuesax/dialog/dialog.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_dialog_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./dialog.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/vuesax/dialog/dialog.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_dialog_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/views/components/vuesax/dialog/dialog.vue?vue&type=template&id=0c7465ee&":
/*!***********************************************************************************************!*\
  !*** ./resources/js/views/components/vuesax/dialog/dialog.vue?vue&type=template&id=0c7465ee& ***!
  \***********************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_dialog_vue_vue_type_template_id_0c7465ee___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_dialog_vue_vue_type_template_id_0c7465ee___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_dialog_vue_vue_type_template_id_0c7465ee___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./dialog.vue?vue&type=template&id=0c7465ee& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/vuesax/dialog/dialog.vue?vue&type=template&id=0c7465ee&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/vuesax/dialog/dialog.vue?vue&type=template&id=0c7465ee&":
/*!**************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/components/vuesax/dialog/dialog.vue?vue&type=template&id=0c7465ee& ***!
  \**************************************************************************************************************************************************************************************************************************************/
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
                  _vm._v("\n        With Alert\n        "),
                  _c(
                    "vs-button",
                    {
                      staticClass: "ml-auto p-0",
                      attrs: { type: "line" },
                      on: {
                        click: function($event) {
                          _vm.defaultalert = true
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
                  "\n        To generate a dialog we have the global function\n        "
                ),
                _c("code", [_vm._v("$vs.dialog")]),
                _vm._v(" the parameters to generate the dialog are\n      ")
              ]),
              _vm._v(" "),
              _c(
                "vs-row",
                [
                  _c(
                    "vs-col",
                    { attrs: { "vs-lg": "8", "vs-xs": "12" } },
                    [
                      _c(
                        "vs-list",
                        [
                          _c("vs-list-item", {
                            attrs: {
                              title: "title",
                              subtitle: "title of the dialogue - String"
                            }
                          }),
                          _vm._v(" "),
                          _c("vs-list-item", {
                            attrs: {
                              title: "text",
                              subtitle: "internal text of the dialog - String"
                            }
                          }),
                          _vm._v(" "),
                          _c("vs-list-item", {
                            attrs: {
                              title: "color",
                              subtitle:
                                "color of the component - Colors, RGB, HEX"
                            }
                          }),
                          _vm._v(" "),
                          _c("vs-list-item", {
                            attrs: {
                              title: "accept",
                              subtitle:
                                "function that executes the user accept the dialog - Function"
                            }
                          }),
                          _vm._v(" "),
                          _c("vs-list-item", {
                            attrs: {
                              title: "cancel",
                              subtitle:
                                "function that executes the user to cancel the dialog (if it is a confirm type) - Function"
                            }
                          }),
                          _vm._v(" "),
                          _c("vs-list-item", {
                            attrs: {
                              title: "type",
                              subtitle:
                                "determines the type of dialog (alert or confirm) - alert, confirm"
                            }
                          }),
                          _vm._v(" "),
                          _c("vs-list-item", {
                            attrs: {
                              title: "buttonAccept",
                              subtitle:
                                "determines the type of accept button - Boolean"
                            }
                          }),
                          _vm._v(" "),
                          _c("vs-list-item", {
                            attrs: {
                              title: "buttonCancel",
                              subtitle:
                                "determines the type of cancel button - Boolean"
                            }
                          })
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
              _c(
                "div",
                { staticClass: "m-3 btn-alignment" },
                [
                  _c(
                    "vs-button",
                    {
                      attrs: { color: "primary", type: "flat" },
                      on: {
                        click: function($event) {
                          return _vm.openAlert("primary")
                        }
                      }
                    },
                    [_vm._v("Alert Primary")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      attrs: { color: "success", type: "flat" },
                      on: {
                        click: function($event) {
                          return _vm.openAlert("success")
                        }
                      }
                    },
                    [_vm._v("Alert Success")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      attrs: { color: "danger", type: "flat" },
                      on: {
                        click: function($event) {
                          return _vm.openAlert("danger")
                        }
                      }
                    },
                    [_vm._v("Alert Danger")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      attrs: { color: "warning", type: "flat" },
                      on: {
                        click: function($event) {
                          return _vm.openAlert("warning")
                        }
                      }
                    },
                    [_vm._v("Alert Warning")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      attrs: { color: "dark", type: "flat" },
                      on: {
                        click: function($event) {
                          return _vm.openAlert("dark")
                        }
                      }
                    },
                    [_vm._v("Alert Dark")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      attrs: { color: "primary", type: "gradient" },
                      on: {
                        click: function($event) {
                          return _vm.openAlert(null)
                        }
                      }
                    },
                    [_vm._v("Alert Color RGB | HEX")]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "vs-popup",
                {
                  staticClass: "holamundo",
                  attrs: { title: "Code", active: _vm.defaultalert },
                  on: {
                    "update:active": function($event) {
                      _vm.defaultalert = $event
                    }
                  }
                },
                [
                  _c("vs-prism", [
                    _vm._v(
                      '\n          <div class="m-3 btn-alignment">\n          <vs-button @click="openAlert(\'primary\')" color="primary" type="flat">Alert Primary</vs-button>\n          <vs-button @click="openAlert(\'success\')" color="success" type="flat">Alert Success</vs-button>\n          <vs-button @click="openAlert(\'danger\')" color="danger" type="flat">Alert Danger</vs-button>\n          <vs-button @click="openAlert(\'warning\')" color="warning" type="flat">Alert Warning</vs-button>\n          <vs-button @click="openAlert(\'dark\')" color="dark" type="flat">Alert Dark</vs-button>\n          <vs-button @click="openAlert(null)" color="primary" type="gradient">Alert Color RGB | HEX</vs-button>\n          </div>\n          <script>\n          export default {\n          data:()=>({\n          colorAlert:\'primary\',\n          titleAlert:\'Alert\',\n          activeAlert:false,\n          valueInput:\'\',\n          }),\n          methods:{\n          openAlert(color){\n          this.colorAlert = color || this.getColorRandom()\n          this.$vs.dialog({\n          color:this.colorAlert,\n          title: `Dialog - ${this.colorAlert}`,\n          text: \'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\',\n          accept:this.acceptAlert\n          })\n          },\n          acceptAlert(){\n          this.$vs.notify({\n          color:this.colorAlert,\n          title:\'Accept Selected\',\n          text:\'Lorem ipsum dolor sit amet, consectetur\'\n          })\n          },\n          getColorRandom(){\n          function getRandomInt(min, max) {\n          return Math.floor(Math.random() * (max - min)) + min;\n          }\n          return `rgb(${getRandomInt(0,255)},${getRandomInt(0,255)},${getRandomInt(0,255)})`\n          },\n          }\n          }\n          </script>\n        '
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
                  _vm._v("\n        With Confirm Alert\n        "),
                  _c(
                    "vs-button",
                    {
                      staticClass: "ml-auto p-0",
                      attrs: { type: "line" },
                      on: {
                        click: function($event) {
                          _vm.confirmalert = true
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
                  "If you need a dialog of type confirm you can do it just by changing the type as a parameter inside the main function."
                )
              ]),
              _vm._v(" "),
              _c(
                "div",
                [
                  _c(
                    "vs-button",
                    {
                      attrs: { color: "primary", type: "gradient" },
                      on: {
                        click: function($event) {
                          return _vm.openConfirm()
                        }
                      }
                    },
                    [_vm._v("Alert Primary")]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "vs-popup",
                {
                  staticClass: "holamundo",
                  attrs: { title: "Code", active: _vm.confirmalert },
                  on: {
                    "update:active": function($event) {
                      _vm.confirmalert = $event
                    }
                  }
                },
                [
                  _c("vs-prism", [
                    _vm._v(
                      "\n          <div>\n          <vs-button @click=\"openConfirm()\" color=\"danger\" type=\"gradient\">Alert Primary</vs-button>\n          </div>\n          <script>\n          export default {\n          data: () => ({\n          activeConfirm: false\n          }),\n          methods: {\n          openConfirm() {\n          this.$vs.dialog({\n          type: 'confirm',\n          color: 'danger',\n          title: `Confirm`,\n          text: 'Cake sesame snaps cupcake gingerbread danish I love gingerbread. Apple pie pie jujubes chupa chups.',\n          accept: this.acceptAlert\n          })\n          },\n          acceptAlert() {\n          this.$vs.notify({\n          color: 'danger',\n          title: 'Deleted image',\n          text: 'The selected image was successfully deleted'\n          })\n          },\n          }\n          }\n          </script>\n        "
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
                  _vm._v("\n        With Promt Alert\n        "),
                  _c(
                    "vs-button",
                    {
                      staticClass: "ml-auto p-0",
                      attrs: { type: "line" },
                      on: {
                        click: function($event) {
                          _vm.promtalert = true
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
                  "\n        To add a dialog of type prompt we have a global function a completely independent component\n        "
                ),
                _c("code", [_vm._v("vs-prompt")]),
                _vm._v(
                  ". This allows more flexibility with the input and ability to add any type of input and components.\n      "
                )
              ]),
              _vm._v(" "),
              _c(
                "vs-row",
                [
                  _c("vs-col", { attrs: { "vs-lg": "6", "vs-xs": "12" } }, [
                    _c(
                      "div",
                      { staticClass: "d-flex align-items-center" },
                      [
                        _c(
                          "vs-button",
                          {
                            attrs: { color: "primary", type: "border" },
                            on: {
                              click: function($event) {
                                _vm.activePrompt = true
                              }
                            }
                          },
                          [_vm._v("Run prompt")]
                        ),
                        _vm._v(" "),
                        _c(
                          "div",
                          {
                            staticClass:
                              "modelx bg-light p-3 shadow ml-3 rounded-pill"
                          },
                          [
                            _c(
                              "span",
                              {
                                staticClass:
                                  "text-primary font-weight-bold border-bottom pb-1 border-primary mr-3"
                              },
                              [_vm._v("Security Code Here:")]
                            ),
                            _vm._v(
                              "\n              " +
                                _vm._s(_vm.val == null ? "null" : _vm.val) +
                                "\n            "
                            )
                          ]
                        )
                      ],
                      1
                    )
                  ]),
                  _vm._v(" "),
                  _c("vs-col", { attrs: { "vs-lg": "6", "vs-xs": "12" } }, [
                    _c(
                      "div",
                      { staticClass: "d-flex align-items-center" },
                      [
                        _c(
                          "vs-button",
                          {
                            attrs: { color: "primary", type: "border" },
                            on: {
                              click: function($event) {
                                _vm.activePrompt2 = true
                              }
                            }
                          },
                          [_vm._v("Run prompt inputs")]
                        ),
                        _vm._v(" "),
                        _c(
                          "div",
                          {
                            staticClass:
                              "modelx bg-light p-3 shadow ml-3 rounded-pill"
                          },
                          [
                            _c(
                              "span",
                              {
                                staticClass:
                                  "text-primary font-weight-bold border-bottom pb-1 border-primary mr-3"
                              },
                              [_vm._v("Name Here:")]
                            ),
                            _vm._v(" "),
                            _c(
                              "span",
                              { staticClass: "mr-3 border-right pr-3" },
                              [_vm._v(_vm._s(_vm.valMultipe.value1))]
                            ),
                            _vm._v(" "),
                            _c(
                              "span",
                              {
                                staticClass:
                                  "text-primary font-weight-bold border-bottom pb-1 border-primary mr-3"
                              },
                              [_vm._v("Last Name Here:")]
                            ),
                            _vm._v(
                              "\n              " +
                                _vm._s(_vm.valMultipe.value2) +
                                "\n            "
                            )
                          ]
                        )
                      ],
                      1
                    )
                  ])
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "vs-prompt",
                {
                  attrs: { active: _vm.activePrompt },
                  on: {
                    cancel: function($event) {
                      _vm.val = ""
                    },
                    accept: _vm.acceptAlert3,
                    close: _vm.close,
                    "update:active": function($event) {
                      _vm.activePrompt = $event
                    }
                  }
                },
                [
                  _c(
                    "div",
                    { staticClass: "p-2 pb-0" },
                    [
                      _vm._v("\n          Enter the security code\n          "),
                      _c("vs-input", {
                        staticClass: "mb-3",
                        attrs: { placeholder: "Code" },
                        model: {
                          value: _vm.val,
                          callback: function($$v) {
                            _vm.val = $$v
                          },
                          expression: "val"
                        }
                      }),
                      _vm._v(" "),
                      _c(
                        "vs-select",
                        {
                          staticClass: "selectExample",
                          attrs: { label: "Figuras" },
                          model: {
                            value: _vm.select1,
                            callback: function($$v) {
                              _vm.select1 = $$v
                            },
                            expression: "select1"
                          }
                        },
                        _vm._l(_vm.options1, function(item, index) {
                          return _c("vs-select-item", {
                            key: index,
                            attrs: { value: item.value, text: item.text }
                          })
                        }),
                        1
                      )
                    ],
                    1
                  )
                ]
              ),
              _vm._v(" "),
              _c(
                "vs-prompt",
                {
                  attrs: {
                    color: "danger",
                    "is-valid": _vm.validName,
                    active: _vm.activePrompt2
                  },
                  on: {
                    cancel: function($event) {
                      ;(_vm.valMultipe.value1 = ""),
                        (_vm.valMultipe.value2 = "")
                    },
                    accept: _vm.acceptAlert3,
                    close: _vm.close,
                    "update:active": function($event) {
                      _vm.activePrompt2 = $event
                    }
                  }
                },
                [
                  _c(
                    "div",
                    { staticClass: "con-exemple-prompt" },
                    [
                      _vm._v(
                        "\n          Enter your first and last name to\n          "
                      ),
                      _c("b", [_vm._v("continue")]),
                      _vm._v(".\n          "),
                      _c("vs-input", {
                        staticClass: "mb-3",
                        attrs: { placeholder: "Name" },
                        model: {
                          value: _vm.valMultipe.value1,
                          callback: function($$v) {
                            _vm.$set(_vm.valMultipe, "value1", $$v)
                          },
                          expression: "valMultipe.value1"
                        }
                      }),
                      _vm._v(" "),
                      _c("vs-input", {
                        staticClass: "mb-3",
                        attrs: { placeholder: "Last Name" },
                        model: {
                          value: _vm.valMultipe.value2,
                          callback: function($$v) {
                            _vm.$set(_vm.valMultipe, "value2", $$v)
                          },
                          expression: "valMultipe.value2"
                        }
                      }),
                      _vm._v(" "),
                      _c(
                        "vs-alert",
                        {
                          attrs: {
                            active: !_vm.validName,
                            color: "danger",
                            icon: "new_releases"
                          }
                        },
                        [
                          _vm._v(
                            "Fields can not be empty please enter the data"
                          )
                        ]
                      )
                    ],
                    1
                  )
                ]
              ),
              _vm._v(" "),
              _c(
                "vs-popup",
                {
                  staticClass: "holamundo",
                  attrs: { title: "Code", active: _vm.promtalert },
                  on: {
                    "update:active": function($event) {
                      _vm.promtalert = $event
                    }
                  }
                },
                [
                  _c("vs-prism", [
                    _vm._v(
                      '\n          <template lang="html">\n          <div class="centerx con-exemple-prompt">\n          <!-- <vs-button @click="openPrompt" color="primary" type="border">Run prompt</vs-button> -->\n          <div class="modelx">\n          ' +
                        _vm._s(_vm.val == null ? "null" : _vm.val) +
                        '\n          </div>\n          <vs-button @click="activePrompt = true" color="primary" type="border">Run prompt</vs-button>\n          <div class="modelx">\n          ' +
                        _vm._s(_vm.valMultipe.value1) +
                        "\n          " +
                        _vm._s(_vm.valMultipe.value2) +
                        '\n          </div>\n          <vs-button @click="activePrompt2 = true" color="primary" type="border">Run prompt inputs</vs-button>\n          <vs-prompt\n          @cancel="val=\'\'"\n          @accept="acceptAlert"\n          @close="close"\n          :active.sync="activePrompt">\n          <div class="con-exemple-prompt">\n          Enter the security code\n          <vs-input placeholder="Code" placeholder="Code" v-model="val"/>\n          <vs-select\n          class="selectExample"\n          label="Figuras"\n          v-model="select1"\n          >\n          <vs-select-item :key="index" :value="item.value" :text="item.text" v-for="item,index in options1" />\n          </vs-select>\n          </div>\n          </vs-prompt>\n          <vs-prompt\n          color="danger"\n          @cancel="valMultipe.value1=\'\',valMultipe.value2=\'\'"\n          @accept="acceptAlert"\n          @close="close"\n          :is-valid="validName"\n          :active.sync="activePrompt2">\n          <div class="con-exemple-prompt">\n          Enter your first and last name to <b>continue</b>.\n          <vs-input placeholder="Name" v-model="valMultipe.value1"/>\n          <vs-input placeholder="Last Name" v-model="valMultipe.value2"/>\n          <vs-alert :active="!validName" color="danger" icon="new_releases" >\n          Fields can not be empty please enter the data\n          </vs-alert>\n          </div>\n          </vs-prompt>\n          </div>\n          </template>\n          <script>\n          import Vue from \'vue\'\n          export default {\n          data(){\n          return {\n          select1:2,\n          options1:[\n          {text:\'IT\',value:0},\n          {text:\'Blade Runner\',value:2},\n          {text:\'Thor Ragnarok\',value:3},\n          ],\n          activePrompt:false,\n          activePrompt2:false,\n          val:\'\',\n          valMultipe:{\n          value1:\'\',\n          value2:\'\'\n          },\n          }\n          },\n          computed:{\n          validName(){\n          return (this.valMultipe.value1.length > 0 && this.valMultipe.value2.length > 0)\n          }\n          },\n          methods:{\n          acceptAlert(color){\n          this.$vs.notify({\n          color:\'success\',\n          title:\'Accept Selected\',\n          text:\'Lorem ipsum dolor sit amet, consectetur\'\n          })\n          },\n          close(){\n          this.$vs.notify({\n          color:\'danger\',\n          title:\'Closed\',\n          text:\'You close a dialog!\'\n          })\n          },\n          }\n          }\n          </script>\n        '
                    )
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
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ })

}]);