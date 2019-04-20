
// Initialize Firebase 
var config = {
  apiKey: "AIzaSyDUg7EZeZbjIv3izKMgs4s4faNTC7ciXNg",
  authDomain: "my-project-1502830330486.firebaseapp.com",
  databaseURL: "https://my-project-1502830330486.firebaseio.com",
  projectId: "my-project-1502830330486",
  storageBucket: "my-project-1502830330486.appspot.com",
  messagingSenderId: "732170060070"
};
firebase.initializeApp(config);

// Reference messages collection
var messagesRef = firebase.database().ref('messages');

// Listen for form submit
document.getElementById('contactForm').addEventListener('submit', submitForm);

// Submit form
function submitForm(e){
  e.preventDefault();

  // Get values
  var first_name = getInputVal('first_name');
  var last_name = getInputVal('last_name');
  var email = getInputVal('email');
  var phone = getInputVal('phone');
  var cakeType = getInputVal('cakeType');
  var specialRequests = getInputVal('specialRequests');

  // Save message
  saveMessage(first_name, last_name, email, phone, cakeType, specialRequests);

  // Show alert
  document.querySelector('.alert').style.display = 'block';

  // Hide alert after 3 seconds
  setTimeout(function(){
    document.querySelector('.alert').style.display = 'none';
  },3000);

  // Clear form
  document.getElementById('contactForm').reset();
}

// Function to get get form values
function getInputVal(id){
  return document.getElementById(id).value;
}

// Save message to firebase
function saveMessage(first_name, last_name, email, phone, cakeType, specialRequests){
  var newMessageRef = messagesRef.push();
  newMessageRef.set({
    first_name:first_name,
    last_name:last_name,
    email:email,
    phone:phone,
    cakeType:cakeType,
    specialRequests:specialRequests
  });
}
