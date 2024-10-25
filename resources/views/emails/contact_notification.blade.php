<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Message From Your Website</title>
</head>

<body
    style="margin: 0; padding: 0; font-family: 'Arial', sans-serif; background-color: #f8f9fa; -webkit-font-smoothing: antialiased;">
    <div
        style="max-width: 600px; margin: 20px auto; background-color: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
        <!-- Logo Header -->
        <div style="background-color: #ECF5F4; padding: 24px; text-align: center;">
            <img src="/images/logo.png" alt="Hack Solutions USA Logo" style="max-width: 200px; height: auto;">
        </div>

        <!-- Title Bar -->
        <div style="background-color: #2C3E50; color: #ffffff; padding: 20px; text-align: center;">
            <h1 style="margin: 0; font-size: 24px; font-weight: 600;">New Message From Your Website</h1>
        </div>

        <!-- Content -->
        <div style="padding: 32px 24px; color: #2C3E50;">
            <div style="background-color: #ffffff; border-radius: 12px; padding: 24px; border: 1px solid #e1e8ed;">
                <h2
                    style="color: #2C3E50; margin-top: 0; margin-bottom: 24px; font-size: 20px; border-bottom: 2px solid #ECF5F4; padding-bottom: 12px;">
                    Contact Details</h2>

                <div style="margin-bottom: 16px;">
                    <p style="margin: 8px 0; font-size: 16px;">
                        <strong style="color: #2C3E50; display: inline-block; width: 80px;">Name:</strong>
                        <span style="color: #4a5568;">{{ $contact->name }}</span>
                    </p>
                    <p style="margin: 8px 0; font-size: 16px;">
                        <strong style="color: #2C3E50; display: inline-block; width: 80px;">Email:</strong>
                        <span style="color: #4a5568;">{{ $contact->email }}</span>
                    </p>
                    <p style="margin: 8px 0; font-size: 16px;">
                        <strong style="color: #2C3E50; display: inline-block; width: 80px;">Phone:</strong>
                        <span style="color: #4a5568;">{{ $contact->phone }}</span>
                    </p>
                    <p style="margin: 8px 0; font-size: 16px;">
                        <strong style="color: #2C3E50; display: inline-block; width: 80px;">Subject:</strong>
                        <span style="color: #4a5568;">{{ $contact->subject }}</span>
                    </p>
                </div>

                <div style="margin-top: 24px;">
                    <h3 style="color: #2C3E50; margin-bottom: 12px; font-size: 18px;">Message:</h3>
                    <p
                        style="color: #4a5568; line-height: 1.6; background-color: #f8fafc; padding: 16px; border-radius: 8px; margin: 0;">
                        {{ $contact->message }}
                    </p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div style="background-color: #ECF5F4; padding: 24px; text-align: center;">
            <p style="margin: 0 0 12px 0; color: #2C3E50; font-size: 14px;">
                &copy; {{ date('Y') }} Hack Clothing USA. All rights reserved.
            </p>
            <p style="margin: 0; color: #2C3E50; font-size: 14px;">
                Questions? Contact us at
                <a href="mailto:support@hacksolutionsusa.com" style="color: #2C3E50; text-decoration: underline;">
                    support@hacksolutionsusa.com
                </a>
            </p>
        </div>
    </div>
</body>

</html>
