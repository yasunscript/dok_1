<?php
include ("login_cek.php");
include "&_server_&/&_connection/server_connection.php";
date_default_timezone_set('Asia/Jakarta');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/logo.ico">

	
   <title>REAL TIME DATA MONITORING</title>


  </head>
    
   

<body> 

<?php 
    include("menu.php");
?>
<div class="container-fluid">
<div class="row">


	  
<div class="panels-header1" align="center">  
<div class="container-fluid"> 
    <div class="col-md-10" style="font-size:1.1em; font-weight:bold;">Single Line GI Curug</div>
    <a href="dashboard_curug_dataview.php"><div class="col-md-2 panels-blue2">Data View</div></a>  
</div>
</div> 

<div class="col-md-12">    
<div class="panels-white2">


<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:ev="http://www.w3.org/2001/xml-events"
		xmlns:v="http://schemas.microsoft.com/visio/2003/SVGExtensions/" width="100%" height="100%"
		viewBox="0 0 830.699 579.134" xml:space="preserve" color-interpolation-filters="sRGB" class="st25">
	<v:documentProperties v:langID="1033" v:viewMarkup="false">
		<v:userDefs>
			<v:ud v:nameU="msvConvertTheme"/>
		</v:userDefs>
	</v:documentProperties>

	<style type="text/css">
	<![CDATA[
		.st1 {stroke:#00b050;stroke-linecap:butt;stroke-width:0.660044}
		.st2 {fill:none;stroke:#00b050;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st3 {stroke:#00b050;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st4 {fill:#ffffff;fill-opacity:0;stroke:#ffff00;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st5 {fill:none;stroke:#ffff00;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st6 {stroke:#ffff00;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st7 {fill:#ffffff;fill-opacity:0;stroke:#923931;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st8 {fill:none;stroke:#923931;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st9 {stroke:#923931;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st10 {stroke:#ffff00;stroke-linecap:butt;stroke-width:0.660044}
		.st11 {stroke:#c00000;stroke-linecap:butt;stroke-width:1.01379}
		.st12 {marker-start:url(#mrkr5-239);stroke:#923931;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st13 {fill:#923931;fill-opacity:1;stroke:#923931;stroke-opacity:1;stroke-width:0.45454545454545}
		.st14 {fill:#000000;font-family:Calibri;font-size:0.833336em}
		.st15 {fill:#ffffff;fill-opacity:0;stroke:#7030a0;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st16 {marker-end:url(#mrkr5-430);stroke:#7030a0;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st17 {fill:#7030a0;fill-opacity:1;stroke:#7030a0;stroke-opacity:1;stroke-width:0.45454545454545}
		.st18 {fill:none;stroke:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.75}
		.st19 {font-size:1em}
		.st20 {fill:#ffff00;font-family:Calibri;font-size:0.833336em;font-weight:bold}
		.st21 {marker-start:url(#mrkr5-632);stroke:#00b050;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st22 {fill:#00b050;fill-opacity:1;stroke:#00b050;stroke-opacity:1;stroke-width:0.45454545454545}
		.st23 {fill:#ffff00;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-width:1}
		.st24 {fill:#000000;font-family:Calibri;font-size:1.00001em;font-weight:bold}
		.st25 {fill:none;fill-rule:evenodd;font-size:12px;overflow:visible;stroke-linecap:square;stroke-miterlimit:3}
	]]>
	</style>

	<defs id="Markers">
		<g id="lend5">
			<path d="M 2 1 L 0 0 L 1.98117 -0.993387 C 1.67173 -0.364515 1.67301 0.372641 1.98465 1.00043 " style="stroke:none"/>
		</g>
		<marker id="mrkr5-239" class="st13" v:arrowType="5" v:arrowSize="1" v:setback="3.61" refX="3.61" orient="auto"
				markerUnits="strokeWidth" overflow="visible">
			<use xlink:href="#lend5" transform="scale(2.2) "/>
		</marker>
		<marker id="mrkr5-430" class="st17" v:arrowType="5" v:arrowSize="1" v:setback="3.85" refX="-3.85" orient="auto"
				markerUnits="strokeWidth" overflow="visible">
			<use xlink:href="#lend5" transform="scale(-2.2,-2.2) "/>
		</marker>
		<marker id="mrkr5-632" class="st22" v:arrowType="5" v:arrowSize="1" v:setback="3.61" refX="3.61" orient="auto"
				markerUnits="strokeWidth" overflow="visible">
			<use xlink:href="#lend5" transform="scale(2.2) "/>
		</marker>
	</defs>
	<g v:mID="0" v:index="1" v:groupContext="foregroundPage">
		<v:userDefs>
			<v:ud v:nameU="MContactCount" v:prompt="" v:val="VT0(36):26"/>
		</v:userDefs>
		<title>Page-1</title>
		<v:pageProperties v:drawingScale="0.0393701" v:pageScale="0.0393701" v:drawingUnits="24" v:shadowOffsetX="8.50394"
				v:shadowOffsetY="-8.50394"/>
		<v:layer v:name="Electrical" v:index="0"/>
		<g id="group1-1" transform="translate(536.763,-198.431)" v:mID="1" v:groupContext="group">
			<title>Sheet.1</title>
			<g id="group2-2" transform="translate(0,-41.9325)" v:mID="2" v:groupContext="group">
				<title>Sheet.2</title>
				<g id="group3-3" transform="translate(26.5851,-148.443) scale(-1,1)" v:mID="3" v:groupContext="group"
						v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
								v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
								v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
								v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
					</v:custProps>
					<v:userDefs>
						<v:ud v:nameU="Type" v:val="VT0(0):26"/>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
						<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
						<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
						<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
						<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)10)"/>
					</v:userDefs>
					<title>Make contact.121</title>
					<g id="shape4-4" v:mID="4" v:groupContext="shape" v:layerMember="0" transform="translate(1.2455,-2.20686E-06)">
						<title>Sheet.4</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M6.99 564.69 L6.99 568.46" class="st1"/>
						<path d="M6.99 579.13 L6.99 575.36" class="st1"/>
						<path d="M1.9 569.04 L6.99 575.36 L6.99 579.13" class="st1"/>
					</g>
					<g id="shape5-9" v:mID="5" v:groupContext="shape" v:layerMember="0" transform="translate(6.58229,-2.32997)">
						<title>Sheet.5</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape6-11" v:mID="6" v:groupContext="shape" v:layerMember="0" transform="translate(-1.59944,1.40187)">
						<title>Sheet.6</title>
					</g>
				</g>
				<g id="shape7-13" v:mID="7" v:groupContext="shape" transform="translate(11.0007,-106.928)">
					<title>Sheet.7</title>
					<rect x="0" y="551.179" width="14.6677" height="27.955" class="st2"/>
				</g>
				<g id="shape8-15" v:mID="8" v:groupContext="shape" transform="translate(-560.799,444.251) rotate(-90)">
					<title>Sheet.8</title>
					<path d="M0 579.13 L13.56 579.13" class="st3"/>
				</g>
				<g id="shape9-18" v:mID="9" v:groupContext="shape" transform="translate(0,-63.2482)">
					<title>Sheet.9</title>
					<ellipse cx="18.3346" cy="561.662" rx="18.3346" ry="17.4719" class="st2"/>
				</g>
				<g id="shape10-20" v:mID="10" v:groupContext="shape" transform="translate(0,-45.7763)">
					<title>Sheet.10</title>
					<ellipse cx="18.3346" cy="561.662" rx="18.3346" ry="17.4719" class="st4"/>
				</g>
				<g id="shape11-22" v:mID="11" v:groupContext="shape" transform="translate(597.468,472.206) rotate(90)">
					<title>Sheet.11</title>
					<path d="M0 579.13 L8.74 579.13" class="st3"/>
				</g>
				<g id="shape12-25" v:mID="12" v:groupContext="shape" transform="translate(11.0007,0)">
					<title>Sheet.12</title>
					<rect x="0" y="551.179" width="14.6677" height="27.955" class="st5"/>
				</g>
				<g id="shape13-27" v:mID="13" v:groupContext="shape" transform="translate(-560.59,551.179) rotate(-90)">
					<title>Sheet.13</title>
					<path d="M0 579.13 L17.78 579.13" class="st6"/>
				</g>
			</g>
			<g id="shape14-30" v:mID="14" v:groupContext="shape" transform="translate(597.678,537.201) rotate(90)">
				<title>Sheet.14</title>
				<path d="M0 579.13 L41.93 579.13" class="st6"/>
			</g>
			<g id="shape15-33" v:mID="15" v:groupContext="shape" transform="translate(-560.799,374.295) rotate(-90)">
				<title>Sheet.15</title>
				<path d="M0 579.13 L13.56 579.13" class="st3"/>
			</g>
		</g>
		<g id="group16-36" transform="translate(662.402,-198.431)" v:mID="16" v:groupContext="group">
			<title>Sheet.16</title>
			<g id="group17-37" transform="translate(0,-41.9325)" v:mID="17" v:groupContext="group">
				<title>Sheet.17</title>
				<g id="group18-38" transform="translate(26.5851,-148.443) scale(-1,1)" v:mID="18" v:groupContext="group"
						v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
								v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
								v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
								v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
					</v:custProps>
					<v:userDefs>
						<v:ud v:nameU="Type" v:val="VT0(0):26"/>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
						<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
						<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
						<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
						<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)10)"/>
					</v:userDefs>
					<title>Make contact.121</title>
					<g id="shape19-39" v:mID="19" v:groupContext="shape" v:layerMember="0"
							transform="translate(1.2455,-2.20686E-06)">
						<title>Sheet.19</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M6.99 564.69 L6.99 568.46" class="st1"/>
						<path d="M6.99 579.13 L6.99 575.36" class="st1"/>
						<path d="M1.9 569.04 L6.99 575.36 L6.99 579.13" class="st1"/>
					</g>
					<g id="shape20-44" v:mID="20" v:groupContext="shape" v:layerMember="0" transform="translate(6.58229,-2.32997)">
						<title>Sheet.20</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape21-46" v:mID="21" v:groupContext="shape" v:layerMember="0" transform="translate(-1.59944,1.40187)">
						<title>Sheet.21</title>
					</g>
				</g>
				<g id="shape22-48" v:mID="22" v:groupContext="shape" transform="translate(11.0007,-106.928)">
					<title>Sheet.22</title>
					<rect x="0" y="551.179" width="14.6677" height="27.955" class="st2"/>
				</g>
				<g id="shape23-50" v:mID="23" v:groupContext="shape" transform="translate(-560.799,444.251) rotate(-90)">
					<title>Sheet.23</title>
					<path d="M0 579.13 L13.56 579.13" class="st3"/>
				</g>
				<g id="shape24-53" v:mID="24" v:groupContext="shape" transform="translate(0,-63.2482)">
					<title>Sheet.24</title>
					<ellipse cx="18.3346" cy="561.662" rx="18.3346" ry="17.4719" class="st2"/>
				</g>
				<g id="shape25-55" v:mID="25" v:groupContext="shape" transform="translate(0,-45.7763)">
					<title>Sheet.25</title>
					<ellipse cx="18.3346" cy="561.662" rx="18.3346" ry="17.4719" class="st4"/>
				</g>
				<g id="shape26-57" v:mID="26" v:groupContext="shape" transform="translate(597.468,472.206) rotate(90)">
					<title>Sheet.26</title>
					<path d="M0 579.13 L8.74 579.13" class="st3"/>
				</g>
				<g id="shape27-60" v:mID="27" v:groupContext="shape" transform="translate(11.0007,0)">
					<title>Sheet.27</title>
					<rect x="0" y="551.179" width="14.6677" height="27.955" class="st5"/>
				</g>
				<g id="shape28-62" v:mID="28" v:groupContext="shape" transform="translate(-560.59,551.179) rotate(-90)">
					<title>Sheet.28</title>
					<path d="M0 579.13 L17.78 579.13" class="st6"/>
				</g>
			</g>
			<g id="shape29-65" v:mID="29" v:groupContext="shape" transform="translate(597.678,537.201) rotate(90)">
				<title>Sheet.29</title>
				<path d="M0 579.13 L41.93 579.13" class="st6"/>
			</g>
			<g id="shape30-68" v:mID="30" v:groupContext="shape" transform="translate(-560.799,374.295) rotate(-90)">
				<title>Sheet.30</title>
				<path d="M0 579.13 L13.56 579.13" class="st3"/>
			</g>
		</g>
		<g id="group31-71" transform="translate(376.163,-198.431)" v:mID="31" v:groupContext="group">
			<title>Sheet.31</title>
			<g id="group32-72" transform="translate(26.5851,-190.376) scale(-1,1)" v:mID="32" v:groupContext="group"
					v:layerMember="0">
				<v:custProps>
					<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
							v:langID="1033" v:val="VT4(General)"/>
					<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
							v:val="VT4(Symbol 1)"/>
					<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
							v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
				</v:custProps>
				<v:userDefs>
					<v:ud v:nameU="Type" v:val="VT0(0):26"/>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
					<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
					<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)10)"/>
				</v:userDefs>
				<title>Make contact.121</title>
				<g id="shape33-73" v:mID="33" v:groupContext="shape" v:layerMember="0" transform="translate(1.2455,-2.20686E-06)">
					<title>Sheet.33</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M6.99 564.69 L6.99 568.46" class="st1"/>
					<path d="M6.99 579.13 L6.99 575.36" class="st1"/>
					<path d="M1.9 569.04 L6.99 575.36 L6.99 579.13" class="st1"/>
				</g>
				<g id="shape34-78" v:mID="34" v:groupContext="shape" v:layerMember="0" transform="translate(6.58229,-2.32997)">
					<title>Sheet.34</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape35-80" v:mID="35" v:groupContext="shape" v:layerMember="0" transform="translate(-1.59944,1.40187)">
					<title>Sheet.35</title>
				</g>
			</g>
			<g id="shape36-82" v:mID="36" v:groupContext="shape" transform="translate(11.0007,-148.86)">
				<title>Sheet.36</title>
				<rect x="0" y="551.179" width="14.6677" height="27.955" class="st2"/>
			</g>
			<g id="shape37-84" v:mID="37" v:groupContext="shape" transform="translate(-560.799,402.318) rotate(-90)">
				<title>Sheet.37</title>
				<path d="M0 579.13 L13.56 579.13" class="st3"/>
			</g>
			<g id="shape38-87" v:mID="38" v:groupContext="shape" transform="translate(0,-105.181)">
				<title>Sheet.38</title>
				<ellipse cx="18.3346" cy="561.662" rx="18.3346" ry="17.4719" class="st2"/>
			</g>
			<g id="shape39-89" v:mID="39" v:groupContext="shape" transform="translate(0,-87.7089)">
				<title>Sheet.39</title>
				<ellipse cx="18.3346" cy="561.662" rx="18.3346" ry="17.4719" class="st7"/>
			</g>
			<g id="shape40-91" v:mID="40" v:groupContext="shape" transform="translate(597.468,430.273) rotate(90)">
				<title>Sheet.40</title>
				<path d="M0 579.13 L8.74 579.13" class="st3"/>
			</g>
			<g id="shape41-94" v:mID="41" v:groupContext="shape" transform="translate(11.0007,-41.9325)">
				<title>Sheet.41</title>
				<rect x="0" y="551.179" width="14.6677" height="27.955" class="st8"/>
			</g>
			<g id="shape42-96" v:mID="42" v:groupContext="shape" transform="translate(-560.59,509.246) rotate(-90)">
				<title>Sheet.42</title>
				<path d="M0 579.13 L17.78 579.13" class="st9"/>
			</g>
			<g id="shape43-99" v:mID="43" v:groupContext="shape" transform="translate(597.678,537.201) rotate(90)">
				<title>Sheet.43</title>
				<path d="M0 579.13 L41.93 579.13" class="st9"/>
			</g>
			<g id="shape44-102" v:mID="44" v:groupContext="shape" transform="translate(-560.799,374.295) rotate(-90)">
				<title>Sheet.44</title>
				<path d="M0 579.13 L13.56 579.13" class="st3"/>
			</g>
		</g>
		<g id="group45-105" transform="translate(281.871,-198.431)" v:mID="45" v:groupContext="group">
			<title>Sheet.45</title>
			<g id="group46-106" transform="translate(26.5851,-190.376) scale(-1,1)" v:mID="46" v:groupContext="group"
					v:layerMember="0">
				<v:custProps>
					<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
							v:langID="1033" v:val="VT4(General)"/>
					<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
							v:val="VT4(Symbol 1)"/>
					<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
							v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
				</v:custProps>
				<v:userDefs>
					<v:ud v:nameU="Type" v:val="VT0(0):26"/>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
					<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
					<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)10)"/>
				</v:userDefs>
				<title>Make contact.121</title>
				<g id="shape47-107" v:mID="47" v:groupContext="shape" v:layerMember="0" transform="translate(1.2455,-2.20686E-06)">
					<title>Sheet.47</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M6.99 564.69 L6.99 568.46" class="st1"/>
					<path d="M6.99 579.13 L6.99 575.36" class="st1"/>
					<path d="M1.9 569.04 L6.99 575.36 L6.99 579.13" class="st1"/>
				</g>
				<g id="shape48-112" v:mID="48" v:groupContext="shape" v:layerMember="0" transform="translate(6.58229,-2.32997)">
					<title>Sheet.48</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape49-114" v:mID="49" v:groupContext="shape" v:layerMember="0" transform="translate(-1.59944,1.40187)">
					<title>Sheet.49</title>
				</g>
			</g>
			<g id="shape50-116" v:mID="50" v:groupContext="shape" transform="translate(11.0007,-148.86)">
				<title>Sheet.50</title>
				<rect x="0" y="551.179" width="14.6677" height="27.955" class="st2"/>
			</g>
			<g id="shape51-118" v:mID="51" v:groupContext="shape" transform="translate(-560.799,402.318) rotate(-90)">
				<title>Sheet.51</title>
				<path d="M0 579.13 L13.56 579.13" class="st3"/>
			</g>
			<g id="shape52-121" v:mID="52" v:groupContext="shape" transform="translate(0,-105.181)">
				<title>Sheet.52</title>
				<ellipse cx="18.3346" cy="561.662" rx="18.3346" ry="17.4719" class="st2"/>
			</g>
			<g id="shape53-123" v:mID="53" v:groupContext="shape" transform="translate(0,-87.7089)">
				<title>Sheet.53</title>
				<ellipse cx="18.3346" cy="561.662" rx="18.3346" ry="17.4719" class="st7"/>
			</g>
			<g id="shape54-125" v:mID="54" v:groupContext="shape" transform="translate(597.468,430.273) rotate(90)">
				<title>Sheet.54</title>
				<path d="M0 579.13 L8.74 579.13" class="st3"/>
			</g>
			<g id="shape55-128" v:mID="55" v:groupContext="shape" transform="translate(11.0007,-41.9325)">
				<title>Sheet.55</title>
				<rect x="0" y="551.179" width="14.6677" height="27.955" class="st8"/>
			</g>
			<g id="shape56-130" v:mID="56" v:groupContext="shape" transform="translate(-560.59,509.246) rotate(-90)">
				<title>Sheet.56</title>
				<path d="M0 579.13 L17.78 579.13" class="st9"/>
			</g>
			<g id="shape57-133" v:mID="57" v:groupContext="shape" transform="translate(597.678,537.201) rotate(90)">
				<title>Sheet.57</title>
				<path d="M0 579.13 L41.93 579.13" class="st9"/>
			</g>
			<g id="shape58-136" v:mID="58" v:groupContext="shape" transform="translate(-560.799,374.295) rotate(-90)">
				<title>Sheet.58</title>
				<path d="M0 579.13 L13.56 579.13" class="st3"/>
			</g>
		</g>
		<g id="shape59-139" v:mID="59" v:groupContext="shape" transform="translate(45.8785,-198.431)">
			<title>Sheet.59</title>
			<path d="M0 579.13 L253.89 579.13" class="st9"/>
		</g>
		<g id="group60-142" transform="translate(21.7816,-198.431)" v:mID="60" v:groupContext="group">
			<title>Sheet.60</title>
			<g id="group61-143" transform="translate(32.0855,-155.781) scale(-1,1)" v:mID="61" v:groupContext="group"
					v:layerMember="0">
				<v:custProps>
					<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
							v:langID="1033" v:val="VT4(General)"/>
					<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
							v:val="VT4(Symbol 1)"/>
					<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
							v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
				</v:custProps>
				<v:userDefs>
					<v:ud v:nameU="Type" v:val="VT0(0):26"/>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
					<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
					<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)22)"/>
				</v:userDefs>
				<title>Make contact.741</title>
				<g id="shape62-144" v:mID="62" v:groupContext="shape" v:layerMember="0" transform="translate(1.2455,-2.20686E-06)">
					<title>Sheet.62</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M6.99 564.69 L6.99 568.46" class="st10"/>
					<path d="M6.99 579.13 L6.99 575.36" class="st10"/>
					<path d="M1.9 569.04 L6.99 575.36 L6.99 579.13" class="st10"/>
				</g>
				<g id="shape63-149" v:mID="63" v:groupContext="shape" v:layerMember="0" transform="translate(6.58229,-2.32997)">
					<title>Sheet.63</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape64-151" v:mID="64" v:groupContext="shape" v:layerMember="0" transform="translate(-1.59944,1.40187)">
					<title>Sheet.64</title>
				</g>
			</g>
			<g id="shape65-153" v:mID="65" v:groupContext="shape" transform="translate(-555.299,439.009) rotate(-90)">
				<title>Sheet.65</title>
				<path d="M0 579.13 L15.66 579.13" class="st6"/>
			</g>
			<g id="shape66-156" v:mID="66" v:groupContext="shape" transform="translate(5.50037,-105.181)">
				<title>Sheet.66</title>
				<ellipse cx="18.3346" cy="561.662" rx="18.3346" ry="17.4719" class="st5"/>
			</g>
			<g id="shape67-158" v:mID="67" v:groupContext="shape" transform="translate(5.50037,-87.7089)">
				<title>Sheet.67</title>
				<ellipse cx="18.3346" cy="561.662" rx="18.3346" ry="17.4719" class="st7"/>
			</g>
			<g id="shape68-160" v:mID="68" v:groupContext="shape" transform="translate(16.5011,-41.9325)">
				<title>Sheet.68</title>
				<rect x="0" y="551.179" width="14.6677" height="27.955" class="st8"/>
			</g>
			<g id="shape69-162" v:mID="69" v:groupContext="shape" transform="translate(-555.089,509.246) rotate(-90)">
				<title>Sheet.69</title>
				<path d="M0 579.13 L17.78 579.13" class="st9"/>
			</g>
			<g id="shape70-165" v:mID="70" v:groupContext="shape" transform="translate(603.178,537.201) rotate(90)">
				<title>Sheet.70</title>
				<path d="M0 579.13 L41.93 579.13" class="st9"/>
			</g>
			<g id="shape71-168" v:mID="71" v:groupContext="shape" transform="translate(-555.299,408.89) rotate(-90)">
				<title>Sheet.71</title>
				<path d="M0 579.13 L18.88 579.13" class="st6"/>
			</g>
		</g>
		<g id="group72-171" transform="translate(131.789,-198.431)" v:mID="72" v:groupContext="group">
			<title>Sheet.72</title>
			<g id="group73-172" transform="translate(32.0855,-155.781) scale(-1,1)" v:mID="73" v:groupContext="group"
					v:layerMember="0">
				<v:custProps>
					<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
							v:langID="1033" v:val="VT4(General)"/>
					<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
							v:val="VT4(Symbol 1)"/>
					<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
							v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
				</v:custProps>
				<v:userDefs>
					<v:ud v:nameU="Type" v:val="VT0(0):26"/>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
					<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
					<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)22)"/>
				</v:userDefs>
				<title>Make contact.741</title>
				<g id="shape74-173" v:mID="74" v:groupContext="shape" v:layerMember="0" transform="translate(1.2455,-2.20686E-06)">
					<title>Sheet.74</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M6.99 564.69 L6.99 568.46" class="st10"/>
					<path d="M6.99 579.13 L6.99 575.36" class="st10"/>
					<path d="M1.9 569.04 L6.99 575.36 L6.99 579.13" class="st10"/>
				</g>
				<g id="shape75-178" v:mID="75" v:groupContext="shape" v:layerMember="0" transform="translate(6.58229,-2.32997)">
					<title>Sheet.75</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape76-180" v:mID="76" v:groupContext="shape" v:layerMember="0" transform="translate(-1.59944,1.40187)">
					<title>Sheet.76</title>
				</g>
			</g>
			<g id="shape77-182" v:mID="77" v:groupContext="shape" transform="translate(-555.299,439.009) rotate(-90)">
				<title>Sheet.77</title>
				<path d="M0 579.13 L15.66 579.13" class="st6"/>
			</g>
			<g id="shape78-185" v:mID="78" v:groupContext="shape" transform="translate(5.50037,-105.181)">
				<title>Sheet.78</title>
				<ellipse cx="18.3346" cy="561.662" rx="18.3346" ry="17.4719" class="st5"/>
			</g>
			<g id="shape79-187" v:mID="79" v:groupContext="shape" transform="translate(5.50037,-87.7089)">
				<title>Sheet.79</title>
				<ellipse cx="18.3346" cy="561.662" rx="18.3346" ry="17.4719" class="st7"/>
			</g>
			<g id="shape80-189" v:mID="80" v:groupContext="shape" transform="translate(16.5011,-41.9325)">
				<title>Sheet.80</title>
				<rect x="0" y="551.179" width="14.6677" height="27.955" class="st8"/>
			</g>
			<g id="shape81-191" v:mID="81" v:groupContext="shape" transform="translate(-555.089,509.246) rotate(-90)">
				<title>Sheet.81</title>
				<path d="M0 579.13 L17.78 579.13" class="st9"/>
			</g>
			<g id="shape82-194" v:mID="82" v:groupContext="shape" transform="translate(603.178,537.201) rotate(90)">
				<title>Sheet.82</title>
				<path d="M0 579.13 L41.93 579.13" class="st9"/>
			</g>
			<g id="shape83-197" v:mID="83" v:groupContext="shape" transform="translate(-555.299,408.89) rotate(-90)">
				<title>Sheet.83</title>
				<path d="M0 579.13 L18.88 579.13" class="st6"/>
			</g>
		</g>
		<g id="group84-200" transform="translate(891.942,367.993) rotate(90)" v:mID="84" v:groupContext="group" v:layerMember="0">
			<v:custProps>
				<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
						v:langID="1033" v:val="VT4(General)"/>
				<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
						v:val="VT4(Symbol 1)"/>
				<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false"
						v:langID="1033" v:cal="0" v:val="VT4()"/>
			</v:custProps>
			<v:userDefs>
				<v:ud v:nameU="Type" v:val="VT0(0):26"/>
				<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
				<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
				<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)23)"/>
			</v:userDefs>
			<title>Make contact.121</title>
			<g id="shape85-201" v:mID="85" v:groupContext="shape" v:layerMember="0" transform="translate(1.91302,-3.8673E-06)">
				<title>Sheet.85</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M10.73 553.82 L10.73 560.43" class="st11"/>
				<path d="M10.73 579.13 L10.73 572.52" class="st11"/>
				<path d="M2.92 561.45 L10.73 572.52 L10.73 579.13" class="st11"/>
			</g>
			<g id="shape86-206" v:mID="86" v:groupContext="shape" v:layerMember="0" transform="translate(10.11,-4.08304)">
				<title>Sheet.86</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape87-208" v:mID="87" v:groupContext="shape" v:layerMember="0" transform="translate(-2.45664,2.45664)">
				<title>Sheet.87</title>
			</g>
		</g>
		<g id="shape88-210" v:mID="88" v:groupContext="shape" transform="translate(927.533,380.703) rotate(90)">
			<title>Sheet.88</title>
			<path d="M0 579.13 L50.67 579.13" class="st9"/>
		</g>
		<g id="shape89-213" v:mID="89" v:groupContext="shape" transform="translate(267.727,-154.751)">
			<title>Sheet.89</title>
			<path d="M0 579.13 L161.34 579.13" class="st9"/>
		</g>
		<g id="shape90-216" v:mID="90" v:groupContext="shape" transform="translate(260.393,-95.3469)">
			<title>Sheet.90</title>
			<rect x="0" y="551.179" width="14.6677" height="27.955" class="st8"/>
		</g>
		<g id="shape91-218" v:mID="91" v:groupContext="shape" transform="translate(341.065,-95.3469)">
			<title>Sheet.91</title>
			<rect x="0" y="551.179" width="14.6677" height="27.955" class="st8"/>
		</g>
		<g id="shape92-220" v:mID="92" v:groupContext="shape" transform="translate(421.737,-95.3469)">
			<title>Sheet.92</title>
			<rect x="0" y="551.179" width="14.6677" height="27.955" class="st8"/>
		</g>
		<g id="shape93-222" v:mID="93" v:groupContext="shape" transform="translate(-311.407,455.832) rotate(-90)">
			<title>Sheet.93</title>
			<path d="M0 579.13 L31.45 579.13" class="st9"/>
		</g>
		<g id="shape94-225" v:mID="94" v:groupContext="shape" transform="translate(-230.735,455.832) rotate(-90)">
			<title>Sheet.94</title>
			<path d="M0 579.13 L31.45 579.13" class="st9"/>
		</g>
		<g id="shape95-228" v:mID="95" v:groupContext="shape" transform="translate(-150.063,455.832) rotate(-90)">
			<title>Sheet.95</title>
			<path d="M0 579.13 L31.45 579.13" class="st9"/>
		</g>
		<g id="shape96-231" v:mID="96" v:groupContext="shape" transform="translate(482.658,-198.556)">
			<title>Sheet.96</title>
			<path d="M0 579.13 L329.26 579.13" class="st6"/>
		</g>
		<g id="shape97-234" v:mID="97" v:groupContext="shape" transform="translate(-311.407,515.236) rotate(-90)">
			<title>Sheet.97</title>
			<path d="M5.41 579.13 L5.77 579.13 L31.45 579.13" class="st12"/>
		</g>
		<g id="shape98-240" v:mID="98" v:groupContext="shape" transform="translate(-230.735,515.236) rotate(-90)">
			<title>Sheet.98</title>
			<path d="M5.41 579.13 L5.77 579.13 L31.45 579.13" class="st12"/>
		</g>
		<g id="shape99-245" v:mID="99" v:groupContext="shape" transform="translate(-150.063,515.236) rotate(-90)">
			<title>Sheet.99</title>
			<path d="M5.41 579.13 L5.77 579.13 L31.45 579.13" class="st12"/>
		</g>
		<g id="group100-250" transform="translate(935.945,367.993) rotate(90)" v:mID="100" v:groupContext="group" v:layerMember="0">
			<v:custProps>
				<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
						v:langID="1033" v:val="VT4(General)"/>
				<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
						v:val="VT4(Symbol 1)"/>
				<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false"
						v:langID="1033" v:cal="0" v:val="VT4()"/>
			</v:custProps>
			<v:userDefs>
				<v:ud v:nameU="Type" v:val="VT0(0):26"/>
				<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
				<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
				<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)33)"/>
			</v:userDefs>
			<title>Make contact.1058</title>
			<g id="shape101-251" v:mID="101" v:groupContext="shape" v:layerMember="0" transform="translate(1.91302,-3.8673E-06)">
				<title>Sheet.101</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M10.73 553.82 L10.73 560.43" class="st11"/>
				<path d="M10.73 579.13 L10.73 572.52" class="st11"/>
				<path d="M2.92 561.45 L10.73 572.52 L10.73 579.13" class="st11"/>
			</g>
			<g id="shape102-256" v:mID="102" v:groupContext="shape" v:layerMember="0" transform="translate(10.11,-4.08304)">
				<title>Sheet.102</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape103-258" v:mID="103" v:groupContext="shape" v:layerMember="0" transform="translate(-2.45664,2.45664)">
				<title>Sheet.103</title>
			</g>
		</g>
		<g id="shape104-260" v:mID="104" v:groupContext="shape" transform="translate(312.808,959.799) rotate(180)">
			<title>Sheet.104</title>
			<path d="M0 579.13 L12.08 579.13" class="st9"/>
		</g>
		<g id="shape105-263" v:mID="105" v:groupContext="shape" transform="translate(382.156,-198.469)">
			<title>Sheet.105</title>
			<path d="M0 579.13 L12.08 579.13" class="st9"/>
		</g>
		<g id="shape106-266" v:mID="106" v:groupContext="shape" transform="translate(338.153,-198.469)">
			<title>Sheet.106</title>
			<path d="M0 579.13 L18.66 579.13" class="st9"/>
		</g>
		<g id="group107-269" transform="translate(463.579,-28.9538)" v:mID="107" v:groupContext="group">
			<title>Sheet.107</title>
			<g id="group108-270" transform="translate(26.4309,-126.428) scale(-1,1)" v:mID="108" v:groupContext="group"
					v:layerMember="0">
				<v:custProps>
					<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
							v:langID="1033" v:val="VT4(General)"/>
					<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
							v:val="VT4(Symbol 1)"/>
					<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
							v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
				</v:custProps>
				<v:userDefs>
					<v:ud v:nameU="Type" v:val="VT0(0):26"/>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
					<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
					<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)25)"/>
				</v:userDefs>
				<title>Make contact.808</title>
				<g id="shape109-271" v:mID="109" v:groupContext="shape" v:layerMember="0"
						transform="translate(1.2455,-2.20686E-06)">
					<title>Sheet.109</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M6.99 564.69 L6.99 568.46" class="st10"/>
					<path d="M6.99 579.13 L6.99 575.36" class="st10"/>
					<path d="M1.9 569.04 L6.99 575.36 L6.99 579.13" class="st10"/>
				</g>
				<g id="shape110-276" v:mID="110" v:groupContext="shape" v:layerMember="0" transform="translate(6.58229,-2.32997)">
					<title>Sheet.110</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape111-278" v:mID="111" v:groupContext="shape" v:layerMember="0" transform="translate(-1.59944,1.40187)">
					<title>Sheet.111</title>
				</g>
			</g>
			<g id="shape112-280" v:mID="112" v:groupContext="shape" transform="translate(11.0007,-66.3932)">
				<title>Sheet.112</title>
				<rect x="0" y="551.179" width="14.6677" height="27.955" class="st5"/>
			</g>
			<g id="shape113-282" v:mID="113" v:groupContext="shape" transform="translate(597.314,512.391) rotate(90)">
				<title>Sheet.113</title>
				<path d="M0 579.13 L31.45 579.13" class="st6"/>
			</g>
			<g id="shape114-285" v:mID="114" v:groupContext="shape" transform="translate(18.1804,-133.223)">
				<title>Sheet.114</title>
				<path d="M0 579.13 L0 574.01 L0 542.88" class="st6"/>
			</g>
			<g id="shape115-288" v:mID="115" v:groupContext="shape" transform="translate(597.314,452.705) rotate(90)">
				<title>Sheet.115</title>
				<path d="M0 579.13 L32.08 579.13" class="st6"/>
			</g>
			<g id="shape116-291" v:mID="116" v:groupContext="shape">
				<title>Sheet.116</title>
				<desc>M</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="18.3346" cy="561.662" width="36.67" height="34.9438"/>
				<ellipse cx="18.3346" cy="561.662" rx="18.3346" ry="17.4719" class="st5"/>
				<text x="14.06" y="564.66" class="st14" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>M</text>			</g>
		</g>
		<g id="group117-294" transform="translate(507.427,-28.9538)" v:mID="117" v:groupContext="group">
			<title>Sheet.117</title>
			<g id="group118-295" transform="translate(26.4309,-126.428) scale(-1,1)" v:mID="118" v:groupContext="group"
					v:layerMember="0">
				<v:custProps>
					<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
							v:langID="1033" v:val="VT4(General)"/>
					<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
							v:val="VT4(Symbol 1)"/>
					<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
							v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
				</v:custProps>
				<v:userDefs>
					<v:ud v:nameU="Type" v:val="VT0(0):26"/>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
					<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
					<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)25)"/>
				</v:userDefs>
				<title>Make contact.808</title>
				<g id="shape119-296" v:mID="119" v:groupContext="shape" v:layerMember="0"
						transform="translate(1.2455,-2.20686E-06)">
					<title>Sheet.119</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M6.99 564.69 L6.99 568.46" class="st10"/>
					<path d="M6.99 579.13 L6.99 575.36" class="st10"/>
					<path d="M1.9 569.04 L6.99 575.36 L6.99 579.13" class="st10"/>
				</g>
				<g id="shape120-301" v:mID="120" v:groupContext="shape" v:layerMember="0" transform="translate(6.58229,-2.32997)">
					<title>Sheet.120</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape121-303" v:mID="121" v:groupContext="shape" v:layerMember="0" transform="translate(-1.59944,1.40187)">
					<title>Sheet.121</title>
				</g>
			</g>
			<g id="shape122-305" v:mID="122" v:groupContext="shape" transform="translate(11.0007,-66.3932)">
				<title>Sheet.122</title>
				<rect x="0" y="551.179" width="14.6677" height="27.955" class="st5"/>
			</g>
			<g id="shape123-307" v:mID="123" v:groupContext="shape" transform="translate(597.314,512.391) rotate(90)">
				<title>Sheet.123</title>
				<path d="M0 579.13 L31.45 579.13" class="st6"/>
			</g>
			<g id="shape124-310" v:mID="124" v:groupContext="shape" transform="translate(18.1804,-133.223)">
				<title>Sheet.124</title>
				<path d="M0 579.13 L0 574.01 L0 542.88" class="st6"/>
			</g>
			<g id="shape125-313" v:mID="125" v:groupContext="shape" transform="translate(597.314,452.705) rotate(90)">
				<title>Sheet.125</title>
				<path d="M0 579.13 L32.08 579.13" class="st6"/>
			</g>
			<g id="shape126-316" v:mID="126" v:groupContext="shape">
				<title>Sheet.126</title>
				<desc>M</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="18.3346" cy="561.662" width="36.67" height="34.9438"/>
				<ellipse cx="18.3346" cy="561.662" rx="18.3346" ry="17.4719" class="st5"/>
				<text x="14.06" y="564.66" class="st14" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>M</text>			</g>
		</g>
		<g id="group127-319" transform="translate(551.275,-28.9538)" v:mID="127" v:groupContext="group">
			<title>Sheet.127</title>
			<g id="group128-320" transform="translate(26.4309,-126.428) scale(-1,1)" v:mID="128" v:groupContext="group"
					v:layerMember="0">
				<v:custProps>
					<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
							v:langID="1033" v:val="VT4(General)"/>
					<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
							v:val="VT4(Symbol 1)"/>
					<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
							v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
				</v:custProps>
				<v:userDefs>
					<v:ud v:nameU="Type" v:val="VT0(0):26"/>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
					<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
					<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)25)"/>
				</v:userDefs>
				<title>Make contact.808</title>
				<g id="shape129-321" v:mID="129" v:groupContext="shape" v:layerMember="0"
						transform="translate(1.2455,-2.20686E-06)">
					<title>Sheet.129</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M6.99 564.69 L6.99 568.46" class="st10"/>
					<path d="M6.99 579.13 L6.99 575.36" class="st10"/>
					<path d="M1.9 569.04 L6.99 575.36 L6.99 579.13" class="st10"/>
				</g>
				<g id="shape130-326" v:mID="130" v:groupContext="shape" v:layerMember="0" transform="translate(6.58229,-2.32997)">
					<title>Sheet.130</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape131-328" v:mID="131" v:groupContext="shape" v:layerMember="0" transform="translate(-1.59944,1.40187)">
					<title>Sheet.131</title>
				</g>
			</g>
			<g id="shape132-330" v:mID="132" v:groupContext="shape" transform="translate(11.0007,-66.3932)">
				<title>Sheet.132</title>
				<rect x="0" y="551.179" width="14.6677" height="27.955" class="st5"/>
			</g>
			<g id="shape133-332" v:mID="133" v:groupContext="shape" transform="translate(597.314,512.391) rotate(90)">
				<title>Sheet.133</title>
				<path d="M0 579.13 L31.45 579.13" class="st6"/>
			</g>
			<g id="shape134-335" v:mID="134" v:groupContext="shape" transform="translate(18.1804,-133.223)">
				<title>Sheet.134</title>
				<path d="M0 579.13 L0 574.01 L0 542.88" class="st6"/>
			</g>
			<g id="shape135-338" v:mID="135" v:groupContext="shape" transform="translate(597.314,452.705) rotate(90)">
				<title>Sheet.135</title>
				<path d="M0 579.13 L32.08 579.13" class="st6"/>
			</g>
			<g id="shape136-341" v:mID="136" v:groupContext="shape">
				<title>Sheet.136</title>
				<desc>M</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="18.3346" cy="561.662" width="36.67" height="34.9438"/>
				<ellipse cx="18.3346" cy="561.662" rx="18.3346" ry="17.4719" class="st5"/>
				<text x="14.06" y="564.66" class="st14" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>M</text>			</g>
		</g>
		<g id="group137-344" transform="translate(595.123,-28.9538)" v:mID="137" v:groupContext="group">
			<title>Sheet.137</title>
			<g id="group138-345" transform="translate(26.4309,-126.428) scale(-1,1)" v:mID="138" v:groupContext="group"
					v:layerMember="0">
				<v:custProps>
					<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
							v:langID="1033" v:val="VT4(General)"/>
					<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
							v:val="VT4(Symbol 1)"/>
					<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
							v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
				</v:custProps>
				<v:userDefs>
					<v:ud v:nameU="Type" v:val="VT0(0):26"/>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
					<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
					<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)25)"/>
				</v:userDefs>
				<title>Make contact.808</title>
				<g id="shape139-346" v:mID="139" v:groupContext="shape" v:layerMember="0"
						transform="translate(1.2455,-2.20686E-06)">
					<title>Sheet.139</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M6.99 564.69 L6.99 568.46" class="st10"/>
					<path d="M6.99 579.13 L6.99 575.36" class="st10"/>
					<path d="M1.9 569.04 L6.99 575.36 L6.99 579.13" class="st10"/>
				</g>
				<g id="shape140-351" v:mID="140" v:groupContext="shape" v:layerMember="0" transform="translate(6.58229,-2.32997)">
					<title>Sheet.140</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape141-353" v:mID="141" v:groupContext="shape" v:layerMember="0" transform="translate(-1.59944,1.40187)">
					<title>Sheet.141</title>
				</g>
			</g>
			<g id="shape142-355" v:mID="142" v:groupContext="shape" transform="translate(11.0007,-66.3932)">
				<title>Sheet.142</title>
				<rect x="0" y="551.179" width="14.6677" height="27.955" class="st5"/>
			</g>
			<g id="shape143-357" v:mID="143" v:groupContext="shape" transform="translate(597.314,512.391) rotate(90)">
				<title>Sheet.143</title>
				<path d="M0 579.13 L31.45 579.13" class="st6"/>
			</g>
			<g id="shape144-360" v:mID="144" v:groupContext="shape" transform="translate(18.1804,-133.223)">
				<title>Sheet.144</title>
				<path d="M0 579.13 L0 574.01 L0 542.88" class="st6"/>
			</g>
			<g id="shape145-363" v:mID="145" v:groupContext="shape" transform="translate(597.314,452.705) rotate(90)">
				<title>Sheet.145</title>
				<path d="M0 579.13 L32.08 579.13" class="st6"/>
			</g>
			<g id="shape146-366" v:mID="146" v:groupContext="shape">
				<title>Sheet.146</title>
				<desc>M</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="18.3346" cy="561.662" width="36.67" height="34.9438"/>
				<ellipse cx="18.3346" cy="561.662" rx="18.3346" ry="17.4719" class="st5"/>
				<text x="14.06" y="564.66" class="st14" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>M</text>			</g>
		</g>
		<g id="group147-369" transform="translate(638.971,-28.9538)" v:mID="147" v:groupContext="group">
			<title>Sheet.147</title>
			<g id="group148-370" transform="translate(26.4309,-126.428) scale(-1,1)" v:mID="148" v:groupContext="group"
					v:layerMember="0">
				<v:custProps>
					<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
							v:langID="1033" v:val="VT4(General)"/>
					<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
							v:val="VT4(Symbol 1)"/>
					<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
							v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
				</v:custProps>
				<v:userDefs>
					<v:ud v:nameU="Type" v:val="VT0(0):26"/>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
					<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
					<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)25)"/>
				</v:userDefs>
				<title>Make contact.808</title>
				<g id="shape149-371" v:mID="149" v:groupContext="shape" v:layerMember="0"
						transform="translate(1.2455,-2.20686E-06)">
					<title>Sheet.149</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M6.99 564.69 L6.99 568.46" class="st10"/>
					<path d="M6.99 579.13 L6.99 575.36" class="st10"/>
					<path d="M1.9 569.04 L6.99 575.36 L6.99 579.13" class="st10"/>
				</g>
				<g id="shape150-376" v:mID="150" v:groupContext="shape" v:layerMember="0" transform="translate(6.58229,-2.32997)">
					<title>Sheet.150</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape151-378" v:mID="151" v:groupContext="shape" v:layerMember="0" transform="translate(-1.59944,1.40187)">
					<title>Sheet.151</title>
				</g>
			</g>
			<g id="shape152-380" v:mID="152" v:groupContext="shape" transform="translate(11.0007,-66.3932)">
				<title>Sheet.152</title>
				<rect x="0" y="551.179" width="14.6677" height="27.955" class="st5"/>
			</g>
			<g id="shape153-382" v:mID="153" v:groupContext="shape" transform="translate(597.314,512.391) rotate(90)">
				<title>Sheet.153</title>
				<path d="M0 579.13 L31.45 579.13" class="st6"/>
			</g>
			<g id="shape154-385" v:mID="154" v:groupContext="shape" transform="translate(18.1804,-133.223)">
				<title>Sheet.154</title>
				<path d="M0 579.13 L0 574.01 L0 542.88" class="st6"/>
			</g>
			<g id="shape155-388" v:mID="155" v:groupContext="shape" transform="translate(597.314,452.705) rotate(90)">
				<title>Sheet.155</title>
				<path d="M0 579.13 L32.08 579.13" class="st6"/>
			</g>
			<g id="shape156-391" v:mID="156" v:groupContext="shape">
				<title>Sheet.156</title>
				<desc>M</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="18.3346" cy="561.662" width="36.67" height="34.9438"/>
				<ellipse cx="18.3346" cy="561.662" rx="18.3346" ry="17.4719" class="st5"/>
				<text x="14.06" y="564.66" class="st14" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>M</text>			</g>
		</g>
		<g id="shape157-394" v:mID="157" v:groupContext="shape" transform="translate(693.819,-95.3469)">
			<title>Sheet.157</title>
			<rect x="0" y="551.179" width="14.6677" height="27.955" class="st5"/>
		</g>
		<g id="shape158-396" v:mID="158" v:groupContext="shape" transform="translate(1280.13,483.438) rotate(90)">
			<title>Sheet.158</title>
			<path d="M0 579.13 L31.45 579.13" class="st6"/>
		</g>
		<g id="shape159-399" v:mID="159" v:groupContext="shape" transform="translate(672.992,-18.2648)">
			<title>Sheet.159</title>
			<desc>M</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="28.1608" cy="550.973" width="56.33" height="56.3216"/>
			<ellipse cx="28.1608" cy="550.973" rx="28.1608" ry="28.1608" class="st5"/>
			<text x="23.89" y="553.97" class="st14" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>M</text>		</g>
		<g id="group160-402" transform="translate(692.748,-123.302)" v:mID="160" v:groupContext="group">
			<title>Sheet.160</title>
			<g id="group161-403" transform="translate(16.5011,-32.0803) scale(-1,1)" v:mID="161" v:groupContext="group"
					v:layerMember="0">
				<v:custProps>
					<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
							v:langID="1033" v:val="VT4(General)"/>
					<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
							v:val="VT4(Symbol 1)"/>
					<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
							v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
				</v:custProps>
				<v:userDefs>
					<v:ud v:nameU="Type" v:val="VT0(0):26"/>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
					<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
					<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)25)"/>
				</v:userDefs>
				<title>Make contact.808</title>
				<g id="shape162-404" v:mID="162" v:groupContext="shape" v:layerMember="0"
						transform="translate(1.2455,-2.20686E-06)">
					<title>Sheet.162</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M6.99 564.69 L6.99 568.46" class="st10"/>
					<path d="M6.99 579.13 L6.99 575.36" class="st10"/>
					<path d="M1.9 569.04 L6.99 575.36 L6.99 579.13" class="st10"/>
				</g>
				<g id="shape163-409" v:mID="163" v:groupContext="shape" v:layerMember="0" transform="translate(6.58229,-2.32997)">
					<title>Sheet.163</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape164-411" v:mID="164" v:groupContext="shape" v:layerMember="0" transform="translate(-1.59944,1.40187)">
					<title>Sheet.164</title>
				</g>
			</g>
			<g id="shape165-413" v:mID="165" v:groupContext="shape" transform="translate(8.25055,-38.8749)">
				<title>Sheet.165</title>
				<path d="M0 579.13 L0 574.01 L0 542.88" class="st6"/>
			</g>
			<g id="shape166-416" v:mID="166" v:groupContext="shape" transform="translate(587.384,547.054) rotate(90)">
				<title>Sheet.166</title>
				<path d="M0 579.13 L32.08 579.13" class="st6"/>
			</g>
		</g>
		<g id="group167-419" transform="translate(737.092,-11.6067)" v:mID="167" v:groupContext="group">
			<title>Sheet.167</title>
			<g id="group168-420" transform="translate(0,-59.2796)" v:mID="168" v:groupContext="group">
				<title>Sheet.168</title>
				<g id="shape169-421" v:mID="169" v:groupContext="shape" transform="translate(0,-17.4719)">
					<title>Sheet.169</title>
					<ellipse cx="18.3346" cy="561.662" rx="18.3346" ry="17.4719" class="st5"/>
				</g>
				<g id="shape170-423" v:mID="170" v:groupContext="shape">
					<title>Sheet.170</title>
					<ellipse cx="18.3346" cy="561.662" rx="18.3346" ry="17.4719" class="st15"/>
				</g>
			</g>
			<g id="shape171-425" v:mID="171" v:groupContext="shape" transform="translate(597.468,519.73) rotate(90)">
				<title>Sheet.171</title>
				<path d="M0 579.13 L53.63 579.13" class="st16"/>
			</g>
			<g id="group172-431" transform="translate(10.084,-113.006)" v:mID="172" v:groupContext="group">
				<title>Sheet.172</title>
				<g id="group173-432" transform="translate(16.5011,-32.0803) scale(-1,1)" v:mID="173" v:groupContext="group"
						v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
								v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
								v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
								v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
					</v:custProps>
					<v:userDefs>
						<v:ud v:nameU="Type" v:val="VT0(0):26"/>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
						<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
						<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
						<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
						<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)35)"/>
					</v:userDefs>
					<title>Make contact.1120</title>
					<g id="shape174-433" v:mID="174" v:groupContext="shape" v:layerMember="0"
							transform="translate(1.2455,-2.20686E-06)">
						<title>Sheet.174</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M6.99 564.69 L6.99 568.46" class="st10"/>
						<path d="M6.99 579.13 L6.99 575.36" class="st10"/>
						<path d="M1.9 569.04 L6.99 575.36 L6.99 579.13" class="st10"/>
					</g>
					<g id="shape175-438" v:mID="175" v:groupContext="shape" v:layerMember="0"
							transform="translate(6.58229,-2.32997)">
						<title>Sheet.175</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape176-440" v:mID="176" v:groupContext="shape" v:layerMember="0"
							transform="translate(-1.59944,1.40187)">
						<title>Sheet.176</title>
					</g>
				</g>
				<g id="shape177-442" v:mID="177" v:groupContext="shape" transform="translate(8.25055,-38.8749)">
					<title>Sheet.177</title>
					<path d="M0 579.13 L0 574.01 L0 542.88" class="st6"/>
				</g>
				<g id="shape178-445" v:mID="178" v:groupContext="shape" transform="translate(587.384,547.054) rotate(90)">
					<title>Sheet.178</title>
					<path d="M0 579.13 L32.08 579.13" class="st6"/>
				</g>
			</g>
		</g>
		<g id="group179-448" transform="translate(38.3002,-431.157)" v:mID="179" v:groupContext="group">
			<title>Sheet.179</title>
			<g id="shape180-449" v:mID="180" v:groupContext="shape" transform="translate(5.64798,0)">
				<title>Sheet.180</title>
				<path d="M0 579.13 L8.96 579.13" class="st6"/>
			</g>
			<g id="shape181-452" v:mID="181" v:groupContext="shape">
				<title>Sheet.181</title>
				<path d="M0 579.13 L5.65 579.13" class="st6"/>
			</g>
		</g>
		<g id="group182-455" transform="translate(793.28,-11.6067)" v:mID="182" v:groupContext="group">
			<title>Sheet.182</title>
			<g id="group183-456" transform="translate(0,-59.2796)" v:mID="183" v:groupContext="group">
				<title>Sheet.183</title>
				<g id="shape184-457" v:mID="184" v:groupContext="shape" transform="translate(0,-17.4719)">
					<title>Sheet.184</title>
					<ellipse cx="18.3346" cy="561.662" rx="18.3346" ry="17.4719" class="st5"/>
				</g>
				<g id="shape185-459" v:mID="185" v:groupContext="shape">
					<title>Sheet.185</title>
					<ellipse cx="18.3346" cy="561.662" rx="18.3346" ry="17.4719" class="st15"/>
				</g>
			</g>
			<g id="shape186-461" v:mID="186" v:groupContext="shape" transform="translate(597.468,519.73) rotate(90)">
				<title>Sheet.186</title>
				<path d="M0 579.13 L53.63 579.13" class="st16"/>
			</g>
			<g id="group187-466" transform="translate(10.084,-113.006)" v:mID="187" v:groupContext="group">
				<title>Sheet.187</title>
				<g id="group188-467" transform="translate(16.5011,-32.0803) scale(-1,1)" v:mID="188" v:groupContext="group"
						v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
								v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
								v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
								v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
					</v:custProps>
					<v:userDefs>
						<v:ud v:nameU="Type" v:val="VT0(0):26"/>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
						<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
						<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
						<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
						<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)35)"/>
					</v:userDefs>
					<title>Make contact.1120</title>
					<g id="shape189-468" v:mID="189" v:groupContext="shape" v:layerMember="0"
							transform="translate(1.2455,-2.20686E-06)">
						<title>Sheet.189</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M6.99 564.69 L6.99 568.46" class="st10"/>
						<path d="M6.99 579.13 L6.99 575.36" class="st10"/>
						<path d="M1.9 569.04 L6.99 575.36 L6.99 579.13" class="st10"/>
					</g>
					<g id="shape190-473" v:mID="190" v:groupContext="shape" v:layerMember="0"
							transform="translate(6.58229,-2.32997)">
						<title>Sheet.190</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape191-475" v:mID="191" v:groupContext="shape" v:layerMember="0"
							transform="translate(-1.59944,1.40187)">
						<title>Sheet.191</title>
					</g>
				</g>
				<g id="shape192-477" v:mID="192" v:groupContext="shape" transform="translate(8.25055,-38.8749)">
					<title>Sheet.192</title>
					<path d="M0 579.13 L0 574.4 L0 545.58" class="st6"/>
				</g>
				<g id="shape193-480" v:mID="193" v:groupContext="shape" transform="translate(587.384,547.054) rotate(90)">
					<title>Sheet.193</title>
					<path d="M0 579.13 L32.08 579.13" class="st6"/>
				</g>
			</g>
		</g>
		<g id="shape194-483" v:mID="194" v:groupContext="shape" transform="translate(51.3099,-453.656)">
			<title>Sheet.194</title>
			<desc>MINIHYDRO</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="44.8313" cy="571.277" width="89.67" height="15.7136"/>
			<rect x="0" y="563.42" width="89.6627" height="15.7136" class="st18"/>
			<text x="20.16" y="574.28" class="st14" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>MINIHYDRO</text>		</g>
		<g id="shape195-486" v:mID="195" v:groupContext="shape" transform="translate(0.375,-433.674)">
			<title>Sheet.195</title>
			<desc>UNIT 1</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="44.8313" cy="571.277" width="89.67" height="15.7136"/>
			<rect x="0" y="563.42" width="89.6627" height="15.7136" class="st18"/>
			<text x="31.04" y="574.28" class="st14" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>UNIT 1</text>		</g>
		<g id="shape196-489" v:mID="196" v:groupContext="shape" transform="translate(109.975,-433.674)">
			<title>Sheet.196</title>
			<desc>UNIT 2</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="44.8313" cy="571.277" width="89.67" height="15.7136"/>
			<rect x="0" y="563.42" width="89.6627" height="15.7136" class="st18"/>
			<text x="31.04" y="574.28" class="st14" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>UNIT 2</text>		</g>
		<g id="shape197-492" v:mID="197" v:groupContext="shape" transform="translate(63.317,-292.469)">
			<title>Sheet.197</title>
			<desc>TRAFO 4 MVA</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="23.8349" cy="565.156" width="47.67" height="27.955"/>
			<rect x="0" y="551.179" width="47.6699" height="27.955" class="st18"/>
			<text x="10.18" y="562.16" class="st14" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO<v:newlineChar/><tspan
						x="9.04" dy="1.2em" class="st19"> </tspan>4 MVA</text>		</g>
		<g id="shape198-496" v:mID="198" v:groupContext="shape" transform="translate(172.035,-290.576)">
			<title>Sheet.198</title>
			<desc>TRAFO 4 MVA</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="23.8349" cy="563.263" width="47.67" height="31.7415"/>
			<rect x="0" y="547.392" width="47.6699" height="31.7415" class="st18"/>
			<text x="10.18" y="560.26" class="st14" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO <v:newlineChar/><tspan
						x="10.17" dy="1.2em" class="st19">4 MVA</tspan></text>		</g>
		<g id="shape199-500" v:mID="199" v:groupContext="shape" transform="translate(224.64,-290.576)">
			<title>Sheet.199</title>
			<desc>TRAFO 1 10 MVA 70/20KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="31.0623" cy="563.263" width="62.13" height="31.7415"/>
			<rect x="0" y="547.392" width="62.1245" height="31.7415" class="st18"/>
			<text x="13.75" y="554.26" class="st14" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO 1 <v:newlineChar/><tspan
						x="14.86" dy="1.2em" class="st19">10 MVA<v:newlineChar/></tspan><tspan x="13.56" dy="1.2em" class="st19">70/20KV</tspan></text>		</g>
		<g id="shape200-505" v:mID="200" v:groupContext="shape" transform="translate(408.008,-290.576)">
			<title>Sheet.200</title>
			<desc>TRAFO 4 15 MVA 70/20KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="31.0623" cy="563.263" width="62.13" height="31.7415"/>
			<rect x="0" y="547.392" width="62.1245" height="31.7415" class="st18"/>
			<text x="13.75" y="554.26" class="st14" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO 4 <v:newlineChar/><tspan
						x="14.86" dy="1.2em" class="st19">15 MVA<v:newlineChar/></tspan><tspan x="13.56" dy="1.2em" class="st19">70/20KV</tspan></text>		</g>
		<g id="shape201-510" v:mID="201" v:groupContext="shape" transform="translate(569.305,-290.576)">
			<title>Sheet.201</title>
			<desc>TRAFO 2 5 MVA 70/20KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="31.0623" cy="563.263" width="62.13" height="31.7415"/>
			<rect x="0" y="547.392" width="62.1245" height="31.7415" class="st18"/>
			<text x="13.75" y="554.26" class="st14" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO 2 <v:newlineChar/><tspan
						x="17.39" dy="1.2em" class="st19">5 MVA<v:newlineChar/></tspan><tspan x="13.56" dy="1.2em" class="st19">70/20KV</tspan></text>		</g>
		<g id="shape202-515" v:mID="202" v:groupContext="shape" transform="translate(715.624,-290.576)">
			<title>Sheet.202</title>
			<desc>TRAFO 3 5 MVA 70/20KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="31.0623" cy="563.263" width="62.13" height="31.7415"/>
			<rect x="0" y="547.392" width="62.1245" height="31.7415" class="st18"/>
			<text x="13.75" y="554.26" class="st14" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO 3<v:newlineChar/><tspan
						x="17.39" dy="1.2em" class="st19">5 MVA<v:newlineChar/></tspan><tspan x="13.56" dy="1.2em" class="st19">70/20KV</tspan></text>		</g>
		<g id="shape203-520" v:mID="203" v:groupContext="shape" transform="translate(220.39,-49.9903)">
			<title>Sheet.203</title>
			<desc>PT.BPS</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="44.8313" cy="571.277" width="89.67" height="15.7136"/>
			<rect x="0" y="563.42" width="89.6627" height="15.7136" class="st18"/>
			<text x="30.95" y="574.28" class="st14" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>PT.BPS</text>		</g>
		<g id="shape204-523" v:mID="204" v:groupContext="shape" transform="translate(299.808,-49.9903)">
			<title>Sheet.204</title>
			<desc>PT.KTP</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="44.8313" cy="571.277" width="89.67" height="15.7136"/>
			<rect x="0" y="563.42" width="89.6627" height="15.7136" class="st18"/>
			<text x="30.93" y="574.28" class="st14" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>PT.KTP</text>		</g>
		<g id="shape205-526" v:mID="205" v:groupContext="shape" transform="translate(380.507,-49.9903)">
			<title>Sheet.205</title>
			<desc>AUXILIARY</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="44.8313" cy="571.277" width="89.67" height="15.7136"/>
			<rect x="0" y="563.42" width="89.6627" height="15.7136" class="st18"/>
			<text x="23.47" y="574.28" class="st14" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>AUXILIARY</text>		</g>
		<g id="shape206-529" v:mID="206" v:groupContext="shape" transform="translate(436.064,-11.6067)">
			<title>Sheet.206</title>
			<desc>POMPA 1</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="44.8313" cy="571.277" width="89.67" height="15.7136"/>
			<rect x="0" y="563.42" width="89.6627" height="15.7136" class="st18"/>
			<text x="25.52" y="574.28" class="st14" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>POMPA 1</text>		</g>
		<g id="shape207-532" v:mID="207" v:groupContext="shape" transform="translate(482.658,-0.375)">
			<title>Sheet.207</title>
			<desc>POMPA 2</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="44.8313" cy="571.277" width="89.67" height="15.7136"/>
			<rect x="0" y="563.42" width="89.6627" height="15.7136" class="st18"/>
			<text x="25.52" y="574.28" class="st14" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>POMPA 2</text>		</g>
		<g id="shape208-535" v:mID="208" v:groupContext="shape" transform="translate(526.108,-11.6067)">
			<title>Sheet.208</title>
			<desc>POMPA 3</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="44.8313" cy="571.277" width="89.67" height="15.7136"/>
			<rect x="0" y="563.42" width="89.6627" height="15.7136" class="st18"/>
			<text x="25.52" y="574.28" class="st14" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>POMPA 3</text>		</g>
		<g id="shape209-538" v:mID="209" v:groupContext="shape" transform="translate(610.431,-11.6067)">
			<title>Sheet.209</title>
			<desc>POMPA 5</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="44.8313" cy="571.277" width="89.67" height="15.7136"/>
			<rect x="0" y="563.42" width="89.6627" height="15.7136" class="st18"/>
			<text x="25.52" y="574.28" class="st14" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>POMPA 5</text>		</g>
		<g id="shape210-541" v:mID="210" v:groupContext="shape" transform="translate(570.94,-0.375)">
			<title>Sheet.210</title>
			<desc>POMPA 4</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="44.8313" cy="571.277" width="89.67" height="15.7136"/>
			<rect x="0" y="563.42" width="89.6627" height="15.7136" class="st18"/>
			<text x="25.52" y="574.28" class="st14" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>POMPA 4</text>		</g>
		<g id="shape211-544" v:mID="211" v:groupContext="shape" transform="translate(657.024,-0.375)">
			<title>Sheet.211</title>
			<desc>POMPA 6</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="44.8313" cy="571.277" width="89.67" height="15.7136"/>
			<rect x="0" y="563.42" width="89.6627" height="15.7136" class="st18"/>
			<text x="25.52" y="574.28" class="st14" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>POMPA 6</text>		</g>
		<g id="shape212-547" v:mID="212" v:groupContext="shape" transform="translate(216.48,-532.447)">
			<title>Sheet.212</title>
			<desc>LINE 70 KV FROM KOSAMBI</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="83.6592" cy="571.277" width="167.32" height="15.7136"/>
			<rect x="0" y="563.42" width="167.318" height="15.7136" class="st18"/>
			<text x="61.86" y="568.28" class="st14" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 70 KV <v:newlineChar/><tspan
						x="50.58" dy="1.2em" class="st19">FROM KOSAMBI</tspan></text>		</g>
		<g id="shape213-551" v:mID="213" v:groupContext="shape" transform="translate(588.269,-200.321)">
			<title>Sheet.213</title>
			<desc>LINE 6,3KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="31.5355" cy="571.277" width="63.08" height="15.7136"/>
			<rect x="0" y="563.42" width="63.0709" height="15.7136" class="st18"/>
			<text x="9.62" y="574.28" class="st14" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 6,3KV</text>		</g>
		<g id="shape214-554" v:mID="214" v:groupContext="shape" transform="translate(216.77,-200.321)">
			<title>Sheet.214</title>
			<desc>LINE 20 KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="31.5355" cy="571.277" width="63.08" height="15.7136"/>
			<rect x="0" y="563.42" width="63.0709" height="15.7136" class="st18"/>
			<text x="9.74" y="574.28" class="st14" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 20 KV</text>		</g>
		<g id="group215-557" transform="translate(291.97,-408.936)" v:mID="215" v:groupContext="group">
			<title>Sheet.215</title>
			<g id="shape216-558" v:mID="216" v:groupContext="shape" transform="translate(0.916728,-31.0126)">
				<title>Sheet.216</title>
				<rect x="0" y="551.179" width="14.6677" height="27.955" class="st2"/>
			</g>
			<g id="shape217-560" v:mID="217" v:groupContext="shape" transform="translate(587.384,515.274) rotate(90)">
				<title>Sheet.217</title>
				<path d="M0 579.13 L4.89 579.13" class="st3"/>
			</g>
			<g id="group218-563" transform="translate(16.5011,-7.89349) scale(-1,1)" v:mID="218" v:groupContext="group"
					v:layerMember="0">
				<v:custProps>
					<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
							v:langID="1033" v:val="VT4(General)"/>
					<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
							v:val="VT4(Symbol 1)"/>
					<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
							v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
				</v:custProps>
				<v:userDefs>
					<v:ud v:nameU="Type" v:val="VT0(0):26"/>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
					<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
					<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)21)"/>
				</v:userDefs>
				<title>Make contact.459</title>
				<g id="shape219-564" v:mID="219" v:groupContext="shape" v:layerMember="0" transform="translate(1.2455,-2.2566E-06)">
					<title>Sheet.219</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M6.99 564.36 L6.99 568.22" class="st1"/>
					<path d="M6.99 579.13 L6.99 575.27" class="st1"/>
					<path d="M1.9 568.81 L6.99 575.27 L6.99 579.13" class="st1"/>
				</g>
				<g id="shape220-569" v:mID="220" v:groupContext="shape" v:layerMember="0" transform="translate(6.58229,-2.38248)">
					<title>Sheet.220</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape221-571" v:mID="221" v:groupContext="shape" v:layerMember="0" transform="translate(-1.59944,1.43346)">
					<title>Sheet.221</title>
				</g>
			</g>
			<g id="shape222-573" v:mID="222" v:groupContext="shape" transform="translate(-570.883,556.452) rotate(-90)">
				<title>Sheet.222</title>
				<path d="M0 579.13 L8.33 579.13" class="st3"/>
			</g>
			<g id="shape223-576" v:mID="223" v:groupContext="shape" transform="translate(587.384,571.24) rotate(90)">
				<title>Sheet.223</title>
				<path d="M0 579.13 L7.89 579.13" class="st3"/>
			</g>
		</g>
		<g id="group224-579" transform="translate(148.503,-431.157)" v:mID="224" v:groupContext="group">
			<title>Sheet.224</title>
			<g id="shape225-580" v:mID="225" v:groupContext="shape" transform="translate(5.64798,0)">
				<title>Sheet.225</title>
				<path d="M0 579.13 L8.96 579.13" class="st6"/>
			</g>
			<g id="shape226-583" v:mID="226" v:groupContext="shape">
				<title>Sheet.226</title>
				<path d="M0 579.13 L5.65 579.13" class="st6"/>
			</g>
		</g>
		<g id="shape227-586" v:mID="227" v:groupContext="shape" transform="translate(300.193,-417.888)">
			<title>Sheet.227</title>
			<path d="M0 579.13 L380.13 579.13" class="st3"/>
		</g>
		<g id="shape228-589" v:mID="228" v:groupContext="shape" transform="translate(30.8267,-387.27)">
			<title>Sheet.228</title>
			<desc>G</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="14.7798" cy="564.354" width="29.56" height="29.5596"/>
			<ellipse cx="14.7798" cy="564.354" rx="14.7798" ry="14.7798" class="st5"/>
			<text x="11.59" y="567.35" class="st20" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>G</text>		</g>
		<g id="shape229-592" v:mID="229" v:groupContext="shape" transform="translate(-533.517,160.984) rotate(-90)">
			<title>Sheet.229</title>
			<path d="M0 579.13 L12.57 579.13" class="st6"/>
		</g>
		<g id="shape230-595" v:mID="230" v:groupContext="shape" transform="translate(141.029,-387.27)">
			<title>Sheet.230</title>
			<desc>G</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="14.7798" cy="564.354" width="29.56" height="29.5596"/>
			<ellipse cx="14.7798" cy="564.354" rx="14.7798" ry="14.7798" class="st5"/>
			<text x="11.59" y="567.35" class="st20" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>G</text>		</g>
		<g id="shape231-598" v:mID="231" v:groupContext="shape" transform="translate(-423.498,161.772) rotate(-90)">
			<title>Sheet.231</title>
			<path d="M0 579.13 L12.57 579.13" class="st6"/>
		</g>
		<g id="group232-601" transform="translate(672.486,-408.936)" v:mID="232" v:groupContext="group">
			<title>Sheet.232</title>
			<g id="shape233-602" v:mID="233" v:groupContext="shape" transform="translate(0.916728,-31.0126)">
				<title>Sheet.233</title>
				<rect x="0" y="551.179" width="14.6677" height="27.955" class="st2"/>
			</g>
			<g id="shape234-604" v:mID="234" v:groupContext="shape" transform="translate(587.384,515.274) rotate(90)">
				<title>Sheet.234</title>
				<path d="M0 579.13 L4.89 579.13" class="st3"/>
			</g>
			<g id="group235-607" transform="translate(8.69305E-14,-7.89349)" v:mID="235" v:groupContext="group" v:layerMember="0">
				<v:custProps>
					<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
							v:langID="1033" v:val="VT4(General)"/>
					<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
							v:val="VT4(Symbol 1)"/>
					<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
							v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
				</v:custProps>
				<v:userDefs>
					<v:ud v:nameU="Type" v:val="VT0(0):26"/>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
					<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
					<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)21)"/>
				</v:userDefs>
				<title>Make contact.459</title>
				<g id="shape236-608" v:mID="236" v:groupContext="shape" v:layerMember="0" transform="translate(1.2455,-2.2566E-06)">
					<title>Sheet.236</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M6.99 564.36 L6.99 568.22" class="st1"/>
					<path d="M6.99 579.13 L6.99 575.27" class="st1"/>
					<path d="M1.9 568.81 L6.99 575.27 L6.99 579.13" class="st1"/>
				</g>
				<g id="shape237-613" v:mID="237" v:groupContext="shape" v:layerMember="0" transform="translate(6.58229,-2.38248)">
					<title>Sheet.237</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape238-615" v:mID="238" v:groupContext="shape" v:layerMember="0" transform="translate(-1.59944,1.43346)">
					<title>Sheet.238</title>
				</g>
			</g>
			<g id="shape239-617" v:mID="239" v:groupContext="shape" transform="translate(-570.883,556.452) rotate(-90)">
				<title>Sheet.239</title>
				<path d="M0 579.13 L8.33 579.13" class="st3"/>
			</g>
			<g id="shape240-620" v:mID="240" v:groupContext="shape" transform="translate(587.384,571.24) rotate(90)">
				<title>Sheet.240</title>
				<path d="M0 579.13 L7.89 579.13" class="st3"/>
			</g>
		</g>
		<g id="group241-623" transform="translate(680.626,-472.816)" v:mID="241" v:groupContext="group">
			<title>Sheet.241</title>
			<g id="shape242-624" v:mID="242" v:groupContext="shape" transform="translate(-579.036,579.134) rotate(-90)">
				<title>Sheet.242</title>
				<path d="M0 579.13 L41.76 579.13" class="st3"/>
			</g>
			<g id="shape243-627" v:mID="243" v:groupContext="shape" transform="translate(-579.134,540.316) rotate(-90)">
				<title>Sheet.243</title>
				<path d="M5.41 579.13 L5.77 579.13 L10.86 579.13" class="st21"/>
			</g>
		</g>
		<g id="group244-633" transform="translate(300.09,-472.817)" v:mID="244" v:groupContext="group">
			<title>Sheet.244</title>
			<g id="shape245-634" v:mID="245" v:groupContext="shape" transform="translate(-579.036,579.134) rotate(-90)">
				<title>Sheet.245</title>
				<path d="M0 579.13 L41.76 579.13" class="st3"/>
			</g>
			<g id="shape246-637" v:mID="246" v:groupContext="shape" transform="translate(-579.134,540.316) rotate(-90)">
				<title>Sheet.246</title>
				<path d="M5.41 579.13 L5.77 579.13 L10.86 579.13" class="st21"/>
			</g>
		</g>
		<g id="shape247-642" v:mID="247" v:groupContext="shape" transform="translate(590.747,-532.447)">
			<title>Sheet.247</title>
			<desc>LINE 70 KV FROM GI JATILUHUR</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="83.6592" cy="571.277" width="167.32" height="15.7136"/>
			<rect x="0" y="563.42" width="167.318" height="15.7136" class="st18"/>
			<text x="61.86" y="568.28" class="st14" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 70 KV <v:newlineChar/><tspan
						x="41.85" dy="1.2em" class="st19">FROM GI JATILUHUR</tspan></text>		</g>
        <a href="dashboard_jatiluhur.php">
		<g id="shape248-646" v:mID="248" v:groupContext="shape" transform="translate(607.633,-558.118)">
			<title>Sheet.248</title>
			<desc>GI JATILUHUR</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="64.8752" cy="568.876" width="129.76" height="20.5161"/>
			<rect x="0" y="558.618" width="129.75" height="20.5161" class="st23"/>
			<text x="30.37" y="572.48" class="st24" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>GI <tspan
						class="st19" v:langID="1033">JATILUHUR</tspan></text>		</g></a>
	</g>
</svg>
   
    
</div> 
    </div>
    
   
    </div>
    </div>

    <!-- END MAIN CONTENT -->

      <footer>
  <table width="100%" height="40" border="0" cellpadding="0" cellspacing="0">
<tr>
       <td width="100%" align="center"><div id="clock"></div></td>
      </tr>
  </table>
 </footer>

    <script src="js/datetime.js"></script>
    <script src="js/jquery-1.7.1.min.js"></script>
    <script src="&_server_&/&_connection/00_gijt_unit0.js"></script>

  </body>

  
  </html>
