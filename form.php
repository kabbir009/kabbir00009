<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">

        <P> <span>> 1. Donation</span>
            <span>> 2. Confirmation</span>
            <span>> Thank You</span>
        </P>

        <table>
            <tr>
                <th>
                    <h1 style="color: red;">Donor Information</h1>
                </th>

            </tr>



            <th>
            <td>
                <label for="firstname"> First Name: </label>
                <input type="text" name="fname" id="firstname"> <br>
                <label for="lastname"> Last Name: </label>
                <input type="text" name="lname" id="lastname"> <br>
                <label for="Company"> Company: </label>
                <input type="text" name="company" id="Company"> <br>
                <label for="address1"> Address 1: </label>
                <input type="text" name="address1" id="address1"> <br>
                <label for="address2"> Address 2: </label>
                <input type="text" name="address2" id="address2"> <br>
                <label for="city"> City: </label>
                <input type="text" name="city" id="city"> <br>
                <label for="states">State: </label>
                <select name="states" id="states">
                    <option value="Null"> Select a State</option>
                    <option value="New Delhi">New Delhi</option>
                    <option value="Mumbai"> Mumbai</option>
                    <option value="Kerela"> Kerela</option>


                </select> <br>




                <label for="" zip> Zip Code: </label>
                <input type="text" name="zip code" id="zip"> <br>

                <label for=Country> Country: </label>

                <select name="Country" id="Country">

                    <option value="null">Select a Country </option>
                    <option value="india">India </option>


                </select> <br>
                <label for="Phone"> Phone: </label>
                <input type="text" name="phone" id="Phone"> <br>
                <label for="fax"> Fax: </label>
                <input type="text" name="fax" id="fax"> <br>
                <label for="email"> Email: </label>
                <input type="Email" name="Email" id="email"> <br>

                <label> Donation Amount: </label>
                <input type="radio" name="Donation" id="None">
                <label for="None"> None</label>
                <input type="radio" name="Donation" id="$50">
                <label for="$50"> $50</label>
                <input type="radio" name="Donation" id="$100">
                <label for="$100">$100 </label> <br>
                <label for="Other"> Other Amount $ </label>
                <input type="text" name="otherAmount" id="Other"> <br>
            </td>


            </th>
        </table>



        <h2 style="color: red;">Honorarium and Memorial Donation Information</h2>


        <table>
            <tr>
                <th>
                    <h4>I Would like to make this donation</h4>
                </th>
                <td>
                    <input type="radio" name="donation" id="donation">
                    <label for="donation"> To Honor</label> ,<br>
                    <input type="radio" name="donation" id="memory">
                    <label for="memory">In memory of </label> <br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="fname"> Name: </label>
                </td>
                <td>
                    <input type="text" name="fname" id="fname"> <br>

                </td>
            </tr>
            <tr>
                <td>
                    <label for="Acknowledge"> Acknowledge Donation to : </label>
                </td>
                <td>
                    <input type="text" name="Acknowledge" id="Acknowledge">

                </td>
            </tr>

            <tr>
                <td>
                    <label for="Address"> Address : </label>
                </td>
                <td>
                    <input type="text" name="Address" id="Address">

                </td>
            </tr>

            <tr>
                <td>
                    <label for="City"> City : </label>
                </td>
                <td>
                    <input type="text" name="City" id="City">

                </td>
            </tr>

            <tr>
                <td>
                    <label for="Acknowledge"> Acknowledge Donation to : </label>
                </td>
                <td>
                    <input type="text" name="Acknowledge" id="Acknowledge">

                </td>
            </tr>




            <tr>
                <td>
                    <label for="fstate"> Select a State : </label>
                </td>
                <td>
                    <select name="states" id="fstates">
                        <option value="null"> Select a State</option>
                        <option value="New Delhi">New Delhi</option>
                        <option value="Mumbai"> Mumbai</option>
                        <option value="kerela"> Kerela</option>


                    </select>

                </td>
            </tr>
            <tr>
                <td>
                    <label for="Zip"> Zip : </label>
                </td>
                <td>
                    <input type="text" name="Zip" id="Zip">

                </td>
            </tr>

            <th>
            <td>

        </table>



        <h2 style="color: red;">Additional Information</h2>
        <p> Please enter your name,comppany or organization as you would like it to appear in our pubications: </p>
        <br>

        <table>
            <tr>
                <th>

                    <label for="name"> Name: </label>
                </th>
                <td>
                    <input type="text" name="fname" id="name">
                </td>
            </tr>

        </table>




        <input type="checkbox" name="option1" id="opt1">
        <label for="opt1"> I would like my gift remain anonymous.</label> <br>
        <input type="checkbox" name="option2" id="opt2">
        <label for="opt2"> My employeer offers a matching gift program.I will mail the matching gift form</label> <br>
        <input type="checkbox" name="option3" id="opt3">
        <label for="opt3">please save the cost of acknowledgeing this gift by not mailing a thank you letter .</label>
        <br> <br>

        <table>
            <tr>
                <th>
                    <label for="comments"> Comments: </label>
                    <br>
                    <h5> (please type any quetions or feedback here) </h5>
                </th>
                <th>
                    <textarea name="comments" id="comments" style="font-family:sans-serif;font-size:1.2em;">

                    </textarea>
                </th>
            </tr>
        </table>


        <table>
            <tr>
                <th>
                    <label>How may we contact you? </label>
                </th>
                <td>

                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    <input type="checkbox" name="email" id="Email">
                    <label for="Email"> E-mail</label> <br>

                    <input type="checkbox" name="PostalMail" id="pmail">
                    <label for="pmail"> Postal Mail</label> <br>
                    <input type="checkbox" name="Telephone" id="telephone">
                    <label for="telephone"> Telephone </label> <br>
                    <input type="checkbox" name="Fax" id="fax">
                    <label for="fax"> Fax </label>
                </td>
            </tr>
            <h4> I would like to recieve newsletters and the information about spcial events by: </h4>
            <tr>
                <th>

                </th>

                <td>

                </td>
            </tr>
        </table>


        <h4> I would like to recieve newsletters and the information about spcial events by: </h4>
        <table>


            <tr>
                <td>

                </td>
                <td>
                    <input type="checkbox" name="email" id="Email1">
                    <label for="Email1"> E-mail</label> <br>

                    <input type="checkbox" name="PostalMail" id="pmail1">
                    <label for="pmail1"> Postal Mail</label> <br>
                </td>
            </tr>
        </table>
        <table>

        </table>


        <input type="checkbox" name="op1" id="option">
        <label for="option"> I would like to information about volunteering with the</label> <br> <br>

        <button type="reset" value="Reset">Reset</button>
        <button type="submit" value="send">Continue</button>




    </form>
</body>
