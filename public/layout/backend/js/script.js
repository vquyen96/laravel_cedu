$(document).ready(function() {
    setTimeout(function(){

    	$('.masterErrorContent').fadeOut(3000);
    },1000);
    var countChartAcc = 0;
    $('.btnChangeChartAccountNext').click(function(){
    	switch(countChartAcc){
    		case 0:
    			$('#chartLine01').css('left','-50%');
	    		$('#chartLine02').css('left','50%');
	    		$(this).text(' 1 năm >>');
	    		countChartAcc = 1;
	    		$('.btnChangeChartAccountPre').css('display','block');
	    		$('.btnChangeChartAccountPre').text('<< 1 tháng');
    			break;
    		case 1:
	    		$('#chartLine02').css('left','-50%');
	    		$('#chartLine03').css('left','50%');
	    		$(this).text('<< 3 tháng');
	    		countChartAcc = 2;
	    		$('.btnChangeChartAccountPre').css('display','none');
	    		break;
	    	case 2:
	    		$('#chartLine02').css('left','50%');
	    		$('#chartLine03').css('left','150%');
	    		$(this).text('1 năm >>');
	    		countChartAcc = 1;
	    		$('.btnChangeChartAccountPre').css('display','block');
	    		break;
	    	default:
	    		alert('error');
	    		break;
    	};
    	
    });
    $('.btnChangeChartAccountPre').click(function(){
    	$('#chartLine01').css('left','50%');
		$('#chartLine02').css('left','150%');
		$(this).css('display','none');
		countChartAcc = 0;
		$('.btnChangeChartAccountNext').text('3 tháng >>');
    });

    
    var countChartRevenue = 0;
    $('.btnChangeChartRevenueNext').click(function(){
    	switch(countChartRevenue){
    		case 0:
    			$('#chartRevenue01').css('left','-50%');
	    		$('#chartRevenue02').css('left','50%');
	    		$(this).text(' 1 năm >>');
	    		countChartRevenue = 1;
	    		$('.btnChangeChartRevenuePre').css('display','block');
	    		$('.btnChangeChartRevenuePre').text('<< 1 tháng');
    			break;
    		case 1:
	    		$('#chartRevenue02').css('left','-50%');
	    		$('#chartRevenue03').css('left','50%');
	    		$(this).text('<< 3 tháng');
	    		countChartRevenue = 2;
	    		$('.btnChangeChartRevenuePre').css('display','none');
	    		break;
	    	case 2:
	    		$('#chartRevenue02').css('left','50%');
	    		$('#chartRevenue03').css('left','150%');
	    		$(this).text('1 năm >>');
	    		countChartRevenue = 1;
	    		$('.btnChangeChartRevenuePre').css('display','block');
	    		break;
	    	default:
	    		alert('error');
	    		break;
    	};
    	
    });
    $('.btnChangeChartRevenuePre').click(function(){
    	$('#chartRevenue01').css('left','50%');
		$('#chartRevenue02').css('left','150%');
		$(this).css('display','none');
		countChartRevenue = 0;
		$('.btnChangeChartRevenueNext').text('3 tháng >>');
    });
});