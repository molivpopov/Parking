# Parking
##REST application

## Налични команди и връщаните резултати:
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1251">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 14">
<meta name=Originator content="Microsoft Word 14">
<link rel=File-List href="ParkingTask_API.files/filelist.xml">
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>DPopov</o:Author>
  <o:LastAuthor>DPopov</o:LastAuthor>
  <o:Revision>4</o:Revision>
  <o:TotalTime>3568</o:TotalTime>
  <o:LastPrinted>1995-11-21T14:41:00Z</o:LastPrinted>
  <o:Created>2020-05-22T07:29:00Z</o:Created>
  <o:LastSaved>2020-05-25T09:20:00Z</o:LastSaved>
  <o:Pages>1</o:Pages>
  <o:Words>233</o:Words>
  <o:Characters>1329</o:Characters>
  <o:Lines>11</o:Lines>
  <o:Paragraphs>3</o:Paragraphs>
  <o:CharactersWithSpaces>1559</o:CharactersWithSpaces>
  <o:Version>14.00</o:Version>
 </o:DocumentProperties>
 <o:OfficeDocumentSettings>
  <o:AllowPNG/>
 </o:OfficeDocumentSettings>
</xml><![endif]-->
<link rel=themeData href="ParkingTask_API.files/themedata.thmx">
<link rel=colorSchemeMapping href="ParkingTask_API.files/colorschememapping.xml">
<!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:DisplayBackgroundShape/>
  <w:SpellingState>Clean</w:SpellingState>
  <w:GrammarState>Clean</w:GrammarState>
  <w:TrackMoves>false</w:TrackMoves>
  <w:TrackFormatting/>
  <w:DoNotShowRevisions/>
  <w:DoNotPrintRevisions/>
  <w:DoNotShowInsertionsAndDeletions/>
  <w:DoNotShowPropertyChanges/>
  <w:DefaultTableStyle Number="0">Нормален</w:DefaultTableStyle>
  <w:DrawingGridHorizontalSpacing>0 пкт</w:DrawingGridHorizontalSpacing>
  <w:DrawingGridVerticalSpacing>0 пкт</w:DrawingGridVerticalSpacing>
  <w:DisplayHorizontalDrawingGridEvery>0</w:DisplayHorizontalDrawingGridEvery>
  <w:DisplayVerticalDrawingGridEvery>0</w:DisplayVerticalDrawingGridEvery>
  <w:UseMarginsForDrawingGridOrigin/>
  <w:ValidateAgainstSchemas/>
  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
  <w:DoNotPromoteQF/>
  <w:LidThemeOther>BG</w:LidThemeOther>
  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
  <w:DrawingGridHorizontalOrigin>0 пкт</w:DrawingGridHorizontalOrigin>
  <w:DrawingGridVerticalOrigin>0 пкт</w:DrawingGridVerticalOrigin>
  <w:Compatibility>
   <w:SpaceForUL/>
   <w:BalanceSingleByteDoubleByteWidth/>
   <w:DoNotLeaveBackslashAlone/>
   <w:ULTrailSpace/>
   <w:AdjustLineHeightInTable/>
   <w:BreakWrappedTables/>
   <w:SnapToGridInCell/>
   <w:WrapTextWithPunct/>
   <w:UseAsianBreakRules/>
   <w:UseWord2002TableStyleRules/>
   <w:DontUseIndentAsNumberingTabStop/>
   <w:FELineBreak11/>
   <w:WW11IndentRules/>
   <w:DontAutofitConstrainedTables/>
   <w:AutofitLikeWW11/>
   <w:HangulWidthLikeWW11/>
   <w:UseNormalStyleForList/>
   <w:DontVertAlignCellWithSp/>
   <w:DontBreakConstrainedForcedTables/>
   <w:DontVertAlignInTxbx/>
   <w:Word11KerningPairs/>
   <w:CachedColBalance/>
  </w:Compatibility>
  <m:mathPr>
   <m:mathFont m:val="Cambria Math"/>
   <m:brkBin m:val="before"/>
   <m:brkBinSub m:val="&#45;-"/>
   <m:smallFrac m:val="off"/>
   <m:dispDef/>
   <m:lMargin m:val="0"/>
   <m:rMargin m:val="0"/>
   <m:defJc m:val="centerGroup"/>
   <m:wrapIndent m:val="1440"/>
   <m:intLim m:val="subSup"/>
   <m:naryLim m:val="undOvr"/>
  </m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"
  DefSemiHidden="true" DefQFormat="false" DefPriority="99"
  LatentStyleCount="267">
  <w:LsdException Locked="false" Priority="0" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Normal"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="heading 1"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 2"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 3"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 4"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 5"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 6"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 7"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 8"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 9"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 1"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 2"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 3"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 4"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 5"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 6"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 7"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 8"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 9"/>
  <w:LsdException Locked="false" Priority="35" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="caption"/>
  <w:LsdException Locked="false" Priority="10" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Title"/>
  <w:LsdException Locked="false" Priority="1" Name="Default Paragraph Font"/>
  <w:LsdException Locked="false" Priority="11" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Subtitle"/>
  <w:LsdException Locked="false" Priority="22" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Strong"/>
  <w:LsdException Locked="false" Priority="20" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Emphasis"/>
  <w:LsdException Locked="false" Priority="59" SemiHidden="false"
   UnhideWhenUsed="false" Name="Table Grid"/>
  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Placeholder Text"/>
  <w:LsdException Locked="false" Priority="1" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="No Spacing"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 1"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 1"/>
  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Revision"/>
  <w:LsdException Locked="false" Priority="34" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="List Paragraph"/>
  <w:LsdException Locked="false" Priority="29" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Quote"/>
  <w:LsdException Locked="false" Priority="30" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Intense Quote"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 1"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 1"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 2"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 2"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 2"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 3"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 3"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 3"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 4"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 4"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 4"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 5"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 5"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 5"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 6"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 6"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 6"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="19" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Subtle Emphasis"/>
  <w:LsdException Locked="false" Priority="21" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Intense Emphasis"/>
  <w:LsdException Locked="false" Priority="31" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Subtle Reference"/>
  <w:LsdException Locked="false" Priority="32" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Intense Reference"/>
  <w:LsdException Locked="false" Priority="33" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Book Title"/>
  <w:LsdException Locked="false" Priority="37" Name="Bibliography"/>
  <w:LsdException Locked="false" Priority="39" QFormat="true" Name="TOC Heading"/>
 </w:LatentStyles>
