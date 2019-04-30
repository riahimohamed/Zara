var start = 0;
var end = 0;
var diff = 0;
var timerID = 0;

var start1 = 0;
var end1 = 0;
var diff1 = 0;
var timerID1 = 0;

var start2 = 0;
var end2 = 0;
var diff2 = 0;
var timerID2 = 0;

var start3 = 0;
var end3 = 0;
var diff3 = 0;
var timerID3 = 0;

var start4 = 0;
var end4 = 0;
var diff4 = 0;
var timerID4 = 0;

var start5 = 0;
var end5 = 0;
var diff5 = 0;
var timerID5 = 0;

var start6 = 0;
var end6 = 0;
var diff6 = 0;
var timerID6 = 0;

function getValue(chronoTimeID, hiddenVal){
	timeValue = $("#"+chronoTimeID).text();
	str = timeValue.toString();
	value = str.slice(0,5).replace(":", ".");
	$("#"+hiddenVal).val(value);
	return value;
}

function chronofs(){
	end = new Date();
	diff = end - start;
	diff = new Date(diff);
	var sec = diff.getSeconds();
	var min = diff.getMinutes();
	var hr = diff.getHours()-1;
	if (min < 10){
		min = "0" + min;
	}
	if (sec < 10){
		sec = "0" + sec;
	}
	if (hr < 10){
		hr = "0" + hr;
	}

	$("#chronofs").html(hr + ":" + min + ":" + sec);
	timerID = setTimeout("chronofs()", 10);
}

function chronoStart(elm){
	$("span", elm).addClass("glyphicon glyphicon-pause");
	$("span", elm).removeClass("glyphicon-play");
	$(elm).prop("title", "Pause");

	$(elm).attr('onClick','chronoStop(this)');
	$(".stop").attr('onClick','chronoStop(this)');

	start = new Date();
	chronofs();
}
function chronoContinue(elm){
	$("span", elm).addClass("glyphicon glyphicon-pause");
	$("span", elm).removeClass("glyphicon-play");
	$(elm).prop("title", "Play");

	$(elm).attr('onClick','chronoStop(this)');
	start = new Date()-diff;
	start = new Date(start);
	chronofs();
}
function chronoStop(elm){
	$("span", elm).addClass("glyphicon glyphicon-play");
	$("span", elm).removeClass("glyphicon-pause");
	$(elm).prop("title", "Play");

	$(elm).attr('onClick','chronoContinue(this)');
	$(".stop").attr('onClick','chronoStop(this)');
	getValue("chronofs", "fs");

	clearTimeout(timerID);
}
function chronoReset(){
	$(".chronofs").html("00:00:00");
	start = new Date()
}
function chronoStopReset(){
	$("#chronofs").html("00:00:00");
}

//----------------------------------------

function chrono(){
	end1 = new Date();
	diff1 = end1 - start1;
	diff1 = new Date(diff1);
	var sec = diff1.getSeconds();
	var min = diff1.getMinutes();
	var hr = diff1.getHours()-1;
	if (min < 10){
		min = "0" + min;
	}
	if (sec < 10){
		sec = "0" + sec;
	}
	if (hr < 10){
		hr = "0" + hr;
	}

	$("#chronotime").html(hr + ":" + min + ":" + sec);
	timerID1 = setTimeout("chrono()", 10);
}

function chronoStart1(elm){
	$("span", elm).addClass("glyphicon glyphicon-pause");
	$("span", elm).removeClass("glyphicon-play");
	$(elm).prop("title", "Pause");

	$(elm).attr('onClick','chronoStop1(this)');
	$(".stop1").attr('onClick','chronoStop1(this)');

	start1 = new Date();
	chrono()
}
function chronoContinue1(elm){
	$("span", elm).addClass("glyphicon glyphicon-pause");
	$("span", elm).removeClass("glyphicon-play");
	$(elm).prop("title", "Play");

	$(elm).attr('onClick','chronoStop1(this)');
	start1 = new Date()-diff1;
	start1 = new Date(start1);
	chrono();
}
function chronoStop1(elm){
	$("span", elm).addClass("glyphicon glyphicon-play");
	$("span", elm).removeClass("glyphicon-pause");
	$(elm).prop("title", "Play");

	$(elm).attr('onClick','chronoContinue1(this)');
	$(".stop1").attr('onClick','chronoStop1(this)');
	getValue("chronotime", "ct");

	clearTimeout(timerID1);
}

