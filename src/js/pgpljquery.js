$(document).ready(
		function() {
			$("#sidebar").accordion( {
				autoheight : false,
				active : false,
				collapsible : true
			});
			$("#sidebar ul li").click(function() {
				$("#sidebar ul li").css("text-decoration", "none");
				$("#ui-widget content a").css("color", "red");
			});
			$("#sidebar ul li#stock").click(function() {
				$("#sidebar ul li#stock").css("text-decoration", "underline");
			});
			$("#sidebar ul li#production").click(
					function() {
						$("#sidebar ul li#production").css("text-decoration",
								"underline");
					});
			$("#sidebar ul li#sales").click(function() {
				$("#sidebar ul li#sales").css("text-decoration", "underline");
			});
			$("#sidebar ul li#report").click(function() {
				$("#sidebar ul li#report").css("text-decoration", "underline");
			});
			$("#sidebar ul li#transactions").click(
					function() {
						$("#sidebar ul li#transactions").css("text-decoration",
								"underline");
					});
			$("#sidebar ul li#purchase").click(
					function() {
						$("#sidebar ul li#purchase").css("text-decoration",
								"underline");
					});
			$("#sidebar ul li#payment").click(
					function() {
						$("#sidebar ul li#payment").css("text-decoration",
								"underline");
					});
			$("#sidebar ul li#consumption").click(
					function() {
						$("#sidebar ul li#consumption").css("text-decoration",
								"underline");
					});
			$("#sidebar ul li#dieselreport").click(
					function() {
						$("#sidebar ul li#dieselreport").css("text-decoration",
								"underline");
					});
			$("#sidebar ul li#inventorystock").click(
					function() {
						$("#sidebar ul li#inventorystock").css(
								"text-decoration", "underline");
					});
			$("#sidebar ul li#inventorypurchase").click(
					function() {
						$("#sidebar ul li#inventorypurchase").css(
								"text-decoration", "underline");
					});
			$("#sidebar ul li#inventoryconsumption").click(
					function() {
						$("#sidebar ul li#inventoryconsumption").css(
								"text-decoration", "underline");
					});
			$("#sidebar ul li#inventoryservices").click(
					function() {
						$("#sidebar ul li#inventoryservices").css(
								"text-decoration", "underline");
					});
			$("#sidebar ul li#inventoryservicedetails").click(
					function() {
						$("#sidebar ul li#inventoryservicedetails").css(
								"text-decoration", "underline");
					});
			$("#sidebar ul li#inventoryreport").click(
					function() {
						$("#sidebar ul li#inventoryreport").css(
								"text-decoration", "underline");
					});
			$("#sidebar ul li#fleetfleet").click(
					function() {
						$("#sidebar ul li#fleetfleet").css("text-decoration",
								"underline");
					});
			$("#sidebar ul li#fleetrunning").click(
					function() {
						$("#sidebar ul li#fleetrunning").css("text-decoration",
								"underline");
					});
			$("#sidebar ul li#fleetreports").click(
					function() {
						$("#sidebar ul li#fleetreports").css("text-decoration",
								"underline");
					});
			$("#sidebar ul li#hremployees").click(
					function() {
						$("#sidebar ul li#hremployees").css("text-decoration",
								"underline");
					});
			$("#sidebar ul li#hraddemployee").click(
					function() {
						$("#sidebar ul li#hraddemployee").css(
								"text-decoration", "underline");
					});
			$("#sidebar ul li#hreditemployee").click(
					function() {
						$("#sidebar ul li#hreditemployee").css(
								"text-decoration", "underline");
					});
			$("#sidebar ul li#hrsearch").click(
					function() {
						$("#sidebar ul li#hrsearch").css("text-decoration",
								"underline");
					});
			$("#sidebar ul li#hrreports").click(
					function() {
						$("#sidebar ul li#hrreports").css("text-decoration",
								"underline");
					});
			$("#sidebar ul li#analyticsanalytics").click(
					function() {
						$("#sidebar ul li#analyticsanalytics").css("text-decoration",
								"underline");
					});
		});
