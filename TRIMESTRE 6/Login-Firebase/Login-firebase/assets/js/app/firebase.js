// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/10.9.0/firebase-app.js";
import { getAuth } from "https://www.gstatic.com/firebasejs/10.9.0/firebase-auth.js";

// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
const firebaseConfig = {

    apiKey: "AIzaSyAkmt4dzv-r8w1e10hh6Fpb7Udzqk669Ik",
    authDomain: "memory-game-f4d32.firebaseapp.com",
    projectId: "memory-game-f4d32",
    storageBucket: "memory-game-f4d32.appspot.com",
    messagingSenderId: "722199604194",
    appId: "1:722199604194:web:1a1bac29577313776827bb",
};

// Initialize Firebase
export const app = initializeApp(firebaseConfig);
export const auth = getAuth(app);
