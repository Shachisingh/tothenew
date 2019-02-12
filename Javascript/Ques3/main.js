
r = prompt("Enter radius of a circle")

function area_of_circle(radius){
    document.write("The area of circle with radius " + r + " is " + (Math.PI*r*r).toFixed(2))
}

area_of_circle(r)
