
p = prompt("Enter Principal amount")
r = prompt("Enter Rate of Interest")
t = prompt("Enter Duration(Time)")

var si = function simple_interest(principal,rate,time) {
    return (principal*rate*time)/100
}

document.write("Simple interest for:- <br> Principal amount: " + p + "<br> Rate of Interest : " + r + "<br> Duration(Time) : " + t + "<br> is " + si(p,r,t));

