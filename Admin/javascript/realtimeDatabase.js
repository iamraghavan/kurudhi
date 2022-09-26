submitData.addEventListener('click', (e) => {

    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var bloodGroupType = document.getElementById('bloodGroupType').value;
    var genderType = document.getElementById('genderType').value;
    var age = document.getElementById('age').value;
    var contactNumber = document.getElementById('contactNumber').value;
    var address = document.getElementById('address').value;
    var countryId = document.getElementById('countryId').value;
    var stateId = document.getElementById('stateId').value;
    var cityId  = document.getElementById('cityId').value;

    const newKey = push(child(ref(database), 'users')).key;

    set(ref(database, 'users/' + name), {
        name: name,
        email: email,
        bloodGroupType: bloodGroupType,
        genderType: genderType,
        age: age,
        contactNumber: contactNumber,
        address: address,
        countryId: countryId,
        stateId: stateId,
        cityId: cityId,

    }).then(() => {
        // Data saved successfully!
        alert('data submitted');
    })
        .catch((error) => {
            // The write failed...
            alert(error);
        });
});

// update(ref(database, 'users/' + name), {
//     name: name,
//     age: age
// }).then(() => {
//     // Data saved successfully!
//     alert('data updated');
// })
//     .catch((error) => {
//         // The write failed...
//         alert(error);
//     });


//     removeData.addEventListener('click',(e) => {
//         var username = document.getElementById('name').value;

//         remove(ref(database, 'users/' + name));
//         alert('removed');
//     });