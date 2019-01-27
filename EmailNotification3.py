from flask import Flask
from flask_mail import Mail, Message


class EmailNotification:

    def __init__(self, club_name, recipient_email):
        self.club = club_name
        self.user_email = recipient_email

        self.mail_settings = {

            "MAIL_SERVER": 'smtp.gmail.com',

            "MAIL_PORT": 465,

            "MAIL_USE_TLS": False,

            "MAIL_USE_SSL": True,

            "MAIL_USERNAME": 'psu.clubmatching@gmail.com',

            "MAIL_PASSWORD": 'NittanyAIChallenge'

        }


app = Flask(__name__)
info = EmailNotification("DevPSU", "colin@patrickweb.com")
app.config.update(info.mail_settings)

if __name__ == '__main__':

    mail = Mail(app)

    msg = Message(subject="New Clubs that Might Interest You!",
                          sender=app.config.get("MAIL_USERNAME"),
                          recipients=[info.user_email],
                          body="Here's a club we might think you'd like:\n" + info.club)
    with app.app_context():
        mail.send(msg)
