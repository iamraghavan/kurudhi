var config = {
    apiKey: "AIzaSyDxAw4TI0OJD2zHPEuyR2vEwPEts3cyPGI",
  authDomain: "kurudhi-blood-bank.firebaseapp.com",
  databaseURL: "https://kurudhi-blood-bank-default-rtdb.asia-southeast1.firebasedatabase.app",
  projectId: "kurudhi-blood-bank",
  storageBucket: "kurudhi-blood-bank.appspot.com",
  messagingSenderId: "701515333227",
  appId: "1:701515333227:web:f93a22941229d194827b2e",
  measurementId: "G-5D4KHPF20X"
};
firebase.initializeApp(config);

//Reference for form collection(3)
let formMessage = firebase.database().ref('register');

//listen for submit event//(1)
document
  .getElementById('registrationform')
  .addEventListener('submit', formSubmit);

//Submit form(1.2)
function formSubmit(e) {
  e.preventDefault();
  // Get Values from the DOM
  let name = document.querySelector('#name').value;
  let email = document.querySelector('#email').value;
  let bloodGroupType = document.querySelector('#bloodGroupType').value;
  let genderType = document.querySelector('#genderType').value;
  let age = document.querySelector('#age').value;
  let contactNumber = document.querySelector('#contactNumber').value;
  let address = document.querySelector('#address').value;
  let countryId = document.querySelector('#countryId').value;
  let stateId = document.querySelector('#stateId').value;
  let cityId = document.querySelector('#cityId').value;

  //send message values
  sendMessage(name ,email ,bloodGroupType ,genderType ,age ,contactNumber ,address ,countryId ,stateId ,cityId);

  //Show Alert Message(5)
  document.querySelector('.alert').style.display = 'block';

  //Hide Alert Message After Seven Seconds(6)
  setTimeout(function() {
    document.querySelector('.alert').style.display = 'none';
  }, 7000);

  //Form Reset After Submission(7)
  document.getElementById('registrationform').reset();
}

//Send Message to Firebase(4)

function sendMessage(name ,email ,bloodGroupType ,genderType ,age ,contactNumber ,address ,countryId ,stateId ,cityId) {
  let newFormMessage = formMessage.push();
  newFormMessage.set({
    name: name,
      email: email,
      bloodGroupType : bloodGroupType,
      genderType: genderType,
      age: age, 
      contactNumber : contactNumber,
      address : address,
      countryId : countryId,
      stateId : stateId,
      cityId : cityId,
  });
}