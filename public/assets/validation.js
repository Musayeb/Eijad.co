! jQuery Validation Plugin - v1.19.1 - 6152019
  httpsjqueryvalidation.org
  Copyright (c) 2019 Jörn Zaefferer; Licensed MIT 
!function(a){function==typeof define&&define.amddefine([jquery],a)object==typeof module&&module.exportsmodule.exports=a(require(jquery))a(jQuery)}(function(a){a.extend(a.fn,{validatefunction(b){if(!this.length)return void(b&&b.debug&&window.console&&console.warn(Nothing selected, can't validate, returning nothing.));var c=a.data(this[0],validator);return cc(this.attr(novalidate,novalidate),c=new a.validator(b,this[0]),a.data(this[0],validator,c),c.settings.onsubmit&&(this.on(click.validate,submit,function(b){c.submitButton=b.currentTarget,a(this).hasClass(cancel)&&(c.cancelSubmit=!0),void 0!==a(this).attr(formnovalidate)&&(c.cancelSubmit=!0)}),this.on(submit.validate,function(b){function d(){var d,e;return c.submitButton&&(c.settings.submitHandlerc.formSubmitted)&&(d=a(input type='hidden').attr(name,c.submitButton.name).val(a(c.submitButton).val()).appendTo(c.currentForm)),!(c.settings.submitHandler&&!c.settings.debug)(e=c.settings.submitHandler.call(c,c.currentForm,b),d&&d.remove(),void 0!==e&&e)}return c.settings.debug&&b.preventDefault(),c.cancelSubmit(c.cancelSubmit=!1,d())c.form()c.pendingRequest(c.formSubmitted=!0,!1)d()(c.focusInvalid(),!1)})),c)},validfunction(){var b,c,d;return a(this[0]).is(form)b=this.validate().form()(d=[],b=!0,c=a(this[0].form).validate(),this.each(function(){b=c.element(this)&&b,b(d=d.concat(c.errorList))}),c.errorList=d),b},rulesfunction(b,c){var d,e,f,g,h,i,j=this[0],k=undefined!=typeof this.attr(contenteditable)&&false!==this.attr(contenteditable);if(null!=j&&(!j.form&&k&&(j.form=this.closest(form)[0],j.name=this.attr(name)),null!=j.form)){if(b)switch(d=a.data(j.form,validator).settings,e=d.rules,f=a.validator.staticRules(j),b){caseadda.extend(f,a.validator.normalizeRule(c)),delete f.messages,e[j.name]=f,c.messages&&(d.messages[j.name]=a.extend(d.messages[j.name],c.messages));break;caseremovereturn c(i={},a.each(c.split(s),function(a,b){i[b]=f[b],delete f[b]}),i)(delete e[j.name],f)}return g=a.validator.normalizeRules(a.extend({},a.validator.classRules(j),a.validator.attributeRules(j),a.validator.dataRules(j),a.validator.staticRules(j)),j),g.required&&(h=g.required,delete g.required,g=a.extend({requiredh},g)),g.remote&&(h=g.remote,delete g.remote,g=a.extend(g,{remoteh})),g}}}),a.extend(a.expr.pseudosa.expr[],{blankfunction(b){return!a.trim(+a(b).val())},filledfunction(b){var c=a(b).val();return null!==c&&!!a.trim(+c)},uncheckedfunction(b){return!a(b).prop(checked)}}),a.validator=function(b,c){this.settings=a.extend(!0,{},a.validator.defaults,b),this.currentForm=c,this.init()},a.validator.format=function(b,c){return 1===arguments.lengthfunction(){var c=a.makeArray(arguments);return c.unshift(b),a.validator.format.apply(this,c)}void 0===cb(arguments.length2&&c.constructor!==Array&&(c=a.makeArray(arguments).slice(1)),c.constructor!==Array&&(c=[c]),a.each(c,function(a,c){b=b.replace(new RegExp({+a+},g),function(){return c})}),b)},a.extend(a.validator,{defaults{messages{},groups{},rules{},errorClasserror,pendingClasspending,validClassvalid,errorElementlabel,focusCleanup!1,focusInvalid!0,errorContainera([]),errorLabelContainera([]),onsubmit!0,ignorehidden,ignoreTitle!1,onfocusinfunction(a){this.lastActive=a,this.settings.focusCleanup&&(this.settings.unhighlight&&this.settings.unhighlight.call(this,a,this.settings.errorClass,this.settings.validClass),this.hideThese(this.errorsFor(a)))},onfocusoutfunction(a){this.checkable(a)!(a.name in this.submitted)&&this.optional(a)this.element(a)},onkeyupfunction(b,c){var d=[16,17,18,20,35,36,37,38,39,40,45,144,225];9===c.which&&===this.elementValue(b)a.inArray(c.keyCode,d)!==-1(b.name in this.submittedb.name in this.invalid)&&this.element(b)},onclickfunction(a){a.name in this.submittedthis.element(a)a.parentNode.name in this.submitted&&this.element(a.parentNode)},highlightfunction(b,c,d){radio===b.typethis.findByName(b.name).addClass(c).removeClass(d)a(b).addClass(c).removeClass(d)},unhighlightfunction(b,c,d){radio===b.typethis.findByName(b.name).removeClass(c).addClass(d)a(b).removeClass(c).addClass(d)}},setDefaultsfunction(b){a.extend(a.validator.defaults,b)},messages{requiredThis field is required.,remotePlease fix this field.,emailPlease enter a valid email address.,urlPlease enter a valid URL.,datePlease enter a valid date.,dateISOPlease enter a valid date (ISO).,numberPlease enter a valid number.,digitsPlease enter only digits.,equalToPlease enter the same value again.,maxlengtha.validator.format(Please enter no more than {0} characters.),minlengtha.validator.format(Please enter at least {0} characters.),rangelengtha.validator.format(Please enter a value between {0} and {1} characters long.),rangea.validator.format(Please enter a value between {0} and {1}.),maxa.validator.format(Please enter a value less than or equal to {0}.),mina.validator.format(Please enter a value greater than or equal to {0}.),stepa.validator.format(Please enter a multiple of {0}.)},autoCreateRanges!1,prototype{initfunction(){function b(b){var c=undefined!=typeof a(this).attr(contenteditable)&&false!==a(this).attr(contenteditable);if(!this.form&&c&&(this.form=a(this).closest(form)[0],this.name=a(this).attr(name)),d===this.form){var e=a.data(this.form,validator),f=on+b.type.replace(^validate,),g=e.settings;g[f]&&!a(this).is(g.ignore)&&g[f].call(e,this,b)}}this.labelContainer=a(this.settings.errorLabelContainer),this.errorContext=this.labelContainer.length&&this.labelContainera(this.currentForm),this.containers=a(this.settings.errorContainer).add(this.settings.errorLabelContainer),this.submitted={},this.valueCache={},this.pendingRequest=0,this.pending={},this.invalid={},this.reset();var c,d=this.currentForm,e=this.groups={};a.each(this.settings.groups,function(b,c){string==typeof c&&(c=c.split(s)),a.each(c,function(a,c){e[c]=b})}),c=this.settings.rules,a.each(c,function(b,d){c[b]=a.validator.normalizeRule(d)}),a(this.currentForm).on(focusin.validate focusout.validate keyup.validate,text, [type='password'], [type='file'], select, textarea, [type='number'], [type='search'], [type='tel'], [type='url'], [type='email'], [type='datetime'], [type='date'], [type='month'], [type='week'], [type='time'], [type='datetime-local'], [type='range'], [type='color'], [type='radio'], [type='checkbox'], [contenteditable], [type='button'],b).on(click.validate,select, option, [type='radio'], [type='checkbox'],b),this.settings.invalidHandler&&a(this.currentForm).on(invalid-form.validate,this.settings.invalidHandler)},formfunction(){return this.checkForm(),a.extend(this.submitted,this.errorMap),this.invalid=a.extend({},this.errorMap),this.valid()a(this.currentForm).triggerHandler(invalid-form,[this]),this.showErrors(),this.valid()},checkFormfunction(){this.prepareForm();for(var a=0,b=this.currentElements=this.elements();b[a];a++)this.check(b[a]);return this.valid()},elementfunction(b){var c,d,e=this.clean(b),f=this.validationTargetFor(e),g=this,h=!0;return void 0===fdelete this.invalid[e.name](this.prepareElement(f),this.currentElements=a(f),d=this.groups[f.name],d&&a.each(this.groups,function(a,b){b===d&&a!==f.name&&(e=g.validationTargetFor(g.clean(g.findByName(a))),e&&e.name in g.invalid&&(g.currentElements.push(e),h=g.check(e)&&h))}),c=this.check(f)!==!1,h=h&&c,cthis.invalid[f.name]=!1this.invalid[f.name]=!0,this.numberOfInvalids()(this.toHide=this.toHide.add(this.containers)),this.showErrors(),a(b).attr(aria-invalid,!c)),h},showErrorsfunction(b){if(b){var c=this;a.extend(this.errorMap,b),this.errorList=a.map(this.errorMap,function(a,b){return{messagea,elementc.findByName(b)[0]}}),this.successList=a.grep(this.successList,function(a){return!(a.name in b)})}this.settings.showErrorsthis.settings.showErrors.call(this,this.errorMap,this.errorList)this.defaultShowErrors()},resetFormfunction(){a.fn.resetForm&&a(this.currentForm).resetForm(),this.invalid={},this.submitted={},this.prepareForm(),this.hideErrors();var b=this.elements().removeData(previousValue).removeAttr(aria-invalid);this.resetElements(b)},resetElementsfunction(a){var b;if(this.settings.unhighlight)for(b=0;a[b];b++)this.settings.unhighlight.call(this,a[b],this.settings.errorClass,),this.findByName(a[b].name).removeClass(this.settings.validClass);else a.removeClass(this.settings.errorClass).removeClass(this.settings.validClass)},numberOfInvalidsfunction(){return this.objectLength(this.invalid)},objectLengthfunction(a){var b,c=0;for(b in a)void 0!==a[b]&&null!==a[b]&&a[b]!==!1&&c++;return c},hideErrorsfunction(){this.hideThese(this.toHide)},hideThesefunction(a){a.not(this.containers).text(),this.addWrapper(a).hide()},validfunction(){return 0===this.size()},sizefunction(){return this.errorList.length},focusInvalidfunction(){if(this.settings.focusInvalid)try{a(this.findLastActive()this.errorList.length&&this.errorList[0].element[]).filter(visible).trigger(focus).trigger(focusin)}catch(b){}},findLastActivefunction(){var b=this.lastActive;return b&&1===a.grep(this.errorList,function(a){return a.element.name===b.name}).length&&b},elementsfunction(){var b=this,c={};return a(this.currentForm).find(input, select, textarea, [contenteditable]).not(submit, reset, image, disabled).not(this.settings.ignore).filter(function(){var d=this.namea(this).attr(name),e=undefined!=typeof a(this).attr(contenteditable)&&false!==a(this).attr(contenteditable);return!d&&b.settings.debug&&window.console&&console.error(%o has no name assigned,this),e&&(this.form=a(this).closest(form)[0],this.name=d),this.form===b.currentForm&&(!(d in c!b.objectLength(a(this).rules()))&&(c[d]=!0,!0))})},cleanfunction(b){return a(b)[0]},errorsfunction(){var b=this.settings.errorClass.split( ).join(.);return a(this.settings.errorElement+.+b,this.errorContext)},resetInternalsfunction(){this.successList=[],this.errorList=[],this.errorMap={},this.toShow=a([]),this.toHide=a([])},resetfunction(){this.resetInternals(),this.currentElements=a([])},prepareFormfunction(){this.reset(),this.toHide=this.errors().add(this.containers)},prepareElementfunction(a){this.reset(),this.toHide=this.errorsFor(a)},elementValuefunction(b){var c,d,e=a(b),f=b.type,g=undefined!=typeof e.attr(contenteditable)&&false!==e.attr(contenteditable);returnradio===fcheckbox===fthis.findByName(b.name).filter(checked).val()number===f&&undefined!=typeof b.validityb.validity.badInputNaNe.val()(c=ge.text()e.val(),file===fCfakepath===c.substr(0,12)c.substr(12)(d=c.lastIndexOf(),d=0c.substr(d+1)(d=c.lastIndexOf(),d=0c.substr(d+1)c))string==typeof cc.replace(rg,)c)},checkfunction(b){b=this.validationTargetFor(this.clean(b));var c,d,e,f,g=a(b).rules(),h=a.map(g,function(a,b){return b}).length,i=!1,j=this.elementValue(b);function==typeof g.normalizerf=g.normalizerfunction==typeof this.settings.normalizer&&(f=this.settings.normalizer),f&&(j=f.call(b,j),delete g.normalizer);for(d in g){e={methodd,parametersg[d]};try{if(c=a.validator.methods[d].call(this,j,b,e.parameters),dependency-mismatch===c&&1===h){i=!0;continue}if(i=!1,pending===c)return void(this.toHide=this.toHide.not(this.errorsFor(b)));if(!c)return this.formatAndAdd(b,e),!1}catch(k){throw this.settings.debug&&window.console&&console.log(Exception occurred when checking element +b.id+, check the '+e.method+' method.,k),k instanceof TypeError&&(k.message+=.  Exception occurred when checking element +b.id+, check the '+e.method+' method.),k}}if(!i)return this.objectLength(g)&&this.successList.push(b),!0},customDataMessagefunction(b,c){return a(b).data(msg+c.charAt(0).toUpperCase()+c.substring(1).toLowerCase())a(b).data(msg)},customMessagefunction(a,b){var c=this.settings.messages[a];return c&&(c.constructor===Stringcc[b])},findDefinedfunction(){for(var a=0;aarguments.length;a++)if(void 0!==arguments[a])return arguments[a]},defaultMessagefunction(b,c){string==typeof c&&(c={methodc});var d=this.findDefined(this.customMessage(b.name,c.method),this.customDataMessage(b,c.method),!this.settings.ignoreTitle&&b.titlevoid 0,a.validator.messages[c.method],strongWarning No message defined for +b.name+strong),e=${(d+)}g;returnfunction==typeof dd=d.call(this,c.parameters,b)e.test(d)&&(d=a.validator.format(d.replace(e,{$1}),c.parameters)),d},formatAndAddfunction(a,b){var c=this.defaultMessage(a,b);this.errorList.push({messagec,elementa,methodb.method}),this.errorMap[a.name]=c,this.submitted[a.name]=c},addWrapperfunction(a){return this.settings.wrapper&&(a=a.add(a.parent(this.settings.wrapper))),a},defaultShowErrorsfunction(){var a,b,c;for(a=0;this.errorList[a];a++)c=this.errorList[a],this.settings.highlight&&this.settings.highlight.call(this,c.element,this.settings.errorClass,this.settings.validClass),this.showLabel(c.element,c.message);if(this.errorList.length&&(this.toShow=this.toShow.add(this.containers)),this.settings.success)for(a=0;this.successList[a];a++)this.showLabel(this.successList[a]);if(this.settings.unhighlight)for(a=0,b=this.validElements();b[a];a++)this.settings.unhighlight.call(this,b[a],this.settings.errorClass,this.settings.validClass);this.toHide=this.toHide.not(this.toShow),this.hideErrors(),this.addWrapper(this.toShow).show()},validElementsfunction(){return this.currentElements.not(this.invalidElements())},invalidElementsfunction(){return a(this.errorList).map(function(){return this.element})},showLabelfunction(b,c){var d,e,f,g,h=this.errorsFor(b),i=this.idOrName(b),j=a(b).attr(aria-describedby);h.length(h.removeClass(this.settings.validClass).addClass(this.settings.errorClass),h.html(c))(h=a(+this.settings.errorElement+).attr(id,i+-error).addClass(this.settings.errorClass).html(c),d=h,this.settings.wrapper&&(d=h.hide().show().wrap(+this.settings.wrapper+).parent()),this.labelContainer.lengththis.labelContainer.append(d)this.settings.errorPlacementthis.settings.errorPlacement.call(this,d,a(b))d.insertAfter(b),h.is(label)h.attr(for,i)0===h.parents(label[for='+this.escapeCssMeta(i)+']).length&&(f=h.attr(id),jj.match(new RegExp(b+this.escapeCssMeta(f)+b))(j+= +f)j=f,a(b).attr(aria-describedby,j),e=this.groups[b.name],e&&(g=this,a.each(g.groups,function(b,c){c===e&&a([name='+g.escapeCssMeta(b)+'],g.currentForm).attr(aria-describedby,h.attr(id))})))),!c&&this.settings.success&&(h.text(),string==typeof this.settings.successh.addClass(this.settings.success)this.settings.success(h,b)),this.toShow=this.toShow.add(h)},errorsForfunction(b){var c=this.escapeCssMeta(this.idOrName(b)),d=a(b).attr(aria-describedby),e=label[for='+c+'], label[for='+c+'] ;return d&&(e=e+, #+this.escapeCssMeta(d).replace(s+g,, #)),this.errors().filter(e)},escapeCssMetafunction(a){return a.replace(([!#$%&'()+,.;=@[]^`{}~])g,$1)},idOrNamefunction(a){return this.groups[a.name](this.checkable(a)a.namea.ida.name)},validationTargetForfunction(b){return this.checkable(b)&&(b=this.findByName(b.name)),a(b).not(this.settings.ignore)[0]},checkablefunction(a){returnradiocheckboxi.test(a.type)},findByNamefunction(b){return a(this.currentForm).find([name='+this.escapeCssMeta(b)+'])},getLengthfunction(b,c){switch(c.nodeName.toLowerCase()){caseselectreturn a(optionselected,c).length;caseinputif(this.checkable(c))return this.findByName(c.name).filter(checked).length}return b.length},dependfunction(a,b){return!this.dependTypes[typeof a]this.dependTypes[typeof a](a,b)},dependTypes{booleanfunction(a){return a},stringfunction(b,c){return!!a(b,c.form).length},functionfunction(a,b){return a(b)}},optionalfunction(b){var c=this.elementValue(b);return!a.validator.methods.required.call(this,c,b)&&dependency-mismatch},startRequestfunction(b){this.pending[b.name](this.pendingRequest++,a(b).addClass(this.settings.pendingClass),this.pending[b.name]=!0)},stopRequestfunction(b,c){this.pendingRequest--,this.pendingRequest0&&(this.pendingRequest=0),delete this.pending[b.name],a(b).removeClass(this.settings.pendingClass),c&&0===this.pendingRequest&&this.formSubmitted&&this.form()(a(this.currentForm).submit(),this.submitButton&&a(inputhidden[name='+this.submitButton.name+'],this.currentForm).remove(),this.formSubmitted=!1)!c&&0===this.pendingRequest&&this.formSubmitted&&(a(this.currentForm).triggerHandler(invalid-form,[this]),this.formSubmitted=!1)},previousValuefunction(b,c){return c=string==typeof c&&cremote,a.data(b,previousValue)a.data(b,previousValue,{oldnull,valid!0,messagethis.defaultMessage(b,{methodc})})},destroyfunction(){this.resetForm(),a(this.currentForm).off(.validate).removeData(validator).find(.validate-equalTo-blur).off(.validate-equalTo).removeClass(validate-equalTo-blur).find(.validate-lessThan-blur).off(.validate-lessThan).removeClass(validate-lessThan-blur).find(.validate-lessThanEqual-blur).off(.validate-lessThanEqual).removeClass(validate-lessThanEqual-blur).find(.validate-greaterThanEqual-blur).off(.validate-greaterThanEqual).removeClass(validate-greaterThanEqual-blur).find(.validate-greaterThan-blur).off(.validate-greaterThan).removeClass(validate-greaterThan-blur)}},classRuleSettings{required{required!0},email{email!0},url{url!0},date{date!0},dateISO{dateISO!0},number{number!0},digits{digits!0},creditcard{creditcard!0}},addClassRulesfunction(b,c){b.constructor===Stringthis.classRuleSettings[b]=ca.extend(this.classRuleSettings,b)},classRulesfunction(b){var c={},d=a(b).attr(class);return d&&a.each(d.split( ),function(){this in a.validator.classRuleSettings&&a.extend(c,a.validator.classRuleSettings[this])}),c},normalizeAttributeRulefunction(a,b,c,d){minmaxstep.test(c)&&(null===bnumberrangetext.test(b))&&(d=Number(d),isNaN(d)&&(d=void 0)),d0===da[c]=db===c&&range!==b&&(a[c]=!0)},attributeRulesfunction(b){var c,d,e={},f=a(b),g=b.getAttribute(type);for(c in a.validator.methods)required===c(d=b.getAttribute(c),===d&&(d=!0),d=!!d)d=f.attr(c),this.normalizeAttributeRule(e,g,c,d);return e.maxlength&&-12147483647524288.test(e.maxlength)&&delete e.maxlength,e},dataRulesfunction(b){var c,d,e={},f=a(b),g=b.getAttribute(type);for(c in a.validator.methods)d=f.data(rule+c.charAt(0).toUpperCase()+c.substring(1).toLowerCase()),===d&&(d=!0),this.normalizeAttributeRule(e,g,c,d);return e},staticRulesfunction(b){var c={},d=a.data(b.form,validator);return d.settings.rules&&(c=a.validator.normalizeRule(d.settings.rules[b.name]){}),c},normalizeRulesfunction(b,c){return a.each(b,function(d,e){if(e===!1)return void delete b[d];if(e.parame.depends){var f=!0;switch(typeof e.depends){casestringf=!!a(e.depends,c.form).length;break;casefunctionf=e.depends.call(c,c)}fb[d]=void 0===e.parame.param(a.data(c.form,validator).resetElements(a(c)),delete b[d])}}),a.each(b,function(d,e){b[d]=a.isFunction(e)&&normalizer!==de(c)e}),a.each([minlength,maxlength],function(){b[this]&&(b[this]=Number(b[this]))}),a.each([rangelength,range],function(){var c;b[this]&&(a.isArray(b[this])b[this]=[Number(b[this][0]),Number(b[this][1])]string==typeof b[this]&&(c=b[this].replace([[]]g,).split([s,]+),b[this]=[Number(c[0]),Number(c[1])]))}),a.validator.autoCreateRanges&&(null!=b.min&&null!=b.max&&(b.range=[b.min,b.max],delete b.min,delete b.max),null!=b.minlength&&null!=b.maxlength&&(b.rangelength=[b.minlength,b.maxlength],delete b.minlength,delete b.maxlength)),b},normalizeRulefunction(b){if(string==typeof b){var c={};a.each(b.split(s),function(){c[this]=!0}),b=c}return b},addMethodfunction(b,c,d){a.validator.methods[b]=c,a.validator.messages[b]=void 0!==dda.validator.messages[b],c.length3&&a.validator.addClassRules(b,a.validator.normalizeRule(b))},methods{requiredfunction(b,c,d){if(!this.depend(d,c))returndependency-mismatch;if(select===c.nodeName.toLowerCase()){var e=a(c).val();return e&&e.length0}return this.checkable(c)this.getLength(b,c)0void 0!==b&&null!==b&&b.length0},emailfunction(a,b){return this.optional(b)^[a-zA-Z0-9.!#$%&'+=^_`{}~-]+@[a-zA-Z0-9]([a-zA-Z0-9-]{0,61}[a-zA-Z0-9])(.[a-zA-Z0-9]([a-zA-Z0-9-]{0,61}[a-zA-Z0-9]))$.test(a)},urlfunction(a,b){return this.optional(b)^(((httpsftp)))(S+(S)@)((!(10127)(.d{1,3}){3})(!(169.254192.168)(.d{1,3}){2})(!172.(1[6-9]2d3[0-1])(.d{1,3}){2})([1-9]d1dd2[01]d22[0-3])(.(1d{1,2}2[0-4]d25[0-5])){2}(.([1-9]d1dd2[0-4]d25[0-4]))(([a-zu00a1-uffff0-9]-)[a-zu00a1-uffff0-9]+)(.([a-zu00a1-uffff0-9]-)[a-zu00a1-uffff0-9]+)(.([a-zu00a1-uffff]{2,})).)(d{2,5})([#]S)$i.test(a)},datefunction(){var a=!1;return function(b,c){return a(a=!0,this.settings.debug&&window.console&&console.warn(The `date` method is deprecated and will be removed in version '2.0.0'.nPlease don't use it, since it relies on the Date constructor, whichnbehaves very differently across browsers and locales. Use `dateISO`ninstead or one of the locale specific methods in `localizations`nand `additional-methods.js`.)),this.optional(c)!InvalidNaN.test(new Date(b).toString())}}(),dateISOfunction(a,b){return this.optional(b)^d{4}[-](0[1-9]1[012])[-](0[1-9][12][0-9]3[01])$.test(a)},numberfunction(a,b){return this.optional(b)^(-d+-d{1,3}(,d{3})+)(.d+)$.test(a)},digitsfunction(a,b){return this.optional(b)^d+$.test(a)},minlengthfunction(b,c,d){var e=a.isArray(b)b.lengththis.getLength(b,c);return this.optional(c)e=d},maxlengthfunction(b,c,d){var e=a.isArray(b)b.lengththis.getLength(b,c);return this.optional(c)e=d},rangelengthfunction(b,c,d){var e=a.isArray(b)b.lengththis.getLength(b,c);return this.optional(c)e=d[0]&&e=d[1]},minfunction(a,b,c){return this.optional(b)a=c},maxfunction(a,b,c){return this.optional(b)a=c},rangefunction(a,b,c){return this.optional(b)a=c[0]&&a=c[1]},stepfunction(b,c,d){var e,f=a(c).attr(type),g=Step attribute on input type +f+ is not supported.,h=[text,number,range],i=new RegExp(b+f+b),j=f&&!i.test(h.join()),k=function(a){var b=(+a).match((.(d+))$);return b&&b[1]b[1].length0},l=function(a){return Math.round(aMath.pow(10,e))},m=!0;if(j)throw new Error(g);return e=k(d),(k(b)el(b)%l(d)!==0)&&(m=!1),this.optional(c)m},equalTofunction(b,c,d){var e=a(d);return this.settings.onfocusout&&e.not(.validate-equalTo-blur).length&&e.addClass(validate-equalTo-blur).on(blur.validate-equalTo,function(){a(c).valid()}),b===e.val()},remotefunction(b,c,d,e){if(this.optional(c))returndependency-mismatch;e=string==typeof e&&eremote;var f,g,h,i=this.previousValue(c,e);return this.settings.messages[c.name](this.settings.messages[c.name]={}),i.originalMessage=i.originalMessagethis.settings.messages[c.name][e],this.settings.messages[c.name][e]=i.message,d=string==typeof d&&{urld}d,h=a.param(a.extend({datab},d.data)),i.old===hi.valid(i.old=h,f=this,this.startRequest(c),g={},g[c.name]=b,a.ajax(a.extend(!0,{modeabort,portvalidate+c.name,dataTypejson,datag,contextf.currentForm,successfunction(a){var d,g,h,j=a===!0true===a;f.settings.messages[c.name][e]=i.originalMessage,j(h=f.formSubmitted,f.resetInternals(),f.toHide=f.errorsFor(c),f.formSubmitted=h,f.successList.push(c),f.invalid[c.name]=!1,f.showErrors())(d={},g=af.defaultMessage(c,{methode,parametersb}),d[c.name]=i.message=g,f.invalid[c.name]=!0,f.showErrors(d)),i.valid=j,f.stopRequest(c,j)}},d)),pending)}}});var b,c={};return a.ajaxPrefiltera.ajaxPrefilter(function(a,b,d){var e=a.port;abort===a.mode&&(c[e]&&c[e].abort(),c[e]=d)})(b=a.ajax,a.ajax=function(d){var e=(modein dda.ajaxSettings).mode,f=(portin dda.ajaxSettings).port;returnabort===e(c[f]&&c[f].abort(),c[f]=b.apply(this,arguments),c[f])b.apply(this,arguments)}),a});