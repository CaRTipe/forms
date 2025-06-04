var house = document.getElementById("house");
var tenant = document.getElementById("tenant");
var button = document.getElementById("addhouses")
function selectHouse() {
  for (var i = 1; i <= 1000; i++) {
    var option = document.createElement("option");
    option.value = i;
    option.text = "House " + i;

    document.getElementById("house").appendChild(option);
  }
}
selectHouse();

function selectID() {
  const firstNames = [
    "John",
    "Jane",
    "Michael",
    "Emily",
    "Chris",
    "Jessica",
    "Daniel",
    "Ashley",
    "David",
    "Sarah",
  ];
  const lastNames = [
    "Smith",
    "Doe",
    "Johnson",
    "Davis",
    "Brown",
    "Taylor",
    "Wilson",
    "Moore",
    "Clark",
    "Lee",
  ];

  const tenantNames = [];

  for (let i = 0; i < 1000; i++) {
    const first = firstNames[Math.floor(Math.random() * firstNames.length)];
    const last = lastNames[Math.floor(Math.random() * lastNames.length)];
    tenantNames.push(`${first} ${last}`);
  }

  for (let i=0; i <tenantNames.length; i++) {
    var option = document.createElement("option");
    option.value = i;
    option.text = tenantNames[i];

    document.getElementById("tenant").appendChild(option);
  }
  
}
selectID()


