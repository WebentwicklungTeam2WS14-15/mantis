

var url = "mantisconnect_addissue.php?name=mc_issue_add&issueData[]=project[]=Schadensmeldung";
  $.getJSON(url, function(data) {
     $.each(data, function() {
      console.log(data.id + ': ' + data.summary);
});
});

alert("I ran");