</xml><![endif]-->
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Mangal;
	panose-1:0 0 4 0 0 0 0 0 0 0;
	mso-font-alt:Courier;
	mso-font-charset:1;
	mso-generic-font-family:roman;
	mso-font-format:other;
	mso-font-pitch:variable;
	mso-font-signature:8192 0 0 0 0 0;}
@font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:204;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-536869121 1107305727 33554432 0 415 0;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:204;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-469750017 -1073732485 9 0 511 0;}
@font-face
	{font-family:"Liberation Serif";
	mso-font-alt:"Times New Roman";
	mso-font-charset:1;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:0 0 0 0 0 0;}
@font-face
	{font-family:"Noto Sans CJK SC Regular";
	mso-font-alt:DFGothic-EB;
	mso-font-charset:128;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:0 0 0 0 0 0;}
@font-face
	{font-family:Montserat;
	mso-font-alt:"Times New Roman";
	mso-font-charset:1;
	mso-generic-font-family:auto;
	mso-font-pitch:auto;
	mso-font-signature:0 0 0 0 0 0;}
@font-face
	{font-family:"Lohit Devanagari";
	mso-font-alt:DFGothic-EB;
	mso-font-charset:128;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:0 0 0 0 0 0;}
@font-face
	{font-family:OpenSymbol;
	mso-font-alt:"Arial Unicode MS";
	mso-font-charset:128;
	mso-generic-font-family:auto;
	mso-font-pitch:auto;
	mso-font-signature:0 0 0 0 0 0;}
@font-face
	{font-family:"Liberation Sans";
	mso-font-alt:"Arial Unicode MS";
	mso-font-charset:128;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:0 0 0 0 0 0;}
@font-face
	{font-family:Bahnschrift;
	panose-1:2 11 5 2 4 2 4 2 2 3;
	mso-font-charset:204;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-1610612025 2 0 0 415 0;}
@font-face
	{font-family:"\@Noto Sans CJK SC Regular";
	mso-font-charset:128;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:0 0 0 0 0 0;}
@font-face
	{font-family:"\@Lohit Devanagari";
	mso-font-charset:128;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:0 0 0 0 0 0;}
@font-face
	{font-family:"\@Liberation Sans";
	mso-font-charset:128;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:0 0 0 0 0 0;}