//-----------------------------------------

function chronofp(){
	end2 = new Date();
	diff2 = end2 - start2;
	diff2 = new Date(diff2);
	var sec2 = diff2.getSeconds();
	var min2 = diff2.getMinutes();
	var hr2 = diff2.getHours()-1;
	if (min2 < 10){
		min2 = "0" + min2;
	}
	if (sec2 < 10){
		sec2 = "0" + sec2;
	}
	if (hr2 < 10){
		hr2 = "0" + hr2;
	}

	$("#chronofp").html(hr2 + ":" + min2 + ":" + sec2);
	timerID2 = setTimeout("chronofp()", 10);
}

function chronoStart2(elm){
	$("span", elm).addClass("glyphicon glyphicon-pause");
	$("span", elm).removeClass("glyphicon-play");
	$(elm).prop("title", "Pause");

	$(elm).attr('onClick','chronoStop2(this)');
	$(".stop2").attr('onClick','chronoStop2(this)');

	start2 = new Date();
	chronofp()
}
function chronoContinue2(elm){
	$("span", elm).addClass("glyphicon glyphicon-pause");
	$("span", elm).removeClass("glyphicon-play");
	$(elm).prop("title", "Play");

	$(elm).attr('onClick','chronoStop2(this)');
	start2 = new Date()-diff2;
	start2 = new Date(start2);
	chronofp();
}
function chronoStop2(elm){
	$("span", elm).addClass("glyphicon glyphicon-play");
	$("span", elm).removeClass("glyphicon-pause");
	$(elm).prop("title", "Play");

	$(elm).attr('onClick','chronoContinue2(this)');
	$(".stop2").attr('onClick','chronoStop2(this)');
	getValue("chronofp", "fp");

	clearTimeout(timerID2);
}

//-----------------------------------------

function chronohs(){
	end3 = new Date();
	diff3 = end3 - start3;
	diff3 = new Date(diff3);
	var sec3 = diff3.getSeconds();
	var min3 = diff3.getMinutes();
	var hr3 = diff3.getHours()-1;
	if (min3 < 10){
		min3 = "0" + min3;
	}
	if (sec3 < 10){
		sec3 = "0" + sec3;
	}
	if (hr3 < 10){
		hr3 = "0" + hr3;
	}

	$("#chronohs").html(hr3 + ":" + min3 + ":" + sec3);
	timerID3 = setTimeout("chronohs()", 10);
}

function chronoStart3(elm){
	$("span", elm).addClass("glyphicon glyphicon-pause");
	$("span", elm).removeClass("glyphicon-play");
	$(elm).prop("title", "Pause");

	$(elm).attr('onClick','chronoStop3(this)');
	$(".stop3").attr('onClick','chronoStop3(this)');

	start3 = new Date();
	chronohs()
}
function chronoContinue3(elm){
	$("span", elm).addClass("glyphicon glyphicon-pause");
	$("span", elm).removeClass("glyphicon-play");
	$(elm).prop("title", "Play");

	$(elm).attr('onClick','chronoStop3(this)');
	start3 = new Date()-diff3;
	start3 = new Date(start3);
	chronohs();
}
function chronoStop3(elm){
	$("span", elm).addClass("glyphicon glyphicon-play");
	$("span", elm).removeClass("glyphicon-pause");
	$(elm).prop("title", "Play");

	$(elm).attr('onClick','chronoContinue3(this)');
	$(".stop3").attr('onClick','chronoStop3(this)');
	getValue("chronohs", "hs");

	clearTimeout(timerID3);
}

//-----------------------------------------

function chronohp(){
	end4 = new Date();
	diff4 = end4 - start4;
	diff4 = new Date(diff4);
	var sec4 = diff4.getSeconds();
	var min4 = diff4.getMinutes();
	var hr4 = diff4.getHours()-1;
	if (min4 < 10){
		min4 = "0" + min4;
	}
	if (sec4 < 10){
		sec4 = "0" + sec4;
	}
	if (hr4 < 10){
		hr4 = "0" + hr4;
	}

	$("#chronohp").html(hr4 + ":" + min4 + ":" + sec4);
	timerID4 = setTimeout("chronohp()", 10);
}

