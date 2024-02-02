<?php
$rowId = $_GET['id'];
$rowName = $_GET['name'];
$rowSurname = $_GET['surname'];
$rowTitle = $_GET['title'];
$rowFaculty = $_GET['faculty'];
$rowDepartment = $_GET['department'];
$rowBasicField = $_GET['basic_field'];
$rowScientificField = $_GET['scientific_field'];
$rowAcademicActivityType = $_GET['academic_activity_type'];
$rowActivity = $_GET['activity'];
$rowWorkName = $_GET['work_name'];
$rowDoiNumber = $_GET['doi_number'];
$rowPersons = $_GET['persons'];
$rowSubmissionPeriod = $_GET['submission_period'];
?>

<html>
  <head>
    <script defer>
        window.print();
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Generator" content="Microsoft Word 15 (filtered)" />
    <title>B2 Form</title>
    <style>
      <!--
       /* Font Definitions */
       @font-face
      	{font-family:"Cambria Math";
      	panose-1:2 4 5 3 5 4 6 3 2 4;}
      @font-face
      	{font-family:Calibri;
      	panose-1:2 15 5 2 2 2 4 3 2 4;}
      @font-face
      	{font-family:Carlito;}
       /* Style Definitions */
       p.MsoNormal, li.MsoNormal, div.MsoNormal
      	{margin:0in;
      	font-size:12.0pt;
      	font-family:"Times New Roman",serif;}
      h1
      	{margin-top:2.8pt;
      	margin-right:0in;
      	margin-bottom:0in;
      	margin-left:8.4pt;
      	text-autospace:none;
      	font-size:11.0pt;
      	font-family:"Carlito",sans-serif;
      	font-weight:normal;}
      p.MsoBodyText, li.MsoBodyText, div.MsoBodyText
      	{margin:0in;
      	text-autospace:none;
      	font-size:10.0pt;
      	font-family:"Carlito",sans-serif;}
      p.TableParagraph, li.TableParagraph, div.TableParagraph
      	{mso-style-name:"Table Paragraph";
      	margin:0in;
      	text-autospace:none;
      	font-size:11.0pt;
      	font-family:"Carlito",sans-serif;}
      .MsoChpDefault
      	{font-family:"Calibri",sans-serif;}
      .MsoPapDefault
      	{text-autospace:none;}
      @page WordSection1
      	{size:595.5pt 842.0pt;
      	margin:52.0pt 21.0pt 14.0pt 12.0pt;}
      div.WordSection1
      	{page:WordSection1;}
      @page WordSection2
      	{size:595.5pt 842.0pt;
      	margin:52.0pt 21.0pt 14.0pt 12.0pt;}
      div.WordSection2
      	{page:WordSection2;}
      @page WordSection3
      	{size:595.5pt 842.0pt;
      	margin:52.0pt .15pt 14.0pt 21.3pt;}
      div.WordSection3
      	{page:WordSection3;}
       /* List Definitions */
       ol
      	{margin-bottom:0in;}
      ul
      	{margin-bottom:0in;}
      -->
      body {
    display: none;
}

@media print {
    body {
        display: block;
    }
}
    </style>
  </head>

  <body lang="EN-US" style="word-wrap: break-word; max-width: 800px">
    <div class="WordSection1">
      <h1
        style="
          margin-top: 2.15pt;
          margin-right: 0in;
          margin-bottom: 0in;
          margin-left: 202.2pt;
          margin-bottom: 0.0001pt;
          text-indent: -183.65pt;
          line-height: 107%;
        "
      >
        <b
          ><span lang="TR" style="font-size: 12pt; line-height: 107%; font-family: 'Calibri', sans-serif"
            >BİLİMSEL YAYIN VE AKADEMİK ETKİNLİKLERİ DESTEKLEME BAŞVURU VE İNCELEME KOMİSYONU KARAR TUTANAĞI VE DEĞERLENDİRME RAPORU FORMU</span
          ></b
        >
      </h1>

      <p class="MsoBodyText" style="margin-top: 0.2pt"><span lang="TR" style="font-size: 7.5pt; font-family: 'Calibri', sans-serif">&nbsp;</span></p>

<p class="MsoNormal" style="margin-top: 2.8pt; margin-right: 0in; margin-bottom: 0in; margin-left: 8.4pt; margin-bottom: 0.0001pt">
    <span lang="TR" style="font-family: 'Calibri', sans-serif">
       
    </span>
