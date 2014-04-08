//	Mortgage Calc.js
//	Authors: Sian Finlay, James McCartan, Rebecca ferris, Stephanie Hughes
//	HTML file: js/mortgagecalculator.html

$(document).ready(function() {
	$("#calculate").click( function(){
	  	var $mortReq = parseInt($("#mortReq").val());
	  	var $repayPeriod = parseInt($("#repayPeriod").val());
	  	var $interest = 0.05;
	  	var $repay = $mortReq / $repayPeriod;
	  	var $repay1 = $repay / 12;
	  	var $repay2 = $repay1 * $interest;
  	
  		$("#repay").val($repay2);
  	})
  });