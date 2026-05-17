# KaraMazer UI Component Library

## Overview

This project serves as a general Laravel starter template with **Laravel Fortify** pre-installed for robust headless authentication. It provides a comprehensive suite of reusable Laravel Blade components built specifically for the system. Designed to integrate seamlessly with **Bootstrap 5** and the **Mazer Admin Template**, these components enforce UI consistency, reduce boilerplate HTML, and manage their own asset loading (CSS/JS) automatically via Laravel's `@push` directives.

Compatibility: Laravel 10.x / 11.x / 13.x

## Sidebar Navigation (`config/menu.php`)

The sidebar navigation is entirely data-driven and managed via the `config/menu.php` file. This allows you to easily manage headers, links, nested submenus, icons, and apply permission-based visibility without directly modifying Blade HTML.

### Attributes

| Attribute | Type   | Description                                       |
| --------- | ------ | ------------------------------------------------- |
| `header`  | string | Renders a section header                          |
| `text`    | string | The display name of the menu item                 |
| `route`   | string | The Laravel named route (e.g., `dashboard`)       |
| `url`     | string | The literal URL path (if `route` is not used)     |
| `icon`    | string | Bootstrap icon class (e.g., `bi bi-house`)        |
| `can`     | string | Laravel Gate / Permission needed to view the item |
| `submenu` | array  | An array of child menu items                      |

### Example Configuration

```php
return [
    [
        'header' => 'Main Navigation',
        'can' => 'view navigation'
    ],
    [
        'text' => 'Dashboard',
        'route' => 'dashboard',
        'icon' => 'bi bi-house',
        'can' => 'view dashboard'
    ],
    [
        'text' => 'Participant',
        'icon' => 'bi bi-person',
        'submenu' => [
            [
                'text' => 'View Participants',
                'route' => 'participants.index',
                'can' => 'view participants'
            ],
            [
                'text' => 'Create Participant',
                'route' => 'participants.create',
                'can' => 'create participants'
            ]
        ]
    ]
];
```

## Features

- **Form Abstraction:** Automatic handling of `old()` validation state and error displays.
- **Asset Management:** Smart loading of heavy dependencies (DataTables, Flatpickr, Toastify) using `@once` and `@push`.
- **Atomic Design:** Card and Form elements are broken down using explicit dot-notation (e.g., `x-form.input`, `x-card.body`).
- **Data-Driven:** Support for passing raw PHP arrays into complex Javascript configurations safely via `@json`.

## Installation

Because this is an internal component library, no Composer installation is required. Ensure your master layout includes the correct asset stacks for the components to push their scripts and styles to.

In your `app.blade.php` or `master.blade.php`, ensure you have:

```blade
<head>
    <!-- ... -->
    @stack('css')
</head>
<body>
    <!-- ... -->
    @stack('js')
</body>
```

## Usage

### 1. Alert (`x-alert`)

Description:
Reusable Bootstrap 5 alert component with optional icons and dismissal support.

Props:
| Prop | Type | Default | Description |
|------|------|------|------|
| `type` | string | `'primary'` | Bootstrap color theme (success, danger, etc.) |
| `icon` | string | `null` | Bootstrap icon name (e.g., 'check-circle') |
| `dismissible` | bool | `false` | Whether to show the close button |

Usage:

```blade
<x-alert type="warning" icon="exclamation-triangle" dismissible>
    Please update your profile information.
</x-alert>
```

### 2. Button (`x-button`)

Description:
Standardized button component with optional icon injection.

Props:
| Prop | Type | Default | Description |
|------|------|------|------|
| `type` | string | `'button'` | Button type (submit, button, reset) |
| `theme` | string | `'primary'` | Bootstrap theme class |
| `icon` | string | `null` | FontAwesome or Bootstrap icon class |

Usage:

```blade
<x-button type="submit" theme="success" icon="bi bi-save">
    Save Record
</x-button>
```

### 3. Card Base (`x-card`)

Description:
Wrapper component for standard dashboard cards.

Props & Slots:
| Property | Type | Default | Description |
|------|------|------|------|
| `header` | slot/string | `null` | The card header content |
| `footer` | slot/string | `null` | The card footer content |
| `slot` | slot | - | Main body area |

Usage:

```blade
<x-card>
    <x-slot name="header">
        <h4 class="card-title">Participant Selection</h4>
    </x-slot>

    <p>Main card contents go here.</p>
</x-card>
```

### 4. Card Sub-Components (`x-card.body`, `x-card.text`, `x-card.link`)

Description:
Atomic wrappers for internal card structures.

Props (`x-card.body`):
| Prop | Type | Default | Description |
|------|------|------|------|
| `title` | string | `null` | Creates a `<h4 class="card-title">` |
| `subtitle` | string | `null` | Creates a `<h6 class="card-subtitle">` |

Usage:

```blade
<x-card>
    <x-card.body title="Main Settings" subtitle="Configure system info">
        <x-card.text>Some quick example text.</x-card.text>
        <x-card.link href="#">Action Link</x-card.link>
    </x-card.body>
</x-card>
```

