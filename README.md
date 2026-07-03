# My picu

A helper plugin with ready-to-use filter and action examples for extending the [picu WordPress plugin](https://picu.io/).

Full developer documentation: https://picu.io/docs/developers/

## How to use

1. Copy this plugin into your `wp-content/plugins/` folder and activate it.
2. Open `my-picu.php` and uncomment the `require_once` line for the filter or action you want to use.
3. Adjust the example code to fit your needs.

Each filter and action lives in its own file so you can enable only what you need.

## Folder structure

| Folder | Contents |
|---|---|
| `filters/` | `add_filter()` examples for customizing picu behavior |
| `actions/` | `add_action()` examples for injecting custom output |
| `misc/` | Standalone utilities not tied to a specific picu hook |

## Notes

- **picu Pro filters** — files prefixed with `picu-pro-` require the picu Pro plugin to be active.
- **Mutually exclusive examples** — some files hook the same filter but demonstrate different approaches. Do not enable more than one at a time (see file comments for details).
- **Countries filter** — `picu-countries.php` contains two alternative functions (US States and Canadian Provinces). Enable only one `add_filter` at a time.
