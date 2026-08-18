# phpBB Mentions Fork

This extension is a fork of `paul999/mention` and adds a simple mention system to phpBB using `@Username`.

## Fork Notice

This fork still uses the original extension namespace `paul999/mention`. Therefore, the installation path remains `phpBB/ext/paul999/mention`.

## Fork Changes

- Dedicated ACP page for mention settings in the extension settings.
- Configurable mention font style.
- Optional links from mentions to user profiles.
- Updated defaults: autocomplete starts after 2 characters and returns up to 25 results.
- Autocomplete no longer triggers inside email addresses.
- Improved autocomplete feedback when the input is shorter than the configured minimum length.
- Optional per-language email template override via `mention_mail-overwrite.txt`.
- Revised German and English texts for permissions and email notifications.

## Inherited Features

- User mentions via `@Username` autocomplete.
- Group mentions with separate permissions for groups and large groups.
- Configurable mention color.
- Configurable minimum length for autocomplete search.
- Configurable maximum number of autocomplete results.
- Mention BBCodes are converted back to readable `@Name` text when quoting.
- Mention BBCode is only enabled where it is needed.
- Notifications are also processed when posts are approved later.
- Mention notifications are marked as read when topics or forums are marked as read.

## Installation

1. Copy the extension to `phpBB/ext/paul999/mention`.
2. In the ACP, go to `Customise` > `Extensions` and enable the `phpBB mentions` extension.
3. Review permissions and assign `Can use the mention system`, `Can mention groups`, and `Can mention large groups` where needed.
4. Configure the extension settings in the ACP.

This extension requires phpBB `>= 3.3.0RC1` and PHP `~7.1` or `~8.0`.

## Translations

Currently, only `en`, `de`, `de_x_sie`, and `fr` are maintained.

Other existing language directories were inherited from the original project and are not actively maintained in this fork. If you use another language, review and update the texts before using them in production.

## Overriding the Email Template

Mention emails use the template `@paul999_mention/mention_mail` by default.

To override the email template without modifying the default file, create this file for the relevant language:

```text
language/<language>/email/mention_mail-overwrite.txt
```

For German, for example:

```text
language/de/email/mention_mail-overwrite.txt
language/de_x_sie/email/mention_mail-overwrite.txt
```

If no override file exists for the recipient's language, phpBB falls back to the default `language/<language>/email/mention_mail.txt`. Clear the phpBB cache after changing language or template files.

Available template variables:

- `{AUTHOR_NAME}`: Name of the user who mentioned someone.
- `{TOPIC_TITLE}`: Topic title.
- `{U_LINK_TO_TOPIC}`: Direct link to the post.
- `{SITENAME}` and `{EMAIL_SIG}`: Standard phpBB variables.

## Tests

To run the tests, phpBB must be installed from its Git repository. Then run the following from the phpBB root directory:

Windows:

```bat
phpBB\vendor\bin\phpunit.bat -c phpBB\ext\paul999\mention\phpunit.xml.dist
```

Other systems:

```sh
phpBB/vendor/bin/phpunit -c phpBB/ext/paul999/mention/phpunit.xml.dist
```

## License

[GPLv2](license.txt)