</p>

      <table
        class="MsoNormalTable"
        border="0"
        cellspacing="0"
        cellpadding="0"
        width="682"
        style="width: 511.6pt; margin-left: 23.75pt; border-collapse: collapse"
      >
        <tr style="height: 15.65pt">
          <td width="682" nowrap colspan="2" style="width: 511.6pt; border: solid windowtext 1pt; padding: 0.75pt 3.5pt 0.75pt 3.5pt; height: 15.65pt">
            <p class="MsoNormal" align="center" style="text-align: center">
              <b><span lang="TR" style="font-size: 11pt; color: black">BAŞVURAN ÖĞRETİM ELEMANININ</span></b>
            </p>
          </td>
        </tr>
        <tr style="height: 15.65pt">
          <td
            width="184"
            nowrap
            valign="bottom"
            style="width: 137.65pt; border: solid windowtext 1pt; border-top: none; padding: 0.75pt 3.5pt 0.75pt 3.5pt; height: 15.65pt"
          >
            <p class="MsoNormal"><span lang="TR" style="font-size: 10pt; color: black">Adı Soyadı</span></p>
          </td>
          <td
            width="499"
            nowrap
            style="
              width: 373.9pt;
              border-top: none;
              border-left: none;
              border-bottom: solid windowtext 1pt;
              border-right: solid windowtext 1pt;
              padding: 0.75pt 3.5pt 0.75pt 3.5pt;
              height: 15.65pt;
            "
          >
            <p class="MsoNormal"><span lang="TR" style="font-size: 10pt; color: black">&nbsp;  <?php echo $rowName . ' ' . $rowSurname; ?></span></p>
          </td>
        </tr>
        <tr style="height: 15.65pt">
          <td
            width="184"
            nowrap
            valign="bottom"
            style="width: 137.65pt; border: solid windowtext 1pt; border-top: none; padding: 0.75pt 3.5pt 0.75pt 3.5pt; height: 15.65pt"
          >
            <p class="MsoNormal"><span lang="TR" style="font-size: 10pt; color: black">Akademik Kadro Unvanı</span></p>
          </td>
          <td
            width="499"
            nowrap
            style="
              width: 373.9pt;
              border-top: none;
              border-left: none;
              border-bottom: solid windowtext 1pt;
              border-right: solid windowtext 1pt;
              padding: 0.75pt 3.5pt 0.75pt 3.5pt;
              height: 15.65pt;
            "
          >
            <p class="MsoNormal"><span lang="TR" style="font-size: 10pt; color: black">&nbsp;<?php echo $rowTitle ; ?></span></p>
          </td>
        </tr>
        <tr style="height: 15.65pt">
          <td
            width="184"
            nowrap
            valign="bottom"
            style="width: 137.65pt; border: solid windowtext 1pt; border-top: none; padding: 0.75pt 3.5pt 0.75pt 3.5pt; height: 15.65pt"
          >
            <p class="MsoNormal"><span lang="TR" style="font-size: 10pt; color: black">Kadro Birimi (Fakülte)</span></p>
          </td>
          <td
            width="499"
            nowrap
            style="
              width: 373.9pt;
              border-top: none;
              border-left: none;
              border-bottom: solid windowtext 1pt;
              border-right: solid windowtext 1pt;
              padding: 0.75pt 3.5pt 0.75pt 3.5pt;
              height: 15.65pt;
            "
          >
            <p class="MsoNormal"><span lang="TR" style="font-size: 10pt; color: black">&nbsp;<?php echo $rowFaculty ; ?></span></p>
          </td>
        </tr>
        <tr style="height: 15.65pt">
          <td
            width="184"
            nowrap
            valign="bottom"
            style="width: 137.65pt; border: solid windowtext 1pt; border-top: none; padding: 0.75pt 3.5pt 0.75pt 3.5pt; height: 15.65pt"
          >
            <p class="MsoNormal"><span lang="TR" style="font-size: 10pt; color: black">Bölümü </span></p>
          </td>
          <td
            width="499"
            nowrap
            style="
              width: 373.9pt;
              border-top: none;
              border-left: none;
              border-bottom: solid windowtext 1pt;
              border-right: solid windowtext 1pt;
              padding: 0.75pt 3.5pt 0.75pt 3.5pt;
              height: 15.65pt;
            "
          >
            <p class="MsoNormal"><span lang="TR" style="font-size: 10pt; color: black">&nbsp;<?php echo $rowDepartment ; ?></span></p>
          </td>
        </tr>
        <tr style="height: 15.65pt">
          <td
            width="184"
            nowrap
            valign="bottom"
            style="width: 137.65pt; border: solid windowtext 1pt; border-top: none; padding: 0.75pt 3.5pt 0.75pt 3.5pt; height: 15.65pt"
          >
            <p class="MsoNormal"><span lang="TR" style="font-size: 10pt; color: black">Temel Alanı*</span></p>
          </td>
          <td
            width="499"
            nowrap
            style="
              width: 373.9pt;
              border-top: none;
              border-left: none;
              border-bottom: solid windowtext 1pt;
              border-right: solid windowtext 1pt;
              padding: 0.75pt 3.5pt 0.75pt 3.5pt;
              height: 15.65pt;
            "
          >
            <p class="MsoNormal"><span lang="TR" style="font-size: 10pt; color: black">&nbsp;<?php echo $rowBasicField ; ?></span></p>
          </td>
        </tr>
      </table>
      <h1 style="margin-top: 0in; line-height: 12.45pt">
        <span lang="TR" style="font-family: 'Calibri', sans-serif">    *En Yakın Bilim Alanını Yazınız. ÜAK Doçentlik temel alanları dikkate alınacaktır.</span>
      </h1>

      <p class="MsoBodyText" style="margin-top: 0.25pt"><span lang="TR" style="font-size: 12pt; font-family: 'Calibri', sans-serif">&nbsp;</span></p>

      <table class="MsoNormalTable" border="1" cellspacing="0" cellpadding="0" style="margin-left: 20.15pt; border-collapse: collapse; border: none">
        <tr style="height: 43.25pt">
          <td
            width="56"
            valign="top"
            style="width: 42.15pt; border: solid black 2.25pt; border-right: solid black 1pt; padding: 0in 0in 0in 0in; height: 43.25pt"
          >
            <p class="TableParagraph" style="margin-right: -2.9pt">
              <span lang="TR" style="font-family: 'Calibri', sans-serif">Faaliyet<span style="letter-spacing: -0.25pt"> </span>Türü</span>
            </p>
          </td>
          <td
            width="60"
            valign="top"
            style="
              width: 44.7pt;
              border-top: solid black 2.25pt;
              border-left: none;
              border-bottom: solid black 2.25pt;
              border-right: solid black 1pt;
              padding: 0in 0in 0in 0in;
              height: 43.25pt;
            "
          >
            <p
              class="TableParagraph"
              style="
                margin-top: 6.65pt;
                margin-right: 3.4pt;
                margin-bottom: 0in;
                margin-left: 7.4pt;
                margin-bottom: 0.0001pt;
                text-indent: -1.1pt;
                line-height: 107%;
              "
            >
              <span lang="TR" style="font-family: 'Calibri', sans-serif">TEBLİĞ PUANI</span>
            </p>
          </td>
          <td
            width="84"
            valign="top"
            style="
              width: 63.1pt;
              border-top: solid black 2.25pt;
              border-left: none;
              border-bottom: solid black 2.25pt;
              border-right: solid black 1pt;
              padding: 0in 0in 0in 0in;
              height: 43.25pt;
            "
          >
            <p
              class="TableParagraph"
              style="margin-top: 0in; margin-right: 11.7pt; margin-bottom: 0in; margin-left: 7.1pt; margin-bottom: 0.0001pt; line-height: 107%"
            >
              <span lang="TR" style="font-family: 'Calibri', sans-serif">Düzeltme Yapılan</span>
            </p>
            <p class="TableParagraph" style="margin-left: 7.1pt; line-height: 11.85pt">
              <span lang="TR" style="font-family: 'Calibri', sans-serif">Faaliyet*</span>
            </p>
          </td>
          <td
            width="431"
            valign="top"
            style="
              width: 323.2pt;
              border-top: solid black 2.25pt;
              border-left: none;
              border-bottom: solid black 2.25pt;
              border-right: solid black 1pt;
              padding: 0in 0in 0in 0in;
              height: 43.25pt;
            "
          >
            <p
              class="TableParagraph"
              align="center"
              style="margin-top: 6.15pt; margin-right: 55.45pt; margin-bottom: 0in; margin-left: 57.15pt; margin-bottom: 0.0001pt; text-align: center"
            >
              <span lang="TR" style="font-family: 'Calibri', sans-serif">Gerekçe</span>
            </p>
            <p
              class="TableParagraph"
              align="center"
              style="margin-top: 1.1pt; margin-right: 55.45pt; margin-bottom: 0in; margin-left: 57.25pt; margin-bottom: 0.0001pt; text-align: center"
            >
              <span lang="TR" style="font-family: 'Calibri', sans-serif">(Gerekçenin açık biçimde yazılması mecburidir)</span>
            </p>
          </td>
          <td width="78" valign="top" style="width: 58.35pt; border: solid black 2.25pt; border-left: none; padding: 0in 0in 0in 0in; height: 43.25pt">
            <p
              class="TableParagraph"
              style="
                margin-top: 6.65pt;
                margin-right: 3.3pt;
                margin-bottom: 0in;
                margin-left: 6.4pt;
                margin-bottom: 0.0001pt;
                text-indent: 1.3pt;
                line-height: 107%;
              "
            >
              <span lang="TR" style="font-family: 'Calibri', sans-serif">Komisyon NET PUAN</span>
            </p>
          </td>
        </tr>
        <tr style="height: 26.2pt">
          <td width="56" valign="top" style="width: 42.15pt; border: solid black 1pt; border-top: none; padding: 0in 0in 0in 0in; height: 26.2pt">
            <p class="TableParagraph" style="margin-left: 2.35pt; line-height: 12.85pt">
              <span lang="TR" style="font-family: 'Calibri', sans-serif">Yayın</span>
            </p>
          </td>
          <td
            width="60"
            valign="top"
            style="
              width: 44.7pt;
              border-top: none;
              border-left: none;
              border-bottom: solid black 1pt;
              border-right: solid black 1pt;
              padding: 0in 0in 0in 0in;
              height: 26.2pt;
            "
          >
            <p
              class="TableParagraph"
              align="center"
              style="margin-top: 5.55pt; margin-right: 3.15pt; margin-bottom: 0in; margin-left: 5.9pt; margin-bottom: 0.0001pt; text-align: center"
            >
              <span lang="TR" style="font-family: 'Calibri', sans-serif">&nbsp; </span>
            </p>
          </td>
          <td
            width="84"
            valign="top"
            style="
              width: 63.1pt;
              border-top: none;
              border-left: none;
              border-bottom: solid black 1pt;
              border-right: solid black 1pt;
              padding: 0in 0in 0in 0in;
              height: 26.2pt;
            "
          >
            <p class="TableParagraph"><span lang="TR" style="font-size: 10pt; font-family: 'Calibri', sans-serif">&nbsp;</span></p>
          </td>
          <td
            width="431"
            valign="top"
            style="
              width: 323.2pt;
              border-top: none;
              border-left: none;
              border-bottom: solid black 1pt;
              border-right: solid black 1pt;
              padding: 0in 0in 0in 0in;
              height: 26.2pt;
            "
          >
            <p class="TableParagraph"><span lang="TR" style="font-family: 'Calibri', sans-serif; color: black">&nbsp;</span></p>
          </td>
          <td
            width="78"
            valign="top"
            style="
              width: 58.35pt;
              border-top: none;
              border-left: none;
              border-bottom: solid black 1pt;
              border-right: solid black 1pt;
              padding: 0in 0in 0in 0in;
              height: 26.2pt;
            "
          >
            <p
              class="TableParagraph"
              align="center"
              style="margin-top: 5.55pt; margin-right: 11.35pt; margin-bottom: 0in; margin-left: 13.8pt; margin-bottom: 0.0001pt; text-align: center"
            >
              <span lang="TR" style="font-family: 'Calibri', sans-serif">&nbsp;</span>
            </p>
          </td>
        </tr>
        <tr style="height: 14.05pt">
          <td width="56" valign="top" style="width: 42.15pt; border: solid black 1pt; border-top: none; padding: 0in 0in 0in 0in; height: 14.05pt">
            <p
              class="TableParagraph"
              style="margin-top: 0.05pt; margin-right: 0in; margin-bottom: 0in; margin-left: 2.35pt; margin-bottom: 0.0001pt; line-height: 12.45pt"
            >
              <span lang="TR" style="font-family: 'Calibri', sans-serif">Tasarım</span>
            </p>
          </td>
          <td
            width="60"
            valign="top"
            style="
              width: 44.7pt;
              border-top: none;
              border-left: none;
              border-bottom: solid black 1pt;
              border-right: solid black 1pt;
              padding: 0in 0in 0in 0in;
              height: 14.05pt;
            "
          >
            <p
              class="TableParagraph"
              align="center"
              style="
                margin-top: 0.05pt;
                margin-right: 0in;
                margin-bottom: 0in;
                margin-left: 2.65pt;
                margin-bottom: 0.0001pt;
                text-align: center;
                line-height: 12.45pt;
              "
            >
              <span lang="TR" style="font-family: 'Calibri', sans-serif">&nbsp;</span>
            </p>
          </td>
          <td
            width="84"
            valign="top"
            style="
              width: 63.1pt;
              border-top: none;
              border-left: none;
              border-bottom: solid black 1pt;
              border-right: solid black 1pt;
              padding: 0in 0in 0in 0in;
              height: 14.05pt;
            "
          >
            <p class="TableParagraph"><span lang="TR" style="font-size: 10pt; font-family: 'Calibri', sans-serif">&nbsp;</span></p>
          </td>
          <td
            width="431"
            valign="top"
            style="
              width: 323.2pt;
              border-top: none;
              border-left: none;
              border-bottom: solid black 1pt;
              border-right: solid black 1pt;
              padding: 0in 0in 0in 0in;
              height: 14.05pt;
            "
          >
            <p class="TableParagraph"><span lang="TR" style="font-size: 10pt; font-family: 'Calibri', sans-serif">&nbsp;</span></p>
          </td>
          <td
            width="78"
            valign="top"
            style="
              width: 58.35pt;
              border-top: none;
              border-left: none;
              border-bottom: solid black 1pt;
              border-right: solid black 1pt;
              padding: 0in 0in 0in 0in;
              height: 14.05pt;
            "
          >
            <p class="TableParagraph" align="center" style="text-align: center">
              <span lang="TR" style="font-size: 10pt; font-family: 'Calibri', sans-serif">&nbsp;</span>
            </p>
          </td>
        </tr>
        <tr style="height: 14.05pt">
          <td width="56" valign="top" style="width: 42.15pt; border: solid black 1pt; border-top: none; padding: 0in 0in 0in 0in; height: 14.05pt">
            <p
              class="TableParagraph"
              style="margin-top: 0.05pt; margin-right: 0in; margin-bottom: 0in; margin-left: 2.35pt; margin-bottom: 0.0001pt; line-height: 12.45pt"
            >
              <span lang="TR" style="font-family: 'Calibri', sans-serif">Sergi</span>
            </p>
          </td>
          <td
            width="60"
            valign="top"
            style="
              width: 44.7pt;
              border-top: none;
              border-left: none;
              border-bottom: solid black 1pt;
              border-right: solid black 1pt;
              padding: 0in 0in 0in 0in;
              height: 14.05pt;
            "
          >
            <p
              class="TableParagraph"
              align="center"
              style="
                margin-top: 0.05pt;
                margin-right: 0in;
                margin-bottom: 0in;
                margin-left: 2.65pt;
                margin-bottom: 0.0001pt;
                text-align: center;
                line-height: 12.45pt;
              "
            >
              <span lang="TR" style="font-family: 'Calibri', sans-serif">&nbsp;</span>
            </p>
          </td>
          <td
            width="84"
            valign="top"
            style="
              width: 63.1pt;
              border-top: none;
              border-left: none;
              border-bottom: solid black 1pt;
              border-right: solid black 1pt;
              padding: 0in 0in 0in 0in;
              height: 14.05pt;
            "
          >
            <p class="TableParagraph"><span lang="TR" style="font-size: 10pt; font-family: 'Calibri', sans-serif">&nbsp;</span></p>
          </td>
          <td
            width="431"
            valign="top"
            style="
              width: 323.2pt;
              border-top: none;
              border-left: none;
              border-bottom: solid black 1pt;
              border-right: solid black 1pt;
              padding: 0in 0in 0in 0in;
              height: 14.05pt;
            "
          >
            <p class="TableParagraph"><span lang="TR" style="font-size: 10pt; font-family: 'Calibri', sans-serif">&nbsp;</span></p>
          </td>
          <td
            width="78"
            valign="top"
            style="
              width: 58.35pt;
              border-top: none;
              border-left: none;
              border-bottom: solid black 1pt;
              border-right: solid black 1pt;
              padding: 0in 0in 0in 0in;
              height: 14.05pt;
            "
          >
            <p class="TableParagraph" align="center" style="text-align: center">
              <span lang="TR" style="font-size: 10pt; font-family: 'Calibri', sans-serif">&nbsp;</span>
            </p>
          </td>
        </tr>
        <tr style="height: 14.05pt">
          <td width="56" valign="top" style="width: 42.15pt; border: solid black 1pt; border-top: none; padding: 0in 0in 0in 0in; height: 14.05pt">
            <p
              class="TableParagraph"
              style="margin-top: 0.05pt; margin-right: 0in; margin-bottom: 0in; margin-left: 2.35pt; margin-bottom: 0.0001pt; line-height: 12.45pt"
            >
              <span lang="TR" style="font-family: 'Calibri', sans-serif">Patent</span>
            </p>
          </td>
          <td
            width="60"
            valign="top"
            style="
              width: 44.7pt;
              border-top: none;
              border-left: none;
              border-bottom: solid black 1pt;
              border-right: solid black 1pt;
              padding: 0in 0in 0in 0in;
              height: 14.05pt;
            "
          >
            <p
              class="TableParagraph"
              align="center"
              style="
                margin-top: 0.05pt;
                margin-right: 0in;
                margin-bottom: 0in;
                margin-left: 2.65pt;
                margin-bottom: 0.0001pt;
                text-align: center;
                line-height: 12.45pt;
              "
            >
              <span lang="TR" style="font-family: 'Calibri', sans-serif">&nbsp;</span>
            </p>
          </td>
          <td
            width="84"
            valign="top"
            style="
              width: 63.1pt;
              border-top: none;
              border-left: none;
              border-bottom: solid black 1pt;
              border-right: solid black 1pt;
              padding: 0in 0in 0in 0in;
              height: 14.05pt;
            "
          >
            <p class="TableParagraph"><span lang="TR" style="font-size: 10pt; font-family: 'Calibri', sans-serif">&nbsp;</span></p>
          </td>
          <td
            width="431"
            valign="top"
            style="
              width: 323.2pt;
              border-top: none;
              border-left: none;
              border-bottom: solid black 1pt;
              border-right: solid black 1pt;
              padding: 0in 0in 0in 0in;
              height: 14.05pt;
            "
          >
            <p class="TableParagraph"><span lang="TR" style="font-size: 10pt; font-family: 'Calibri', sans-serif">&nbsp;</span></p>
          </td>
          <td
            width="78"
            valign="top"
            style="
              width: 58.35pt;
              border-top: none;
              border-left: none;
              border-bottom: solid black 1pt;
              border-right: solid black 1pt;
              padding: 0in 0in 0in 0in;
              height: 14.05pt;
            "
          >
            <p class="TableParagraph" align="center" style="text-align: center">
              <span lang="TR" style="font-size: 10pt; font-family: 'Calibri', sans-serif">&nbsp;</span>
            </p>
          </td>
        </tr>
        <tr style="height: 14.7pt">
          <td width="56" valign="top" style="width: 42.15pt; border: solid black 1pt; border-top: none; padding: 0in 0in 0in 0in; height: 14.7pt">
            <p class="TableParagraph" style="margin-top: 0.05pt; margin-right: 0in; margin-bottom: 0in; margin-left: 2.35pt; margin-bottom: 0.0001pt">
              <span lang="TR" style="font-family: 'Calibri', sans-serif">Atıf</span>
            </p>
          </td>
          <td
            width="60"
            valign="top"
            style="
              width: 44.7pt;
              border-top: none;
              border-left: none;
              border-bottom: solid black 1pt;
              border-right: solid black 1pt;
              padding: 0in 0in 0in 0in;
              height: 14.7pt;
            "
          >
            <p
              class="TableParagraph"
              align="center"
              style="margin-top: 5.45pt; margin-right: 3.15pt; margin-bottom: 0in; margin-left: 5.85pt; margin-bottom: 0.0001pt; text-align: center"
            >
              <span lang="TR" style="font-family: 'Calibri', sans-serif">&nbsp;</span>
            </p>
          </td>
          <td
            width="84"
            valign="top"
            style="
              width: 63.1pt;
              border-top: none;
              border-left: none;
              border-bottom: solid black 1pt;
              border-right: solid black 1pt;
              padding: 0in 0in 0in 0in;
              height: 14.7pt;
            "
          >
            <p class="TableParagraph"><span lang="TR" style="font-size: 10pt; font-family: 'Calibri', sans-serif">&nbsp;</span></p>
          </td>
          <td
            width="431"
            valign="top"
            style="
              width: 323.2pt;
              border-top: none;
              border-left: none;
              border-bottom: solid black 1pt;
              border-right: solid black 1pt;
              padding: 0in 0in 0in 0in;
              height: 14.7pt;
            "
          >
            <p class="TableParagraph"><span lang="TR" style="font-size: 10pt; font-family: 'Calibri', sans-serif">&nbsp;</span></p>
          </td>
          <td
            width="78"
            valign="top"
            style="
              width: 58.35pt;
              border-top: none;
              border-left: none;
              border-bottom: solid black 1pt;
              border-right: solid black 1pt;
              padding: 0in 0in 0in 0in;
              height: 14.7pt;
            "
          >
            <p
              class="TableParagraph"
              align="center"
              style="margin-top: 5.45pt; margin-right: 11.35pt; margin-bottom: 0in; margin-left: 13.65pt; margin-bottom: 0.0001pt; text-align: center"
            >
              <span lang="TR" style="font-family: 'Calibri', sans-serif">&nbsp;</span>
            </p>
          </td>
        </tr>
        <tr style="height: 14.05pt">
          <td width="56" valign="top" style="width: 42.15pt; border: solid black 1pt; border-top: none; padding: 0in 0in 0in 0in; height: 14.05pt">
            <p class="TableParagraph" style="margin-left: 2.35pt; line-height: 12.5pt">
              <span lang="TR" style="font-family: 'Calibri', sans-serif">Toplam</span>
            </p>
          </td>
          <td
            width="60"
            valign="top"
            style="
              width: 44.7pt;
              border-top: none;
              border-left: none;
              border-bottom: solid black 1pt;
              border-right: solid black 1pt;
              padding: 0in 0in 0in 0in;
              height: 14.05pt;
            "
          >
            <p
              class="TableParagraph"
              align="center"
              style="
                margin-top: 0.05pt;
                margin-right: 3.15pt;
                margin-bottom: 0in;
                margin-left: 5.9pt;
                margin-bottom: 0.0001pt;
                text-align: center;
                line-height: 12.45pt;
              "
            >
              <span lang="TR" style="font-family: 'Calibri', sans-serif">&nbsp;</span>
            </p>
          </td>
          <td
            width="84"
            valign="top"
            style="
              width: 63.1pt;
              border-top: none;
              border-left: none;
              border-bottom: solid black 1pt;
              border-right: solid black 1pt;
              padding: 0in 0in 0in 0in;
              height: 14.05pt;
            "
          >
            <p class="TableParagraph"><span lang="TR" style="font-size: 10pt; font-family: 'Calibri', sans-serif">&nbsp;</span></p>
          </td>
          <td
            width="431"
            valign="top"
            style="
              width: 323.2pt;
              border-top: none;
              border-left: none;
              border-bottom: solid black 1pt;
              border-right: solid black 1pt;
              padding: 0in 0in 0in 0in;
              height: 14.05pt;
            "
          >
            <p class="TableParagraph"><span lang="TR" style="font-size: 10pt; font-family: 'Calibri', sans-serif">&nbsp;</span></p>
          </td>
          <td
            width="78"
            valign="top"
            style="
              width: 58.35pt;
              border-top: none;
              border-left: none;
              border-bottom: solid black 1pt;
              border-right: solid black 1pt;
              padding: 0in 0in 0in 0in;
              height: 14.05pt;
            "
          >
            <p
              class="TableParagraph"
              align="center"
              style="
                margin-top: 0.05pt;
                margin-right: 11.35pt;
                margin-bottom: 0in;
                margin-left: 13.8pt;
                margin-bottom: 0.0001pt;
                text-align: center;
                line-height: 12.45pt;
              "
            >
              <span lang="TR" style="font-family: 'Calibri', sans-serif">&nbsp;</span>
            </p>
          </td>
        </tr>
      </table>

      <p
        class="MsoBodyText"
        style="
          margin-top: 0.9pt;
          margin-right: 11.9pt;
          margin-bottom: 0in;
          margin-left: 21.3pt;
          margin-bottom: 0.0001pt;
          text-align: justify;
          text-indent: 35.75pt;
          line-height: 107%;
        "
      >
        <span lang="TR" style="font-family: 'Times New Roman', serif"
          >*Yönergedeki Faaliyet ve Puan Tablosunda Faaliyet Türü. Alt Faaliyet. Detayı Sıralamasına göre maddelendirecektir. Başvuru, &quot;İstanbul Nişantaşı
          Üniversitesi Bilimsel Yayın ve Akademik Etkinlikleri Yönergesi&quot; çerçevesinde incelenmiş, gerekli düzeltmeler yapılmış ve puanlama yapılan
          faaliyetler için yönetmelikte geçen şartların sağlandığına dair belgeler kontrol edilmiş ve eksik belgeler tamamlanmıştır. Yukarıda özeti bulunan
          gerekçeli değerlendirmemiz neticesinde başvuruyu yapan öğretim elemanımızın ………..Puan aldığı tespit edilmiştir.
        </span>
      </p>

      <p
        class="MsoBodyText"
        style="
          margin-top: 0.9pt;
          margin-right: 11.9pt;
          margin-bottom: 0in;
          margin-left: 8.25pt;
          margin-bottom: 0.0001pt;
          text-indent: 35.75pt;
          line-height: 107%;
        "
      >
        <span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span>
      </p>

      <p
        class="MsoBodyText"
        style="
          margin-top: 0.9pt;
          margin-right: 11.9pt;
          margin-bottom: 0in;
          margin-left: 8.25pt;
          margin-bottom: 0.0001pt;
          text-indent: 35.75pt;
          line-height: 107%;
        "
      >
        <b
          ><span lang="TR" style="font-family: 'Times New Roman', serif"
            >           Beyandan= ……. puan olmak üzere, toplamda ……. TL teşvik ödülü almaya hak kazanmıştır.</span
          ></b
        >
      </p>

      <h1 style="margin-top: 1.35pt"><span lang="TR" style="font-size: 10pt; font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 1.35pt; margin-right: 0in; margin-bottom: 0in; margin-left: 21.3pt; margin-bottom: 0.0001pt; text-indent: -12.9pt">
        <span lang="TR" style="font-size: 10pt; font-family: 'Times New Roman', serif"
          >     Değerlendirme Raporu: Gerekçe kısmına sığmayan ya da eklenecek genel hususlar varsa belirtiniz. (ek sayfa kullanılabilinir)</span
        >
      </h1>

      <h1 style="margin-top: 1.35pt"><span lang="TR" style="font-size: 10pt; font-family: 'Times New Roman', serif">     Değerlendirme Tarihi: ………</span></h1>

      <table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" style="margin-left: 27.75pt; border-collapse: collapse; border: none">
        <tr style="height: 15pt">
          <td width="589" colspan="3" valign="top" style="width: 441.75pt; border: none; padding: 0in 5.25pt 0in 5.25pt; height: 15pt">
            <p class="MsoBodyText" align="center" style="text-align: center">
              <span lang="TR" style="font-family: 'Times New Roman', serif; color: black">               </span>
            </p>
            <p class="MsoNormal" align="center" style="text-align: center"><span lang="TR" style="font-size: 10pt; color: black">&nbsp;</span></p>
            <p class="MsoBodyText" align="center" style="text-align: center">
              <span lang="TR" style="font-family: 'Times New Roman', serif; color: black">             Prof. Dr. İlhami ÇOLAK</span>
            </p>
            <p class="MsoBodyText" align="center" style="text-align: center">
              <span lang="TR" style="font-family: 'Times New Roman', serif; color: black">              Komisyon Başkanı</span>
            </p>
            <p class="MsoNormal" align="center" style="text-align: center; line-height: 107%">
              <span lang="TR" style="font-size: 10pt; line-height: 107%; color: black">&nbsp;</span>
            </p>
            <p class="MsoNormal" align="center" style="text-align: center; line-height: 107%">
              <span lang="TR" style="font-size: 10pt; line-height: 107%; color: black">&nbsp;</span>
            </p>
            <p class="MsoNormal" align="center" style="text-align: center; line-height: 107%">
              <span lang="TR" style="font-size: 10pt; line-height: 107%; color: black">&nbsp;</span>
            </p>
          </td>
        </tr>
        <tr style="height: 15pt">
          <td width="222" valign="top" style="width: 166.5pt; border: none; padding: 0in 5.25pt 0in 5.25pt; height: 15pt">
            <p class="MsoBodyText"><span lang="TR" style="font-family: 'Times New Roman', serif; color: black">       Prof. Dr. Çiğdem ÜSTÜN</span></p>
            <p class="MsoNormal" style="line-height: 107%">
              <span lang="TR" style="font-size: 10pt; line-height: 107%; color: black">                Komisyon Üyesi</span>
            </p>
            <p class="MsoNormal" align="center" style="text-align: center; line-height: 107%">
              <span lang="TR" style="font-size: 10pt; line-height: 107%; color: black">&nbsp;</span>
            </p>
            <p class="MsoNormal" align="center" style="text-align: center; line-height: 107%">
              <span lang="TR" style="font-size: 10pt; line-height: 107%; color: black">&nbsp;</span>
            </p>
            <p class="MsoNormal" align="center" style="text-align: center; line-height: 107%">
              <span lang="TR" style="font-size: 10pt; line-height: 107%; color: black">&nbsp;</span>
            </p>
          </td>
          <td width="196" valign="top" style="width: 147pt; border: none; padding: 0in 5.25pt 0in 5.25pt; height: 15pt">
            <p class="MsoBodyText"><span lang="TR" style="font-family: 'Times New Roman', serif; color: black">      Prof. Dr. Kürşat YALÇINER</span></p>
            <p class="MsoNormal" style="line-height: 107%">
              <span lang="TR" style="font-size: 10pt; line-height: 107%; color: black">                Komisyon Üyesi</span>
            </p>
            <p class="MsoNormal" style="line-height: 107%"><span lang="TR" style="font-size: 10pt; line-height: 107%; color: black">&nbsp;</span></p>
          </td>
          <td width="171" valign="top" style="width: 128.25pt; border: none; padding: 0in 5.25pt 0in 5.25pt; height: 15pt">
            <p class="MsoBodyText" align="center" style="text-align: center">
              <span lang="TR" style="font-family: 'Times New Roman', serif; color: black">Doç. Dr. Yahya Can DURA </span>
            </p>
            <p class="MsoBodyText" align="center" style="text-align: center">
              <span lang="TR" style="font-family: 'Times New Roman', serif; color: black">Komisyon Üyesi</span>
            </p>
          </td>
        </tr>
        <tr style="height: 15pt">
          <td width="222" valign="top" style="width: 166.5pt; border: none; padding: 0in 5.25pt 0in 5.25pt; height: 15pt">
            <p class="MsoBodyText" align="center" style="text-align: center">
              <span lang="TR" style="font-family: 'Times New Roman', serif; color: black">Dr. Öğretim Üyesi Burcu KURTİŞ</span>
            </p>
            <p class="MsoBodyText" align="center" style="text-align: center">
              <span lang="TR" style="font-family: 'Times New Roman', serif; color: black">Komisyon Üyesi</span>
            </p>
            <p class="MsoNormal" style="line-height: 107%"><span lang="TR" style="font-size: 10pt; line-height: 107%; color: black">&nbsp;</span></p>
          </td>
          <td width="196" valign="top" style="width: 147pt; border: none; padding: 0in 5.25pt 0in 5.25pt; height: 15pt">
            <p class="MsoBodyText" align="center" style="text-align: center">
              <span lang="TR" style="font-family: 'Times New Roman', serif; color: black">Dr. Öğr. Üyesi İlhan GARİP</span>
            </p>
            <p class="MsoBodyText" align="center" style="text-align: center">
              <span lang="TR" style="font-family: 'Times New Roman', serif; color: black">Komisyon Üyesi</span>
            </p>
          </td>
          <td width="171" valign="top" style="width: 128.25pt; border: none; padding: 0in 5.25pt 0in 5.25pt; height: 15pt">
            <p class="MsoBodyText" align="center" style="text-align: center">
              <span lang="TR" style="font-family: 'Times New Roman', serif; color: black">Doç. Dr. Nazenin İpek IŞIKCI</span>
            </p>
            <p class="MsoBodyText" align="center" style="text-align: center">
              <span lang="TR" style="font-family: 'Times New Roman', serif; color: black">Komisyon Üyesi</span>
            </p>
          </td>
        </tr>
      </table>

      <h1 style="margin-top: 1.35pt"><span lang="TR" style="font-size: 10pt; font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 1.35pt"><span lang="TR" style="font-size: 10pt; font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <p
        class="MsoBodyText"
        style="margin-top: 2.95pt; margin-right: 16.05pt; margin-bottom: 0in; margin-left: 0in; margin-bottom: 0.0001pt; text-align: justify; line-height: 106%"
      >
        <span lang="TR" style="font-family: 'Times New Roman', serif"
          >Not:<span style="letter-spacing: -0.35pt"> </span>Değerlendirme<span style="letter-spacing: -0.3pt"> </span>raporuna<span
            style="letter-spacing: -0.3pt"
          >
          </span
          >sadece<span style="letter-spacing: -0.35pt"> </span>araştırmacıların<span style="letter-spacing: -0.25pt"> </span>uygun<span
            style="letter-spacing: -0.2pt"
          >
          </span
          >görülmeyen<span style="letter-spacing: -0.2pt"> </span>veya<span style="letter-spacing: -0.25pt"> </span>başvurusuna<span
            style="letter-spacing: -0.2pt"
          >
          </span
          >göre<span style="letter-spacing: -0.3pt"> </span>değişiklik<span style="letter-spacing: -0.2pt"> </span>öngörülen<span
            style="letter-spacing: -0.3pt"
          >
          </span
          >faaliyetlerini<span style="letter-spacing: -0.2pt"> </span>ve bunlarla ilgili açıklamaları ekleyiniz. Uygun olduğu değerlendirilen faaliyetleri
          Değerlendirme Raporuna işlemeyiniz ve bu faaliyetlerle ilgili açıklama<span style="letter-spacing: -0.15pt"> </span>yazmayınız.
        </span>
      </p>

      <p class="MsoNormal" style="text-align: justify; line-height: 106%"><span lang="TR">&nbsp;</span></p>

      <p class="MsoNormal" style="text-align: justify; line-height: 106%"><span lang="TR">&nbsp;</span></p>

      <p class="MsoNormal" style="text-align: justify; line-height: 106%"><span lang="TR">&nbsp;</span></p>
    </div>

    <div class="WordSection2" style="background-color: white">
      <h1 style="margin-top: 2pt; margin-right: 0in; margin-bottom: 0in; margin-left: 26.4pt; margin-bottom: 0.0001pt; text-indent: -0.25in">
        <b
          ><span lang="TR" style="font-family: 'Times New Roman', serif"
            >1.<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span
          ></b
        ><b><span lang="TR" style="font-family: 'Times New Roman', serif">YAYIN</span></b>
      </h1>

      <h1 style="margin-top: 2pt; margin-right: 0in; margin-bottom: 0in; margin-left: 26.4pt; margin-bottom: 0.0001pt">
        <b><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></b>
      </h1>

      <h1 style="margin-top: 2pt">
        <span lang="TR" style="font-family: 'Times New Roman', serif"
          >1.1-WoS tarafından taranan SCI, SCI-Expanded, SSCI ve AHCI kapsamındaki dergilerde yayımlanmış araştırma makalesi</span
        >
      </h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">A1-A2-A3-A4 alanları için</span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif"> 1.1.a – Quartile Q1</span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif"> </span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif"> 1.1.b – Quartile Q2 </span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif"> 1.1.c – Quartile Q3 </span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif"> 1.1.d – Quartile Q4 </span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 2pt">
        <span lang="TR" style="font-family: 'Times New Roman', serif">1.2-SCOPUS tarafından taranan dergilerde yayımlanmış araştırma makalesi</span>
      </h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif"> 1.2.a – Quartile Q1</span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif"> </span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif"> 1.2.b – Quartile Q2 </span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif"> 1.2.c – Quartile Q3 </span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif"> 1.2.d – Quartile Q4 </span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 2pt">
        <span lang="TR" style="font-family: 'Times New Roman', serif"
          >1.3.a- WoS tarafından taranan ESCI, ESSCI vb. gibi dergilerde yayımlanmış araştırma makalesi
        </span>
      </h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 2pt">
        <span lang="TR" style="font-family: 'Times New Roman', serif"
          >1.4.a- WoS ve SCOPUS tarafından taranan konferans (sempozyum) kitaplarında yayımlanmış araştırma makalesi</span
        >
      </h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 2pt">
        <span lang="TR" style="font-family: 'Times New Roman', serif">1.5.a-Diğer uluslararası hakemli dergilerde yayımlanmış araştırma makalesi </span>
      </h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 2pt">
        <span lang="TR" style="font-family: 'Times New Roman', serif"
          >1.6.a-ULAKBİM TR Dizin tarafından taranan ulusal hakemli dergilerde yayımlanmış araştırma makalesi
        </span>
      </h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 2pt">
        <span lang="TR" style="font-family: 'Times New Roman', serif"
          >1.7.a-Tanınmış uluslararası yayınevleri tarafından yayımlanmış özgün bilimsel kitap
        </span>
      </h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 2pt">
        <span lang="TR" style="font-family: 'Times New Roman', serif"
          >1.8.a- Tanınmış uluslararası yayınevleri tarafından yayımlanmış özgün bilimsel kitaplarda bölüm yazarlığı</span
        >
      </h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 2pt">
        <span lang="TR" style="font-family: 'Times New Roman', serif">1-9.a Tanınmış ulusal yayınevleri tarafından yayımlanmış özgün bilimsel kitap </span>
      </h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 2pt">
        <span lang="TR" style="font-family: 'Times New Roman', serif"
          >1.10.a-Tanınmış ulusal yayınevleri tarafından yayımlanmış özgün bilimsel kitaplarda bölüm
        </span>
      </h1>

      <h1 style="margin-top: 2pt">
        <b><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></b>
      </h1>

      <h1 style="margin-top: 2pt">
        <b><span lang="TR" style="font-family: 'Times New Roman', serif">2-TASARIM </span></b>
      </h1>

      <h1 style="margin-top: 2pt">
        <b><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></b>
      </h1>

      <h1 style="margin-top: 2pt">
        <span lang="TR" style="font-family: 'Times New Roman', serif"
          >2.1.a- Endüstriyel, çevresel veya grafiksel tasarım; sahne, moda veya çalgı tasarımı</span
        >
      </h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 2pt">
        <b><span lang="TR" style="font-family: 'Times New Roman', serif">3-SERGİ</span></b>
      </h1>

      <h1 style="margin-top: 2pt">
        <b><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></b>
      </h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">3.1.a-Özgün yurtdışı bireysel etkinlik </span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">3.2.a- Özgün yurtiçi bireysel etkinlik </span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">3.3.a- Özgün yurtdışı grup/karma/toplu etkinlik </span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">3.4.a- Özgün yurtiçi grup/karma/toplu etkinlik </span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 2pt">
        <b><span lang="TR" style="font-family: 'Times New Roman', serif">4-PATENT</span></b>
      </h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">4.1.a- Uluslararası patent </span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">4.2.a-Ulusal patent </span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">4.3.a- Uluslararası Faydalı Model </span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">4.4.a- Ulusal Faydalı Model </span></h1>

      <h1 style="margin-top: 2pt">
        <b><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></b>
      </h1>

      <h1 style="margin-top: 2pt">
        <b><span lang="TR" style="font-family: 'Times New Roman', serif">5-ATIF</span></b>
      </h1>

      <h1 style="margin-top: 2pt">
        <b><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></b>
      </h1>

      <h1 style="margin-top: 2pt">
        <span lang="TR" style="font-family: 'Times New Roman', serif"
          >5.1.a- SCI, SCI-Expanded, SSCI ve AHCI kapsamındaki dergilerde yayımlanmış makalelerde atıf
        </span>
      </h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 2pt">
        <span lang="TR" style="font-family: 'Times New Roman', serif">5.2.a-Alan endeksleri (varsa) kapsamındaki dergilerde yayımlanmış makalelerde atıf </span>
      </h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 2pt">
        <span lang="TR" style="font-family: 'Times New Roman', serif">5.3.a- Diğer uluslararası hakemli dergilerde yayımlanmış makalelerde atıf </span>
      </h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 2pt">
        <span lang="TR" style="font-family: 'Times New Roman', serif"
          >5.4.a- ULAKBİM tarafından taranan ulusal hakemli dergilerde yayımlanmış makalelerde atıf
        </span>
      </h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 2pt">
        <span lang="TR" style="font-family: 'Times New Roman', serif"
          >5.5.a- Tanınmış uluslararası yayınevleri tarafından yayımlanmış özgün bilimsel kitapta atıf
        </span>
      </h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 2pt">
        <span lang="TR" style="font-family: 'Times New Roman', serif"
          >5.6.a- Tanınmış ulusal yayınevleri tarafından yayımlanmış özgün bilimsel kitapta atıf</span
        >
      </h1>

      <h1 style="margin-top: 2pt"><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></h1>

      <h1 style="margin-top: 2pt">
        <span lang="TR" style="font-family: 'Times New Roman', serif"
          >5.7.a- Güzel sanatlardaki eserlerin uluslararası kaynak veya yayın organlarında yer alması veya gösterime ya da dinletime girmesi</span
        >
      </h1>

      <h1 style="margin-top: 2pt">
        <b><span lang="TR" style="font-family: 'Times New Roman', serif">&nbsp;</span></b>
      </h1>

      <h1 style="margin-top: 2pt">
        <span lang="TR" style="font-family: 'Times New Roman', serif"
          >5.8.a- Güzel sanatlardaki eserlerin ulusal kaynak veya yayın organlarında yer alması veya gösterime ya da</span
        >
      </h1>
    </div>
  </body>
</html>