$(function() {
	$("#sidebar ul li#stock").click(function() {
		$("div#maincontents").load("stock.html");
		$("div#mainheading h3").text("PPP SYSTEM");
		$("div#nav tr td#breadcrumb").text("PPP > Stock");
	});
});
$(function() {
	$("#sidebar ul li#production").click(function() {
		$("div#maincontents").load("production.html");
		$("div#mainheading h3").text("PPP SYSTEM");
		$("div#nav tr td#breadcrumb").text("PPP > Production");
	});
});
$(function() {
	$("#sidebar ul li#sales").click(function() {
		$("div#maincontents").load("sales.html");
		$("div#mainheading h3").text("PPP SYSTEM");
		$("div#nav tr td#breadcrumb").text("PPP > Sales");
	});
});
$(function() {
	$("#sidebar ul li#report").click(function() {
		$("div#maincontents").load("reports.html");
		$("div#mainheading h3").text("PPP SYSTEM");
		$("div#nav tr td#breadcrumb").text("PPP > Reports");
	});
});
$(function() {
	$("#sidebar ul li#transactions").click(function() {
		$("div#maincontents").load("transactions.html");
		$("div#mainheading h3").text("DIESEL");
		$("div#nav tr td#breadcrumb").text("DIESEL > Transactions");
	});
});
$(function() {
	$("#sidebar ul li#purchase").click(function() {
		$("div#maincontents").load("purchase.html");
		$("div#mainheading h3").text("DIESEL");
		$("div#nav tr td#breadcrumb").text("DIESEL > Purchase");
	});
});
$(function() {
	$("#sidebar ul li#payment").click(function() {
		$("div#maincontents").load("payment.html");
		$("div#mainheading h3").text("DIESEL");
		$("div#nav tr td#breadcrumb").text("DIESEL > Payment");
	});
});
$(function() {
	$("#sidebar ul li#consumption").click(function() {
		$("div#maincontents").load("consumption.html");
		$("div#mainheading h3").text("DIESEL");
		$("div#nav tr td#breadcrumb").text("DIESEL > Consumption");
	});
});
$(function() {
	$("#sidebar ul li#dieselreport").click(function() {
		$("div#maincontents").load("dieselreport.html");
		$("div#mainheading h3").text("DIESEL");
		$("div#nav tr td#breadcrumb").text("DIESEL > Reports");
	});
});
$(function() {
	$("#sidebar ul li#inventorypurchase").click(function() {
		$("div#maincontents").load("inventorypurchase.html");
		$("div#mainheading h3").text("INVENTORY");
		$("div#nav tr td#breadcrumb").text("Inventory > Purchase");
	});
});
$(function() {
	$("#sidebar ul li#inventoryconsumption").click(function() {
		$("div#maincontents").load("inventoryconsumption.html");
		$("div#mainheading h3").text("INVENTORY");
		$("div#nav tr td#breadcrumb").text("Inventory > Consumption");
	});
});
$(function() {
	$("#sidebar ul li#inventoryreport").click(function() {
		$("div#maincontents").load("inventoryreport.html");
		$("div#mainheading h3").text("INVENTORY");
		$("div#nav tr td#breadcrumb").text("Inventory > Reports");
	});
});
$(function() {
	$("#sidebar ul li#inventorystock").click(function() {
		$("div#maincontents").load("inventorystock.html");
		$("div#mainheading h3").text("INVENTORY");
		$("div#nav tr td#breadcrumb").text("Inventory > Stock");
	});
});
$(function() {
	$("#sidebar ul li#inventoryservices").click(function() {
		$("div#maincontents").load("inventoryservices.html");
		$("div#mainheading h3").text("INVENTORY");
		$("div#nav tr td#breadcrumb").text("Inventory > Services");
	});
});
$(function() {
	$("#sidebar ul li#fleetfleet").click(function() {
		$("div#maincontents").load("fleetfleet.html");
		$("div#mainheading h3").text("FLEET");
		$("div#nav tr td#breadcrumb").text("Fleet > Fleet");
	});
});
$(function() {
	$("#sidebar ul li#fleetrunning").click(function() {
		$("div#maincontents").load("fleetrunning.html");
		$("div#mainheading h3").text("FLEET");
		$("div#nav tr td#breadcrumb").text("Fleet > Running");
	});
});
$(function() {
	$("#sidebar ul li#fleetreports").click(function() {
		$("div#maincontents").load("fleetreport.html");
		$("div#mainheading h3").text("FLEET");
		$("div#nav tr td#breadcrumb").text("Fleet > Reports");
	});
});
$(function() {
	$("#sidebar ul li#hremployees").click(function() {
		$("div#maincontents").load("hremployees.html");
		$("div#mainheading h3").text("HRM");
		$("div#nav tr td#breadcrumb").text("HRM > Employees");
	});
});
$(function() {
	$("#sidebar ul li#hraddemployee").click(function() {
		$("div#maincontents").load("hraddemployee.html");
		$("div#mainheading h3").text("HRM");
		$("div#nav tr td#breadcrumb").text("HRM > Add Employee");
	});
});
$(function() {
	$("#sidebar ul li#hreditemployee").click(function() {
		$("div#maincontents").load("hreditemployee.html");
		$("div#mainheading h3").text("HRM");
		$("div#nav tr td#breadcrumb").text("HRM > Edit Employee");
	});
});
$(function() {
	$("#sidebar ul li#hrsearch").click(function() {
		$("div#maincontents").load("hrsearchemployee.html");
		$("div#mainheading h3").text("HRM");
		$("div#nav tr td#breadcrumb").text("HRM > Search Employee");
	});
});
$(function() {
	$("#sidebar ul li#analyticsanalytics").click(function() {
		$("div#maincontents").load("analytics.html");
		$("div#mainheading h3").text("Analytics");
		$("div#nav tr td#breadcrumb").text("ANALYTICS > Analytics");
	});
});
$(function() {
	$("#datepicker").datepicker();
});
$(function() {
	$("#sidebar h3 a#ppp").click(function() {
		$("#sidebar ul li#stock").click();
	});
});
$(function() {
	$("#sidebar h3 a#diesel").click(function() {
		$("#sidebar ul li#transactions").click();
	});
});
$(function() {
	$("#sidebar h3 a#inventory").click(function() {
		$("#sidebar ul li#inventorystock").click();
	});
});
$(function() {
	$("#sidebar h3 a#fleet").click(function() {
		$("#sidebar ul li#fleetfleet").click();
	});
});
$(function() {
	$("#sidebar h3 a#hr").click(function() {
		$("#sidebar ul li#hremployees").click();
	});
});
$(function() {
	$("#sidebar h3 a#analytics").click(function() {
		$("#sidebar ul li#analyticsanalytics").click();
	});
});