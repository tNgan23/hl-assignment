<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funny Stories</title>
    <link rel="stylesheet" href="css/stype.css">
</head>

<body>
    <div class="header">
        <div class="logo ">
            <img src="img/image.png" alt="Company Logo">
        </div>
        <div class="user ">
        <span style="text-align: right; color: #333; font-weight: normal;" ><i style="color: #777;">Handicrafted by</i> <br>Jim HLS</span>

    <img class="avatar" src="img/avatar.jpg" alt="User Avatar">
</div>

    </div>

    <div class="container">
        <h1 style="color: white;">A joke a day keeps the doctor away</h1>
        <h5 style="color: white;">If you joke the wrong way, your teeth have to pay. (Serious)</h5>
    </div><br>
    <div class="story"></div><br><br>
    <div class="reaction-buttons">
        <button class="btn-like" onclick="recordVote('like')">This is Funny!</button>
        <button class="btn-dislike" onclick="recordVote('dislike')">This is not Funny.</button>
    </div>

    <div class="footer ">
        <div class="disclaimer">
            This website is created as part of Hisolutions program. The materials contained on this website are provided
            for general
            information only and do not constitute any form of advice. HLS assumes no responsibility for the accuracy of
            any particular statement and
            accepts no liability for any loss or damage which may arise from reliance on the information contained on
            this site.
        </div>
        Copyright 2021 HLS
    </div>

    <script>
        function displayNextJoke() {
            fetch('get_joke.php')
                .then(response => response.text())
                .then(joke => {
                    document.querySelector('.story').textContent = joke;
                })
                .catch(error => console.error('Error fetching joke:', error));
        }

        function recordVote(vote) {
            fetch('record_vote.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `vote=${vote}`
            })
                .then(response => {
                    if (response.ok) {
                        console.log('Vote recorded successfully!');
                    } else {
                        console.error('Failed to record vote');
                    }
                    displayNextJoke();
                })
                .catch(error => console.error('Error recording vote:', error));
        }

        displayNextJoke();
    </script>
</body>

</html>
