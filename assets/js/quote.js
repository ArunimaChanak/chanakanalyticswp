$(document).ready(function () {
    var $range = $(".js-range-slider"),
		$from = $(".from"),
		$to = $(".to"),
		range,
		min = $range.data('min'),
		max = $range.data('max'),
		from,
		to;
	var updateValues = function () {
		$from.prop("value", from);
		$to.prop("value", to);
	};
	$range.ionRangeSlider({
		onChange: function (data) {
		from = data.from;
		to = data.to;
		updateValues();
		}
	});
	range = $range.data("ionRangeSlider");
	var updateRange = function () {
		range.update({
			from: from,
			to: to
		});
	};
	$from.on("input", function () {
		from = +$(this).prop("value");
		if (from < min) {
			from = min;
		}
		if (from > to) {
			from = to;
		}
		updateValues();    
		updateRange();
	});
	$to.on("input", function () {
		to = +$(this).prop("value");
		if (to > max) {
			to = max;
		}
		if (to < from) {
			to = from;
		}
		updateValues();    
		updateRange();
	});
	// nav tab script
	// step1
	var btn = document.querySelector("#nextTwo");
        btn.addEventListener("click", method1);
		btn.addEventListener("click", method2);
		btn.addEventListener("click", method3);
		btn.addEventListener("click", method4);
		btn.addEventListener("click", method5);
		btn.addEventListener("click", method6);
	function method1() {
		var a = document.getElementById("step2");
		a.classList.add("active");
	};
	function method2() {
		var a = document.getElementById("step2");
		a.classList.add("show");
	};
	function method3() {
		var a = document.getElementById("step1");
		a.classList.remove("active");
	};
	function method4() {
		var a = document.getElementById("step1");
		a.classList.remove("show");
	};
	function method5() {
		var a = document.getElementById("step1-tab");
		a.classList.add("done");
	};
	function method6() {
		var a = document.getElementById("step2-tab");
		a.classList.add("active");
	};
	// step2
	var btn = document.querySelector("#nextThree");
        btn.addEventListener("click", method7);
		btn.addEventListener("click", method8);
		btn.addEventListener("click", method9);
		btn.addEventListener("click", method10);
		btn.addEventListener("click", method11);
		btn.addEventListener("click", method12);
	function method7() {
		var a = document.getElementById("step3");
		a.classList.add("active");
	};
	function method8() {
		var a = document.getElementById("step3");
		a.classList.add("show");
	};
	function method9() {
		var a = document.getElementById("step2");
		a.classList.remove("active");
	};
	function method10() {
		var a = document.getElementById("step2");
		a.classList.remove("show");
	};
	function method11() {
		var a = document.getElementById("step2-tab");
		a.classList.add("done");
	};
	function method12() {
		var a = document.getElementById("step3-tab");
		a.classList.add("active");
	};
	// step3
	var btn = document.querySelector("#nextFour");
        btn.addEventListener("click", method13);
		btn.addEventListener("click", method14);
		btn.addEventListener("click", method15);
		btn.addEventListener("click", method16);
		btn.addEventListener("click", method17);
		btn.addEventListener("click", method18);
	function method13() {
		var a = document.getElementById("step4");
		a.classList.add("active");
	};
	function method14() {
		var a = document.getElementById("step4");
		a.classList.add("show");
	};
	function method15() {
		var a = document.getElementById("step3");
		a.classList.remove("active");
	};
	function method16() {
		var a = document.getElementById("step3");
		a.classList.remove("show");
	};
	function method17() {
		var a = document.getElementById("step4-tab");
		a.classList.add("done");
	};
	function method18() {
		var a = document.getElementById("step3-tab");
		a.classList.add("done");
	};
	// prev2
	var btn = document.querySelector("#prevTwo");
        btn.addEventListener("click", method19);
		btn.addEventListener("click", method20);
		btn.addEventListener("click", method21);
		btn.addEventListener("click", method22);
		btn.addEventListener("click", method23);
		btn.addEventListener("click", method24);
	function method19() {
		var a = document.getElementById("step2");
		a.classList.add("active");
	};
	function method20() {
		var a = document.getElementById("step2");
		a.classList.add("show");
	};
	function method21() {
		var a = document.getElementById("step3");
		a.classList.remove("active");
	};
	function method22() {
		var a = document.getElementById("step3");
		a.classList.remove("show");
	};
	function method23() {
		var a = document.getElementById("step3-tab");
		a.classList.remove("active");
	};
	function method24() {
		var a = document.getElementById("step2-tab");
		a.classList.remove("done");
	};
	// prev1
	var btn = document.querySelector("#prevOne");
        btn.addEventListener("click", method25);
		btn.addEventListener("click", method26);
		btn.addEventListener("click", method27);
		btn.addEventListener("click", method28);
		btn.addEventListener("click", method29);
		btn.addEventListener("click", method30);
	function method25() {
		var a = document.getElementById("step1");
		a.classList.add("active");
	};
	function method26() {
		var a = document.getElementById("step1");
		a.classList.add("show");
	};
	function method27() {
		var a = document.getElementById("step2");
		a.classList.remove("active");
	};
	function method28() {
		var a = document.getElementById("step2");
		a.classList.remove("show");
	};
	function method29() {
		var a = document.getElementById("step2-tab");
		a.classList.remove("active");
	};
	function method30() {
		var a = document.getElementById("step1-tab");
		a.classList.remove("done");
	};


	$("#nextFour").click(function () {
		$(".check-icon").hide();
		setTimeout(function () {
			$(".check-icon").show();
		}, 10);
	});
});