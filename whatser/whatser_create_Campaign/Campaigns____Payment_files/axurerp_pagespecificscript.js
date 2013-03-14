for(var i = 0; i < 125; i++) { var scriptId = 'u' + i; window[scriptId] = document.getElementById(scriptId); }

$axure.eventManager.pageLoad(
function (e) {

});

$axure.eventManager.change('u21', function(e) {

if ((GetSelectedOption('u21')) == ('Visa')) {

SetGlobalVariableValue('CCType', '1');

}
else
if ((GetSelectedOption('u21')) == ('MasterCard')) {

SetGlobalVariableValue('CCType', '2');

}
else
if ((GetSelectedOption('u21')) == ('AMEX')) {

SetGlobalVariableValue('CCType', '3');

}
});

$axure.eventManager.blur('u21', function(e) {

if ((GetSelectedOption('u21')) == ('Select a Card')) {

	SetPanelState('u100', 'pd0u100','fade','',50,'fade','',50);

	BringToFront("u100");

}
else
if (true) {

	SetPanelVisibility('u100','hidden','fade',50);

}
});
gv_vAlignTable['u102'] = 'center';gv_vAlignTable['u46'] = 'center';gv_vAlignTable['u77'] = 'center';gv_vAlignTable['u93'] = 'center';gv_vAlignTable['u38'] = 'center';gv_vAlignTable['u32'] = 'center';gv_vAlignTable['u62'] = 'center';gv_vAlignTable['u87'] = 'center';gv_vAlignTable['u1'] = 'center';gv_vAlignTable['u119'] = 'top';gv_vAlignTable['u7'] = 'center';gv_vAlignTable['u112'] = 'center';gv_vAlignTable['u104'] = 'center';gv_vAlignTable['u30'] = 'center';document.getElementById('u8_img').tabIndex = 0;
HookClick('u8', false);

u8.style.cursor = 'pointer';
$axure.eventManager.click('u8', function(e) {

if (true) {

	self.location.href=$axure.globalVariableProvider.getLinkUrl('Product_Landing_Page.html');

}
});
gv_vAlignTable['u60'] = 'center';gv_vAlignTable['u89'] = 'center';gv_vAlignTable['u122'] = 'top';gv_vAlignTable['u34'] = 'center';gv_vAlignTable['u17'] = 'center';gv_vAlignTable['u64'] = 'center';gv_vAlignTable['u19'] = 'top';gv_vAlignTable['u58'] = 'center';gv_vAlignTable['u79'] = 'center';gv_vAlignTable['u81'] = 'center';gv_vAlignTable['u97'] = 'center';gv_vAlignTable['u118'] = 'top';gv_vAlignTable['u124'] = 'top';gv_vAlignTable['u85'] = 'center';gv_vAlignTable['u11'] = 'center';gv_vAlignTable['u108'] = 'center';gv_vAlignTable['u71'] = 'center';gv_vAlignTable['u15'] = 'center';gv_vAlignTable['u36'] = 'center';gv_vAlignTable['u75'] = 'center';gv_vAlignTable['u66'] = 'center';gv_vAlignTable['u83'] = 'center';gv_vAlignTable['u95'] = 'center';gv_vAlignTable['u22'] = 'top';gv_vAlignTable['u13'] = 'center';gv_vAlignTable['u52'] = 'center';gv_vAlignTable['u28'] = 'center';gv_vAlignTable['u68'] = 'top';gv_vAlignTable['u73'] = 'center';gv_vAlignTable['u3'] = 'center';
u20.style.cursor = 'pointer';
$axure.eventManager.click('u20', function(e) {

if (true) {

SetWidgetFormText('u20', '');

}
});

$axure.eventManager.keyup('u20', function(e) {

if (IsValueNotNumeric(GetWidgetText('u20'))) {

SetWidgetFormText('u20', '');

}
});

$axure.eventManager.blur('u20', function(e) {

if (((GetGlobalVariableValue('CCType')) == ('1')) && ((GetWidgetValueLength('u20')) != ('16'))) {

	SetPanelState('u26', 'pd1u26','fade','',50,'fade','',50);

	BringToFront("u26");

}
else
if (((GetGlobalVariableValue('CCType')) == ('2')) && ((GetWidgetValueLength('u20')) != ('16'))) {

	SetPanelState('u26', 'pd2u26','fade','',50,'fade','',50);

	BringToFront("u26");

}
else
if (((GetGlobalVariableValue('CCType')) == ('3')) && ((GetWidgetValueLength('u20')) != ('15'))) {

	SetPanelState('u26', 'pd2u26','fade','',50,'fade','',50);

	BringToFront("u26");

}
else
if ((GetWidgetValueLength('u20')) == ('')) {

	SetPanelState('u26', 'pd0u26','fade','',50,'fade','',50);

	BringToFront("u26");

}
else
if (true) {

	SetPanelVisibility('u26','hidden','fade',50);

}
});
gv_vAlignTable['u50'] = 'center';gv_vAlignTable['u106'] = 'center';gv_vAlignTable['u24'] = 'top';gv_vAlignTable['u54'] = 'center';gv_vAlignTable['u120'] = 'top';gv_vAlignTable['u114'] = 'center';gv_vAlignTable['u56'] = 'center';gv_vAlignTable['u116'] = 'center';gv_vAlignTable['u123'] = 'top';gv_vAlignTable['u99'] = 'center';gv_vAlignTable['u5'] = 'center';gv_vAlignTable['u9'] = 'center';gv_vAlignTable['u42'] = 'center';gv_vAlignTable['u18'] = 'top';gv_vAlignTable['u48'] = 'center';gv_vAlignTable['u110'] = 'center';
$axure.eventManager.keyup('u67', function(e) {

if (IsValueNotNumeric(GetWidgetText('u67'))) {

SetWidgetFormText('u67', '');

}
});

$axure.eventManager.blur('u67', function(e) {

if (((GetGlobalVariableValue('CCType')) == ('1')) && ((GetWidgetValueLength('u67')) != ('3'))) {

	SetPanelState('u69', 'pd1u69','fade','',50,'fade','',50);

	BringToFront("u69");

}
else
if (((GetGlobalVariableValue('CCType')) == ('2')) && ((GetWidgetValueLength('u67')) != ('3'))) {

	SetPanelState('u69', 'pd1u69','fade','',50,'fade','',50);

	BringToFront("u69");

}
else
if (((GetGlobalVariableValue('CCType')) == ('3')) && ((GetWidgetValueLength('u67')) != ('4'))) {

	SetPanelState('u69', 'pd2u69','fade','',50,'fade','',50);

	BringToFront("u69");

}
else
if (true) {

	SetPanelVisibility('u69','hidden','fade',50);

}
});
gv_vAlignTable['u40'] = 'center';gv_vAlignTable['u44'] = 'center';gv_vAlignTable['u117'] = 'top';gv_vAlignTable['u91'] = 'center';gv_vAlignTable['u121'] = 'top';