### 5. Datatable (`x-datatable`)

Description:
A massive jQuery DataTables wrapper that dynamically pushes CSS/JS and maps PHP configurations into Javascript. Also supports Select and Paging layout adjustments natively.

Props:
| Prop | Type | Default | Description |
|------|------|------|------|
| `id` | string | `'table'` | Unique DOM ID for the table |
| `heads` | array | `[]` | Array of labels or specific column config arrays |
| `config` | array | `[]` | DataTables API Config array |
| `striped` | bool | `false` | Apply table-striped |
| `bordered` | bool | `false` | Apply table-bordered |
| `select` | bool | `false` | Enables DataTables Select extension |
| `paging` | bool | `false` | Applies predefined paging layouts |

Usage:

```blade
@php
$heads = ['ID', 'Name', 'Action'];
$config = [
    'data' => [ [1, 'John Doe', '...'] ],
];
@endphp

<x-datatable id="users" :heads="$heads" :config="$config" striped paging />
```

### 6. Flatpickr (`x-flatpickr`)

Description:
Advanced datepicker component utilizing Flatpickr. Automatically manages asset loading.

Props:
| Prop | Type | Default | Description |
|------|------|------|------|
| `name` | string | Required | Input name and ID |
| `config` | array | `[]` | Flatpickr JSON configuration |
| `label` | string | `null` | Input label text |
| `placeholder` | string | `null` | Input placeholder |
| `value` | string | `null` | Default predefined value |

Usage:

```blade
<x-flatpickr
    name="dob"
    label="Date of Birth"
    :config="['dateFormat' => 'Y-m-d', 'maxDate' => 'today']"
/>
```

### 7. Form Input (`x-form.input`)

Description:
Standard text-based input field. Automatically links labels, manages `old()` data, and handles Bootstrap `is-invalid` states.

Props:
| Prop | Type | Default | Description |
|------|------|------|------|
| `name` | string | Required | HTML name and id attribute |
| `type` | string | `'text'` | Input type (text, email, password, etc) |
| `value` | string | `null` | Default value (fallback for old data) |
| `label` | string | `null` | Field label |
| `helperText`| string| `null` | Muted help text below input |
| `required` | bool | `false` | Appends required attribute & red asterisk |

Usage:

```blade
<x-form.input name="email" type="email" label="Email Address" required />
```

### 8. Form Textarea (`x-form.textarea`)

Description:
Textarea field supporting floating labels and standard validation states.

Props:
| Prop | Type | Default | Description |
|------|------|------|------|
| `name` | string | Required | Field name |
| `rows` | int | `3` | Number of default rows |
| `float` | bool | `null` | Enables Bootstrap form-floating layout |

Usage:

```blade
<x-form.textarea name="description" label="Remarks" rows="5" />
```

### 9. Form Select (`x-form.select` & `x-form.options`)

Description:
Dropdown wrapper and options builder for clean `<select>` implementation.

Props (`x-form.select`):
| Prop | Type | Default | Description |
|------|------|------|------|
| `name` | string | `null` | DOM ID and Name |
| `label`| string | `null` | Label for select |
| `required` | bool | `false` | Appends red asterisk |

Props (`x-form.options`):
| Prop | Type | Default | Description |
|------|------|------|------|
| `options` | array | `[]` | Key-value array of choices |
| `selected`| array | `[]` | Array of selected keys |

Usage:

```blade
<x-form.select name="role_id" label="Select Role">
    <x-form.options
        :options="[1 => 'Admin', 2 => 'User']"
        emptyOption="Please Select..."
    />
</x-form.select>
```

### 10. Checkboxes & Radios (`x-form.checklist`, `x-form.radio`)

Description:
List generators for arrays of checkboxes or radio inputs.

Props:
| Prop | Type | Default | Description |
|------|------|------|------|
| `name` | string | Required | Shared input name |
| `options`| array | `[]` | PHP array format: `['value' => 'Label']` |
| `checked/selected`| mixed | - | Values that should be checked |

Usage:

```blade
<x-form.checklist
    name="permissions"
    label="Assign Permissions"
    :options="['read' => 'Read', 'write' => 'Write']"
    :checked="['read']"
/>
```

### 11. Session Alert (`x-session-alert`)

Description:
A global alert renderer that automatically looks for `success`, `error`, `warning` keys in the session, or `$errors->any()`, and displays them.

Usage:

```blade
<!-- Add this standard tag at the top of your layout container -->
<x-session-alert />
```

### 12. Toastify (`x-toastify`)

Description:
A non-blocking notification pop-up leveraging the Mazer Toastify library.

Props:
| Prop | Type | Default | Description |
|------|------|------|------|
| `id` | string | `''` | Binds the toast to a specific element click |
| `config` | array | `[]` | Configuration for the Toastify JS |

Usage:

```blade
<button id="toastBtn">Show Toast</button>

<x-toastify id="toastBtn" :config="['text' => 'Action Successful!', 'duration' => 3000]" />
```