@font-face
	{font-family:"\@OpenSymbol";
	mso-font-charset:128;
	mso-generic-font-family:auto;
	mso-font-pitch:auto;
	mso-font-signature:0 0 0 0 0 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	mso-hyphenate:none;
	font-size:12.0pt;
	font-family:"Liberation Serif","serif";
	mso-fareast-font-family:"Noto Sans CJK SC Regular";
	mso-bidi-font-family:"Lohit Devanagari";
	color:#00000A;
	mso-font-kerning:1.0pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:ZH-CN;
	mso-bidi-language:HI;}
p.MsoCaption, li.MsoCaption, div.MsoCaption
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:0cm;
	mso-pagination:widow-orphan no-line-numbers;
	mso-hyphenate:none;
	font-size:12.0pt;
	font-family:"Liberation Serif","serif";
	mso-fareast-font-family:"Noto Sans CJK SC Regular";
	mso-bidi-font-family:"Lohit Devanagari";
	color:#00000A;
	mso-font-kerning:1.0pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:ZH-CN;
	mso-bidi-language:HI;
	font-style:italic;}
p.MsoList, li.MsoList, div.MsoList
	{mso-style-unhide:no;
	mso-style-parent:"Основен текст";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:7.0pt;
	margin-left:0cm;
	line-height:115%;
	mso-pagination:widow-orphan;
	mso-hyphenate:none;
	font-size:12.0pt;
	font-family:"Liberation Serif","serif";
	mso-fareast-font-family:"Noto Sans CJK SC Regular";
	mso-bidi-font-family:"Lohit Devanagari";
	color:#00000A;
	mso-font-kerning:1.0pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:ZH-CN;
	mso-bidi-language:HI;}
p.MsoBodyText, li.MsoBodyText, div.MsoBodyText
	{mso-style-unhide:no;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:7.0pt;
	margin-left:0cm;
	line-height:115%;
	mso-pagination:widow-orphan;
	mso-hyphenate:none;
	font-size:12.0pt;
	font-family:"Liberation Serif","serif";
	mso-fareast-font-family:"Noto Sans CJK SC Regular";
	mso-bidi-font-family:"Lohit Devanagari";
	color:#00000A;
	mso-font-kerning:1.0pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:ZH-CN;
	mso-bidi-language:HI;}
p.MsoNoSpacing, li.MsoNoSpacing, div.MsoNoSpacing
	{mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	mso-hyphenate:none;
	font-size:12.0pt;
	mso-bidi-font-size:10.5pt;
	font-family:"Liberation Serif","serif";
	mso-fareast-font-family:"Noto Sans CJK SC Regular";
	mso-bidi-font-family:Mangal;
	color:#00000A;
	mso-font-kerning:1.0pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:ZH-CN;
	mso-bidi-language:HI;}
span.Bullets
	{mso-style-name:Bullets;
	mso-style-unhide:no;
	mso-style-parent:"";
	font-family:OpenSymbol;
	mso-ascii-font-family:OpenSymbol;
	mso-fareast-font-family:OpenSymbol;
	mso-hansi-font-family:OpenSymbol;
	mso-bidi-font-family:OpenSymbol;}
p.Heading, li.Heading, div.Heading
	{mso-style-name:Heading;
	mso-style-unhide:no;
	mso-style-next:"Основен текст";
	margin-top:12.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-hyphenate:none;
	font-size:14.0pt;
	font-family:"Liberation Sans","sans-serif";
	mso-fareast-font-family:"Noto Sans CJK SC Regular";
	mso-hansi-font-family:"Liberation Sans";
	mso-bidi-font-family:"Lohit Devanagari";
	color:#00000A;
	mso-font-kerning:1.0pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:ZH-CN;
	mso-bidi-language:HI;}
p.Index, li.Index, div.Index
	{mso-style-name:Index;
	mso-style-unhide:no;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan no-line-numbers;
	mso-hyphenate:none;
	font-size:12.0pt;
	font-family:"Liberation Serif","serif";
	mso-fareast-font-family:"Noto Sans CJK SC Regular";
	mso-bidi-font-family:"Lohit Devanagari";
	color:#00000A;
	mso-font-kerning:1.0pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:ZH-CN;
	mso-bidi-language:HI;}
span.SpellE
	{mso-style-name:"";
	mso-spl-e:yes;}
