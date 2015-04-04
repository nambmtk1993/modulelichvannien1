<!-- BEGIN: main -->
<script language="JavaScript" src="{NV_BASE_SITEURL}modules/lichvannien/js/amlich-hnd.js" type="text/javascript"></script>
<script language="JavaScript">

	showVietCal();

</script>

<h1>Chương trình âm lịch bằng JavaScript</h1>

<div id="thu"></div>
<div id="ngay"></div>
<div id="ngayam"></div>
<div id="dayday"></div>
<div id="day_month"></div>
<div id="cangio"></div>
<div id="tiet"></div>
<div id="day_year"></div>

<div id="ngayam"></div>
<div id="cangio"></div>

<div id="giohd"></div>


<table align="center" cellspacing="1" border="0">

<tr>
<td align="center">

<script language="JavaScript">
	document.writeln(printSelectedMonth());

</script>

</td>
</tr>

<tr>
<td align="center">
<form name="SelectMonth" action="">
Th&aacute;ng
<select name="month">
  <option value="1">1
  <option value="2">2
  <option value="3">3
  <option value="4">4
  <option value="5">5
  <option value="6">6
  <option value="7">7
  <option value="8">8
  <option value="9">9
  <option value="10">10
  <option value="11">11
  <option value="12">12
</select> &#160;&#160;&#160;&#160;
N&#x103;m
<input NAME="year" size=4 value="2005"> &#160;

<p>

<input type="button" value="Xem l&#x1ECB;ch th&aacute;ng" onClick="javascript:viewMonth(parseInt(month.value), parseInt(year.value));">
&#160;&#160;
<input type="button" value="Xem l&#x1ECB;ch n&#x0103;m" onClick="javascript:viewYear(parseInt(year.value));">
</form>

<script type="text/javascript">
	getSelectedMonth();
	document.SelectMonth.month.value = currentMonth;
	document.SelectMonth.year.value = currentYear;
	function viewMonth(mm, yy) {
		window.location = window.location.pathname+'month?yy='+yy+'&mm='+mm+'/';
		//window.location = window.location.pathname+'month/';
	}
	function viewYear(yy) {

		var loc = 'year?yy='+yy+'/';

		var win2702 = window.open(loc, "win2702", "menubar=yes,scrollbars=yes,resizable=yes");
	}
</script>
</td>
</tr>
</table>
<!-- END: main -->