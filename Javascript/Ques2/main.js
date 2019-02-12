
s = prompt("Enter a string")

var pal = function palindrome(s){
    var n = s.length
    var s1 = ''
    for(var i=n-1; i>=0; i--){
        s1 += s.charAt(i);
    }
    if(s===s1){ document.write(s + " is a Palindrome.")}
    else { document.write(s + " is not a Palindrome.")}
}

pal(s)
