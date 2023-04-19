<?php









/*


To generate a JWT token, the following steps are typically followed:

Create a JSON object containing the claims (payload) you want to include in the token. The claims typically include information about the user, such as the user ID, username, and email.

Encode the JSON object using Base64Url encoding. This creates the second part of the JWT, which is called the payload.

Create the header of the JWT, which contains information about the type of token and the algorithm used to sign it. The header is also encoded using Base64Url encoding.

Combine the encoded header and payload, and sign the result using a secret key and the algorithm specified in the header. The result is the third part of the JWT, which is called the signature.

Concatenate the encoded header, encoded payload, and signature, separated by dots, to create the final JWT token.

eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c

*/