span.GramE
	{mso-style-name:"";
	mso-gram-e:yes;}
 /* Page Definitions */
 @page
	{mso-footnote-separator:url("ParkingTask_API.files/header.htm") fs;
	mso-footnote-continuation-separator:url("ParkingTask_API.files/header.htm") fcs;
	mso-endnote-separator:url("ParkingTask_API.files/header.htm") es;
	mso-endnote-continuation-separator:url("ParkingTask_API.files/header.htm") ecs;}
@page WordSection1
	{size:841.9pt 595.3pt;
	mso-page-orientation:landscape;
	margin:2.0cm 2.0cm 2.0cm 2.0cm;
	mso-header-margin:35.4pt;
	mso-footer-margin:35.4pt;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
-->
</style>
<!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Нормална таблица";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-parent:"";
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-para-margin:0cm;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Times New Roman","serif";}
table.MsoTableGrid
	{mso-style-name:"Мрежа в таблица";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-priority:59;
	mso-style-unhide:no;
	border:solid windowtext 1.0pt;
	mso-border-alt:solid windowtext .5pt;
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-border-insideh:.5pt solid windowtext;
	mso-border-insidev:.5pt solid windowtext;
	mso-para-margin:0cm;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Times New Roman","serif";}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="1026"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body lang=BG style='tab-interval:35.45pt;line-break:strict'>

<div class=WordSection1>

<p class=MsoNormal><span lang=EN-US style='font-size:11.0pt;font-family:Montserat;
mso-bidi-font-family:Montserat;color:black'><o:p>&nbsp;</o:p></span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width="79%"
 style='width:79.58%;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:22.8pt'>
  <td width="26%" style='width:26.12%;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:22.8pt'>
  <p class=MsoNoSpacing><span lang=EN-US style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'>Description<o:p></o:p></span></p>
  </td>
  <td width="32%" style='width:32.96%;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:22.8pt'>
  <p class=MsoNoSpacing><span lang=EN-US style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'>Endpoint<o:p></o:p></span></p>
  </td>
  <td width="40%" style='width:40.94%;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:22.8pt'>
  <p class=MsoNoSpacing><span lang=EN-US style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'>result<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:22.8pt'>
  <td width="26%" style='width:26.12%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:22.8pt'>
  <p class=MsoNoSpacing><span class=SpellE><span lang=EN-US style='mso-bidi-font-size:
  12.0pt;font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;
  color:#7F7F7F;mso-themecolor:text1;mso-themetint:128'>Проверка</span></span><span
  lang=EN-US style='mso-bidi-font-size:12.0pt;font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;color:#7F7F7F;mso-themecolor:text1;mso-themetint:
  128'> <span class=SpellE>на</span> <span class=SpellE>брой</span> <span
  class=SpellE>свободни</span> <span class=SpellE>места</span> </span><span
  style='mso-bidi-font-size:12.0pt;font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;color:#7F7F7F;mso-themecolor:text1;mso-themetint:
  128;mso-ansi-language:BG'>на</span><span lang=EN-US style='mso-bidi-font-size:
  12.0pt;font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;
  color:#7F7F7F;mso-themecolor:text1;mso-themetint:128'> <span class=SpellE>паркинга</span>.</span><span
  lang=EN-US style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:
  Calibri;mso-bidi-theme-font:minor-latin;color:#7F7F7F;mso-themecolor:text1;
  mso-themetint:128'><o:p></o:p></span></p>
  </td>
  <td width="32%" style='width:32.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:22.8pt'>
  <p class=MsoNoSpacing><span lang=EN-US style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#7F7F7F;
  mso-themecolor:text1;mso-themetint:128'>/space<o:p></o:p></span></p>
  </td>
  <td width="40%" style='width:40.94%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:22.8pt'>
  <p class=MsoNoSpacing><span lang=EN-US style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#7F7F7F;
  mso-themecolor:text1;mso-themetint:128'>(</span><span style='font-family:
  "Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;mso-bidi-theme-font:
  minor-latin;color:#7F7F7F;mso-themecolor:text1;mso-themetint:128;mso-ansi-language:
  BG'>връща брой свободни места</span><span lang=EN-US style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#7F7F7F;
  mso-themecolor:text1;mso-themetint:128'>)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:23.55pt'>
  <td width="26%" style='width:26.12%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNoSpacing><span class=SpellE><span lang=EN-US style='mso-bidi-font-size:
  12.0pt;font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;
  color:#7F7F7F'>Проверка</span></span><span lang=EN-US style='mso-bidi-font-size:
  12.0pt;font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;
  color:#7F7F7F'> <span class=SpellE>на</span> <span class=SpellE>текущо</span>
  <span class=SpellE>дължима</span> <span class=SpellE>сума</span> <span
  class=SpellE>на</span> <span class=SpellE>превозно</span> <span class=SpellE>средство</span>
  с <span class=SpellE>даден</span> <span class=SpellE>номер</span>.</span><span
  lang=EN-US style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:
  Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;mso-themecolor:text2;
  mso-themetint:153'><o:p></o:p></span></p>
  </td>
  <td width="32%" style='width:32.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNoSpacing><span lang=EN-US style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;
  mso-themecolor:text2;mso-themetint:153'>/bill<span class=GramE>/{</span><span
  class=SpellE>parking_id</span>}/{time?}<o:p></o:p></span></p>
  </td>
  <td width="40%" style='width:40.94%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNoSpacing><span lang=EN-US style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;
  mso-themecolor:text2;mso-themetint:153'>(</span><span class=GramE><span
  style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;
  mso-bidi-theme-font:minor-latin;color:#548DD4;mso-themecolor:text2;
  mso-themetint:153;mso-ansi-language:BG'>връща</span></span><span
  style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;
  mso-bidi-theme-font:minor-latin;color:#548DD4;mso-themecolor:text2;
  mso-themetint:153;mso-ansi-language:BG'> дължимата сума към момента </span><span
  lang=EN-US style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:
  Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;mso-themecolor:text2;
  mso-themetint:153'>{time}. </span><span style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;
  mso-themecolor:text2;mso-themetint:153;mso-ansi-language:BG'>Ако не се напише
  </span><span lang=EN-US style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;
  mso-themecolor:text2;mso-themetint:153'>{time} – </span><span
  style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;
  mso-bidi-theme-font:minor-latin;color:#548DD4;mso-themecolor:text2;
  mso-themetint:153;mso-ansi-language:BG'>означава сега.</span><span
  lang=EN-US style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:
  Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;mso-themecolor:text2;
  mso-themetint:153'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:23.55pt'>
  <td width="26%" style='width:26.12%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNoSpacing><span class=SpellE><span lang=EN-US style='mso-bidi-font-size:
  12.0pt;font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;
  color:#7F7F7F'>Вход</span></span><span lang=EN-US style='mso-bidi-font-size:
  12.0pt;font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;
  color:#7F7F7F'> в <span class=SpellE>паркинга</span> - <span class=SpellE>регистрация</span>
  <span class=SpellE>на</span> <span class=SpellE>превозното</span> <span
  class=SpellE>средство</span></span><span lang=EN-US style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;
  mso-themecolor:text2;mso-themetint:153'><o:p></o:p></span></p>
  </td>
  <td width="32%" style='width:32.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNoSpacing><span lang=EN-US style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;
  mso-themecolor:text2;mso-themetint:153'>/</span><span lang=EN-US
  style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;
  color:#548DD4'>entry/{<span class=SpellE>vehicle_id</span>}</span><span
  lang=EN-US style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:
  Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;mso-themecolor:text2;
  mso-themetint:153'><o:p></o:p></span></p>
  </td>
  <td width="40%" style='width:40.94%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNoSpacing><span lang=EN-US style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;
  mso-themecolor:text2;mso-themetint:153'>(</span><span style='font-family:
  "Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;mso-bidi-theme-font:
  minor-latin;color:#548DD4;mso-themecolor:text2;mso-themetint:153;mso-ansi-language:
  BG'>вход е възможен само за предварително регистрирани превозни средства</span><span
  lang=EN-US style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:
  Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;mso-themecolor:text2;
  mso-themetint:153'>)</span><span style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;
  mso-themecolor:text2;mso-themetint:153;mso-ansi-language:BG'><br>
  </span><span lang=EN-US style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;
  mso-themecolor:text2;mso-themetint:153'>(</span><span style='font-family:
  "Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;mso-bidi-theme-font:
  minor-latin;color:#548DD4;mso-themecolor:text2;mso-themetint:153;mso-ansi-language:
  BG'>връща дали е изпълнено или не – в зависимост от празните места</span><span
  lang=EN-US style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:
  Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;mso-themecolor:text2;
  mso-themetint:153'>)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:23.55pt'>
  <td width="26%" style='width:26.12%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNoSpacing><span class=SpellE><span lang=EN-US style='mso-bidi-font-size:
  12.0pt;font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;
  color:#7F7F7F'>Изход</span></span><span lang=EN-US style='mso-bidi-font-size:
  12.0pt;font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;
  color:#7F7F7F;mso-ansi-language:BG'> </span><span class=SpellE><span
  lang=EN-US style='mso-bidi-font-size:12.0pt;font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;color:#7F7F7F'>от</span></span><span lang=EN-US
  style='mso-bidi-font-size:12.0pt;font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;color:#7F7F7F'> <span class=SpellE>паркинга</span>
  - <span class=SpellE>дерегистрация</span> <span class=SpellE>на</span> <span
  class=SpellE>превозното</span> <span class=SpellE>средство</span></span><span
  lang=EN-US style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:
  Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;mso-themecolor:text2;
  mso-themetint:153'><o:p></o:p></span></p>
  </td>
  <td width="32%" style='width:32.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNoSpacing><span lang=EN-US style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;
  mso-themecolor:text2;mso-themetint:153'>/exit/{<span class=SpellE>parking_id</span>}<o:p></o:p></span></p>
  </td>
  <td width="40%" style='width:40.94%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNoSpacing><span lang=EN-US style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;
  mso-themecolor:text2;mso-themetint:153'>(</span><span style='font-family:
  "Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;mso-bidi-theme-font:
  minor-latin;color:#548DD4;mso-themecolor:text2;mso-themetint:153;mso-ansi-language:
  BG'>връща дължимата сума</span><span lang=EN-US style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;
  mso-themecolor:text2;mso-themetint:153'>)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:23.55pt'>
  <td width="26%" style='width:26.12%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;
  mso-themecolor:text2;mso-themetint:153;mso-ansi-language:BG'>Регистрация на ново
  превозно средство<o:p></o:p></span></p>
  </td>
  <td width="32%" style='width:32.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNoSpacing><span lang=EN-US style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;
  mso-themecolor:text2;mso-themetint:153'>/register/{number}/{class}<o:p></o:p></span></p>
  </td>
  <td width="40%" style='width:40.94%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNoSpacing><span lang=EN-US style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;
  mso-themecolor:text2;mso-themetint:153'>(</span><span style='font-family:
  "Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;mso-bidi-theme-font:
  minor-latin;color:#548DD4;mso-themecolor:text2;mso-themetint:153;mso-ansi-language:
  BG'>връща </span><span lang=EN-US style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;
  mso-themecolor:text2;mso-themetint:153'>id – </span><span style='font-family:
  "Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;mso-bidi-theme-font:
  minor-latin;color:#548DD4;mso-themecolor:text2;mso-themetint:153;mso-ansi-language:
  BG'>уникален номера при регистрирания нов автомобил</span><span lang=EN-US
  style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;
  mso-bidi-theme-font:minor-latin;color:#548DD4;mso-themecolor:text2;
  mso-themetint:153'>)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:23.55pt'>
  <td width="26%" style='width:26.12%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;
  mso-themecolor:text2;mso-themetint:153;mso-ansi-language:BG'>Въвеждане на
  отстъпки<o:p></o:p></span></p>
  </td>
  <td width="32%" style='width:32.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNoSpacing><span lang=EN-US style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;
  mso-themecolor:text2;mso-themetint:153'>/</span><span lang=EN-US
  style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;
  color:#548DD4'>discounts/{<span class=SpellE>vehicle_id</span>}/{<span
  class=SpellE>discount_id</span>}<o:p></o:p></span></p>
  </td>
  <td width="40%" style='width:40.94%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNoSpacing><span class=GramE><span lang=EN-US style='font-family:
  "Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;color:#548DD4'>id</span></span><span
  lang=EN-US style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:
  Calibri;color:#548DD4'> </span><span style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;color:#548DD4;mso-ansi-language:BG'>е уникалния
  номер от регистрацията на пр. средство </span><span lang=EN-US
  style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;
  color:#548DD4'><br>
  (</span><span style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:
  Calibri;color:#548DD4;mso-ansi-language:BG'>не връща нищо</span><span
  lang=EN-US style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:
  Calibri;color:#548DD4'>)</span><span lang=EN-US style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;
  mso-themecolor:text2;mso-themetint:153'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:23.55pt'>
  <td width="26%" style='width:26.12%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;
  mso-themecolor:text2;mso-themetint:153;mso-ansi-language:BG'>Проверка на
  отстъпка<o:p></o:p></span></p>
  </td>
  <td width="32%" style='width:32.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNoSpacing><span lang=EN-US style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;
  mso-themecolor:text2;mso-themetint:153'>/discounts/{</span><span
  class=SpellE><span lang=EN-US style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;color:#548DD4'>vehicle_id</span></span><span
  lang=EN-US style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:
  Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;mso-themecolor:text2;
  mso-themetint:153'>}<o:p></o:p></span></p>
  </td>
  <td width="40%" style='width:40.94%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNoSpacing><span lang=EN-US style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;
  mso-themecolor:text2;mso-themetint:153'>(</span><span style='font-family:
  "Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;mso-bidi-theme-font:
  minor-latin;color:#548DD4;mso-themecolor:text2;mso-themetint:153;mso-ansi-language:
  BG'>връща текущо ползваната отстъпка</span><span lang=EN-US style='font-family:
  "Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;mso-bidi-theme-font:
  minor-latin;color:#548DD4;mso-themecolor:text2;mso-themetint:153'>)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:23.55pt'>
  <td width="26%" style='width:26.12%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;
  mso-themecolor:text2;mso-themetint:153;mso-ansi-language:BG'>Проверка на
  наличните типове превозни средства<o:p></o:p></span></p>
  </td>
  <td width="32%" style='width:32.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNoSpacing><span lang=EN-US style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;
  mso-themecolor:text2;mso-themetint:153'>/classes<o:p></o:p></span></p>
  </td>
  <td width="40%" style='width:40.94%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;
  mso-themecolor:text2;mso-themetint:153;mso-ansi-language:BG'>връща имената на
  наличните типове превозни средства с прилежащите </span><span lang=EN-US
  style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;
  mso-bidi-theme-font:minor-latin;color:#548DD4;mso-themecolor:text2;
  mso-themetint:153'>id-</span><span style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;
  mso-themecolor:text2;mso-themetint:153;mso-ansi-language:BG'>та</span><span
  lang=EN-US style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:
  Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;mso-themecolor:text2;
  mso-themetint:153'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;mso-yfti-lastrow:yes;height:23.55pt'>
  <td width="26%" style='width:26.12%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;
  mso-themecolor:text2;mso-themetint:153;mso-ansi-language:BG'>Проверка на
  наличните видове отстъпки<o:p></o:p></span></p>
  </td>
  <td width="32%" style='width:32.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNoSpacing><span lang=EN-US style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;
  mso-themecolor:text2;mso-themetint:153'>/discounts<o:p></o:p></span></p>
  </td>
  <td width="40%" style='width:40.94%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNoSpacing><span style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;color:#548DD4;mso-ansi-language:BG'>връща
  имената на наличните видове отстъпки с прилежащите </span><span lang=EN-US
  style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;
  color:#548DD4'>id-</span><span style='font-family:"Bahnschrift","sans-serif";
  mso-bidi-font-family:Calibri;color:#548DD4;mso-ansi-language:BG'>та</span><span
  lang=EN-US style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:
  Calibri;mso-bidi-theme-font:minor-latin;color:#548DD4;mso-themecolor:text2;
  mso-themetint:153'><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span lang=EN-US style='font-size:11.0pt;font-family:"Bahnschrift","sans-serif";
mso-bidi-font-family:Montserat;color:black'>Number – </span><span
style='font-size:11.0pt;font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:
Montserat;color:black;mso-ansi-language:BG'>регистрационен номер на превозното
средство,</span><span lang=EN-US style='font-size:11.0pt;font-family:"Bahnschrift","sans-serif";
mso-bidi-font-family:Montserat;color:black'><o:p></o:p></span></p>

<p class=MsoNormal><span class=SpellE><span lang=EN-US style='font-size:11.0pt;
font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:Montserat;
color:black'>vehicle_Id</span></span><span lang=EN-US style='font-size:11.0pt;
font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:Montserat;
color:black'> – UUID </span><span style='font-size:11.0pt;font-family:"Bahnschrift","sans-serif";
mso-bidi-font-family:Montserat;color:black;mso-ansi-language:BG'>номер на
превозното средство </span><span lang=EN-US style='font-size:11.0pt;font-family:
"Bahnschrift","sans-serif";mso-bidi-font-family:Montserat;color:black'>(</span><span
style='font-size:11.0pt;font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:
Montserat;color:black;mso-ansi-language:BG'>ползва се за по-голяма сигурност</span><span
lang=EN-US style='font-size:11.0pt;font-family:"Bahnschrift","sans-serif";
mso-bidi-font-family:Montserat;color:black'>)</span><span style='font-size:
11.0pt;font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:Montserat;
color:black;mso-ansi-language:BG'>,</span><span lang=EN-US style='font-size:
11.0pt;font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:Montserat;
color:black'><o:p></o:p></span></p>

<p class=MsoNormal><span class=SpellE><span lang=EN-US style='font-size:11.0pt;
font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:Montserat;
color:black'>parking_Id</span></span><span lang=EN-US style='font-size:11.0pt;
font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:Montserat;
color:black'> – UUID </span><span style='font-size:11.0pt;font-family:"Bahnschrift","sans-serif";
mso-bidi-font-family:Montserat;color:black;mso-ansi-language:BG'>номер на <span
class=SpellE>паркиг</span> операцията </span><span lang=EN-US style='font-size:
11.0pt;font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:Montserat;
color:black'>(</span><span style='font-size:11.0pt;font-family:"Bahnschrift","sans-serif";
mso-bidi-font-family:Montserat;color:black;mso-ansi-language:BG'>ползва се за
по-голяма сигурност</span><span lang=EN-US style='font-size:11.0pt;font-family:
"Bahnschrift","sans-serif";mso-bidi-font-family:Montserat;color:black'>)</span><span
style='font-size:11.0pt;font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:
Montserat;color:black;mso-ansi-language:BG'>,</span><span lang=EN-US
style='font-size:11.0pt;font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:
Montserat;color:black'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='font-size:11.0pt;font-family:"Bahnschrift","sans-serif";
mso-bidi-font-family:Montserat;color:black'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='font-size:11.0pt;font-family:"Bahnschrift","sans-serif";
mso-bidi-font-family:Montserat;color:black'>Class – </span><span
style='font-size:11.0pt;font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:
Montserat;color:black;mso-ansi-language:BG'>клас превозно средство - </span><span
lang=EN-US style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:
Calibri;color:#7F7F7F'>A - </span><span style='font-family:"Bahnschrift","sans-serif";
mso-bidi-font-family:Calibri;color:#7F7F7F;mso-ansi-language:BG'>лек</span><span
style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;
color:#7F7F7F'> </span><span style='font-family:"Bahnschrift","sans-serif";
mso-bidi-font-family:Calibri;color:#7F7F7F;mso-ansi-language:BG'>автомобил</span><span
lang=EN-US style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:
Calibri;color:#7F7F7F'>/</span><span style='font-family:"Bahnschrift","sans-serif";
mso-bidi-font-family:Calibri;color:#7F7F7F;mso-ansi-language:BG'>мотор</span><span
lang=EN-US style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:
Calibri;color:#7F7F7F'>;</span><span lang=EN-US style='font-family:"Bahnschrift","sans-serif";
mso-fareast-font-family:Montserat;mso-bidi-font-family:Calibri;color:#7F7F7F'> </span><span
lang=EN-US style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:
Calibri;color:#7F7F7F'>B – </span><span class=SpellE><span style='font-family:
"Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;color:#7F7F7F;
mso-ansi-language:BG'>бус</span></span><span lang=EN-US style='font-family:
"Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;color:#7F7F7F'>;</span><span
lang=EN-US style='font-family:"Bahnschrift","sans-serif";mso-fareast-font-family:
Montserat;mso-bidi-font-family:Calibri;color:#7F7F7F'> </span><span lang=EN-US
style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;
color:#7F7F7F'>C - </span><span style='font-family:"Bahnschrift","sans-serif";
mso-bidi-font-family:Calibri;color:#7F7F7F;mso-ansi-language:BG'>Автобус/камион</span><span
lang=EN-US style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:
Calibri;color:#7F7F7F'>,<o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='font-family:"Bahnschrift","sans-serif";
mso-bidi-font-family:Calibri;color:#7F7F7F'>Discounts – </span><span
style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:Calibri;
color:#7F7F7F;mso-ansi-language:BG'>вид ползвана отстъпка - </span><span
lang=EN-US style='font-family:"Bahnschrift","sans-serif";mso-bidi-font-family:
Calibri;color:#7F7F7F'>Silver: 10%; Gold: 15%; Platinum: 20%</span><span
style='font-size:11.0pt;font-family:Montserat;mso-bidi-font-family:Montserat;
color:black;mso-ansi-language:BG'><o:p></o:p></span></p>

</div>

</body>

</html>