function chronoStart4(elm){
	$("span", elm).addClass("glyphicon glyphicon-pause");
	$("span", elm).removeClass("glyphicon-play");
	$(elm).prop("title", "Pause");

	$(elm).attr('onClick','chronoStop4(this)');
	$(".stop4").attr('onClick','chronoStop4(this)');

	start4 = new Date();
	chronohp()
}
function chronoContinue4(elm){
	$("span", elm).addClass("glyphicon glyphicon-pause");
	$("span", elm).removeClass("glyphicon-play");
	$(elm).prop("title", "Play");

	$(elm).attr('onClick','chronoStop4(this)');
	start4 = new Date()-diff4;
	start4 = new Date(start4);
	chronohp();
}
function chronoStop4(elm){
	$("span", elm).addClass("glyphicon glyphicon-play");
	$("span", elm).removeClass("glyphicon-pause");
	$(elm).prop("title", "Play");

	$(elm).attr('onClick','chronoContinue4(this)');
	$(".stop4").attr('onClick','chronoStop4(this)');
	getValue("chronohp", "hp");
	clearTimeout(timerID4);
}

//-----------------------------------------

function chronoks(){
	end5 = new Date();
	diff5 = end5 - start5;
	diff5 = new Date(diff5);
	var sec5 = diff5.getSeconds();
	var min5 = diff5.getMinutes();
	var hr5 = diff5.getHours()-1;
	if (min5 < 10){
		min5 = "0" + min5;
	}
	if (sec5 < 10){
		sec5 = "0" + sec5;
	}
	if (hr5 < 10){
		hr5 = "0" + hr5;
	}

	$("#chronoks").html(hr5 + ":" + min5 + ":" + sec5);
	timerID5 = setTimeout("chronoks()", 10);
}

function chronoStart5(elm){
	$("span", elm).addClass("glyphicon glyphicon-pause");
	$("span", elm).removeClass("glyphicon-play");
	$(elm).prop("title", "Pause");

	$(elm).attr('onClick','chronoStop5(this)');
	$(".stop5").attr('onClick','chronoStop5(this)');

	start5 = new Date();
	chronoks()
}
function chronoContinue5(elm){
	$("span", elm).addClass("glyphicon glyphicon-pause");
	$("span", elm).removeClass("glyphicon-play");
	$(elm).prop("title", "Play");

	$(elm).attr('onClick','chronoStop5(this)');
	start5 = new Date()-diff5;
	start5 = new Date(start5);
	chronoks();
}
function chronoStop5(elm){
	$("span", elm).addClass("glyphicon glyphicon-play");
	$("span", elm).removeClass("glyphicon-pause");
	$(elm).prop("title", "Play");

	$(elm).attr('onClick','chronoContinue5(this)');
	$(".stop5").attr('onClick','chronoStop5(this)');
	getValue("chronoks", "ks");
	clearTimeout(timerID5);
}

//-----------------------------------------

function chronokp(){
	end6 = new Date();
	diff6 = end6 - start6;
	diff6 = new Date(diff6);
	var sec6 = diff6.getSeconds();
	var min6 = diff6.getMinutes();
	var hr6 = diff6.getHours()-1;
	if (min6 < 10){
		min6 = "0" + min6;
	}
	if (sec6 < 10){
		sec6 = "0" + sec6;
	}
	if (hr6 < 10){
		hr6 = "0" + hr6;
	}

	$("#chronokp").html(hr6 + ":" + min6 + ":" + sec6);
	timerID6 = setTimeout("chronokp()", 10);
}

function chronoStart6(elm){
	$("span", elm).addClass("glyphicon glyphicon-pause");
	$("span", elm).removeClass("glyphicon-play");
	$(elm).prop("title", "Pause");

	$(elm).attr('onClick','chronoStop6(this)');
	$(".stop6").attr('onClick','chronoStop6(this)');

	start6 = new Date();
	chronokp()
}
function chronoContinue6(elm){
	$("span", elm).addClass("glyphicon glyphicon-pause");
	$("span", elm).removeClass("glyphicon-play");
	$(elm).prop("title", "Play");

	$(elm).attr('onClick','chronoStop6(this)');
	start6 = new Date()-diff6;
	start6 = new Date(start6);
	chronokp();
}
function chronoStop6(elm){
	$("span", elm).addClass("glyphicon glyphicon-play");
	$("span", elm).removeClass("glyphicon-pause");
	$(elm).prop("title", "Play");

	$(elm).attr('onClick','chronoContinue6(this)');
	$(".stop6").attr('onClick','chronoStop6(this)');
	getValue("chronokp", "kp");
	clearTimeout(timerID6);
}