var table = document.getElementById("my_table");
var countries = ["China","Italy","Spain","France","US","Iran","India","Germany","United Kingdom"]
var countries2 = ["China","Italy","Spain","France","United States","Iran, Islamic Republic Of","India","Germany","United Kingdom"]
for (var i = 0; i < countries.length - 1; i++) {
    for( var j = 0; j < countries.length - 1 - i; j++) 
    {
        if( Data[countries[j]][today][0] > Data[countries[j+1]][today][0]) {
            var temp = countries[j];var temp2 = countries2[j];
            countries[j] = countries[j+1];
            countries2[j] = countries2[j+1];
            countries[j+1] = temp;
            countries2[j+1] = temp2;
        }
    }
}
console.log(Data);
var cnt = 1;
console.log(Country_to_code)
for ( var j in countries) {
    var i = countries.length - j - 1;
    // console.log(countries[i]);
    console.log(Data[countries[i]][today]);
    $('#my_table').find('tbody').append('<tr><td> <span  id="' + countries[i].replace(" ","_") + '"></span>' + countries[i] + '</td><td>' + Data[countries[i]][today][0] + '</td><td>' + Data[countries[i]][today][1] + '</td></tr>')
    cnt = cnt + 1;
    const parentElement = document.getElementById(countries[i].replace(" ","_"));
    const flag = new CountryFlag(parentElement);
    flag.selectByAlpha2(Country_to_code[countries2[i]].toLowerCase());
    console.log(Country_to_code[countries2[i]].toLowerCase())
}

console.log(document.getElementById("China").innerHTML);