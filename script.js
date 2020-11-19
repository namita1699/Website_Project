function boldtext()
{
    document.execCommand('bold');
}
function italictext()
{
    document.execCommand('italic');
}
function underlinetext()
{
    document.execCommand('underline');
}
function subscript()
{
    document.execCommand('subscript');
}
function superscript()
{
    document.execCommand('superscript');
}
function centertext()
{
    document.execCommand('justifyCenter');
    
}
function lefttext()
{
    document.execCommand('justifyLeft');
    
}
function righttext()
{
    document.execCommand('justifyRight');
    
}
function font() 
{
    var a=document.getElementById('fonts').value;
    document.execCommand('fontName',true,a);    
}
function fontss() 
{

    var a=document.getElementById('fontsize').value;
    document.execCommand('fontSize',true,Number(a));    
}
function contentprint()
{
    
        var divContents = document.getElementById("content").innerHTML; 
        var a = window.open('', '', 'height=500, width=500'); 
        a.document.write('<html>'); 
        a.document.write('<body >'); 
        a.document.write(divContents); 
        a.document.write('</body></html>'); 
        a.document.close(); 
        a.print(); 
    
}
function save()
{
    var a=document.getElementById("content").innerHTML;
    document.getElementsByName("hcontent").value=a;
}