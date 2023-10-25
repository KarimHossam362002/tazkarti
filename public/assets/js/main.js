const faqs = document.querySelectorAll(".faq");

faqs.forEach(faq => {
    faq.addEventListener("click",()=>{
        faq.classList.toggle("active");
    })
})
// Teams selection for the tournment
document.getElementById("tournment_name").addEventListener("change", function() {
    var team_name_1 = document.getElementById("team_name_1");
    var team_name_2 = document.getElementById("team_name_2");
    team_name_1.style.display = this.value ? "block" : "none";
    team_name_2.style.display = this.value ? "block" : "none";
  });
//   Select team 1 from the same tournment then disable the team in select team 2
document.getElementById("team_name_1").addEventListener("change", function() {
    var firstValue = this.value;
    var secondSelect = document.getElementById("team_name_2");
    var secondOptions = secondSelect.options;
  
    for (var i = 0; i < secondOptions.length; i++) {
      if (secondOptions[i].value === firstValue) {
        secondOptions[i].disabled = true;
      } else {
        secondOptions[i].disabled = false;
      }
    }
  });
document.getElementById("team_name_2").addEventListener("change", function() {
    var firstValue = this.value;
    var secondSelect = document.getElementById("team_name_1");
    var secondOptions = secondSelect.options;
  
    for (var i = 0; i < secondOptions.length; i++) {
      if (secondOptions[i].value === firstValue) {
        secondOptions[i].disabled = true;
      } else {
        secondOptions[i].disabled = false;
      }
    }
  });