#python code for cryptopals 1
#Hunter Danielson
#10/22/18

#importing libraries from python to make this easy
import binascii
import base64

#function telling what to do
def hexToBase64(s):
    decoded = binascii.unhexlify(s)
    return base64.b64encode(decoded).decode('ascii')
#the actual thing to convert
x = '49276d206b696c6c696e6720796f757220627261696e206c696b65206120706f69736f6e6f7573206d757368726f6f6d'
#calling the function to convert it
y = hexToBase64(x)
print('')
print(y)