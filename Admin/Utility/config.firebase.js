
var firebaseConfig = {
  apiKey: "AIzaSyCJg-eG7QH6yFZRlRA2hjMwiU1Sd8t6Puw",
  authDomain: "kurudhiweb.firebaseapp.com",
  projectId: "kurudhiweb",
  storageBucket: "kurudhiweb.appspot.com",
  messagingSenderId: "993287986742",
  appId: "1:993287986742:web:3f28546bc8f14e6d190297",
  measurementId: "G-DVJ5PWQ84Z"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);


admin.initializeApp({
    credential: admin.credential.applicationDefault(),
  });
firebase.analytics();