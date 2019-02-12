
// List of Objects of Employees
// Fields of Object are Name, Age, Salary, DOB
var employee_list = [
    { name: 'MS Dhoni', age: 40, salary: 5000, dob: '7-7-1981'},
    { name: 'Virat Kohli', age: 25, salary: 8000, dob: '5-11-1988'},
    { name: 'Sachin Tendulkar', age: 45, salary: 3000, dob: '24-4-1973'},
    { name: 'Sunil Gavaskar', age: 45, salary: 2000, dob: '10-7-1949'},
    { name: 'Kuldeep Yadav', age: 25, salary: 500, dob: '18-4-1998'},
    { name: 'Rishabh Pant', age: 25, salary: 800, dob: '11-10-2000'}
];
document.write("(Part1) <br> List of objects of Employee are:- <br>")
employee_list.forEach(
    function(ele){
        document.write(JSON.stringify(ele) + "<br>")
    }
)

// Filter all employees with salary greater than 5000
document.write("<br> (Part 2) <br> All employees with salary greater than 5000 are:- <br>")
c = 0
employee_list.forEach(
    function(ele){
        if (ele.salary >= 5000){
            c++
            document.write(c + ". " + ele.name + "<br>")
        }
    }    
)

// Group employees on the basis of their age
Array.prototype.groupBy = function(prop) {
    return this.reduce(function(groups, item) {
      const val = item[prop]
      groups[val] = groups[val] || []
      groups[val].push(item)
      return groups
    }, {})
  }

document.write("<br> (Part3) <br> Grouped the objects of Employee by Age:- <br>")
document.write(JSON.stringify(employee_list.groupBy("age")) + "<br>");

// Fetch employees with salary less than 1000 and age greater than 20. 
// Then give them an increment 5 times their salary.
document.write("<br> (Part 4) <br> All employees with salary less than 1000 and age greater than 20 are:- <br>")
c = 0
employee_list.forEach(
    function(ele){
        if (ele.salary < 1000 && ele.age>20){
            c++
            document.write(c + ". " + ele.name + ": " + ele.salary + "<br>")
        }
    }    
)

document.write("<br> And now their salaries are incremented by 5 times:- <br>")
c = 0
employee_list.forEach(
    function(ele){
        if (ele.salary < 1000 && ele.age>20){
            c++
            ele.salary *=5
            document.write(c + ". " + ele.name + ": " + ele.salary + "<br>")
        }
    }    
)
