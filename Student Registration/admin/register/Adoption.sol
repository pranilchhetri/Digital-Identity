pragma solidity ^0.4.17;

contract Adoption {
address[16] public adopters;

// Adopting a student
function adopt(uint Id) public returns (uint) {
  require(Id >= 0 && Id <= 48);

  adopters[Id] = msg.sender;

  return Id;
}
function getAdopters() public view returns (address[16]) {
  return adopters;
}

}