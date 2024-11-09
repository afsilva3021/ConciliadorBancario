#include "TOTVS.CH"


User Function CLPM()
    Local aArea := GetArea()
   
    fMontaTela()
   
    RestArea(aArea)
Return
   
Static Function fMontaTela()
    //Objetos e componentes gerais
    Private oDlg
    Private oFwLayer
    Private oPanTitulo
    Private oPanTotal
    Private cMascara := "@E 999,999,999,999,999.99"
    //Cabeçalho
    Private oSayModulo, cSayModulo := 'Conciliador'
    Private oSayTitulo, cSayTitulo := 'Conciliador Bancario Custumizado'
    Private oSaySubTit, cSaySubTit := 'Conciliador Bancario'
    //Tamanho da janela
    Private aSize := MsAdvSize(.F.)
    Private nJanLarg := aSize[5]
    Private nJanAltu := aSize[6]
    //Fontes
    Private cFontUti    := "Tahoma"
    Private oFontMod    := TFont():New(cFontUti, , -38)
    Private oFontSub    := TFont():New(cFontUti, , -20)
    Private oFontSubN   := TFont():New(cFontUti, , -20, , .T.)
    Private oFontBtn    := TFont():New(cFontUti, , -14)
    Private oFontSay    := TFont():New(cFontUti, , -12)

   
    //Cria a janela
    DEFINE MSDIALOG oDlg TITLE "Conciliador Bancario Custon"  FROM 0, 0 TO nJanAltu, nJanLarg PIXEL
     // Prepara o conector WebSocket
    PRIVATE oWebChannel := TWebChannel():New()
    nPort := oWebChannel:connect()
    
    // Cria componente
    PRIVATE oWebEngine := TWebEngine():New(oDlg, 0, 0, 720, 1280,, nPort)
    oWebEngine:bLoadFinished := {|self,url| conout("Conciliador: " + url) }
    oWebEngine:navigate("172.31.201.112:8501")
    oWebEngine:Align := CONTROL_ALIGN_ALLCLIENT
       
    Activate MsDialog oDlg Centered

Return

