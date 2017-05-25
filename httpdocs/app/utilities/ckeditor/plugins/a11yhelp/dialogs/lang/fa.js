﻿/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/license
 */

CKEDITOR.plugins.setLang( 'a11yhelp', 'fa', {
	title: 'دستورالعمل‌های دسترسی',
	contents: 'راهنمای فهرست مطالب. برای بستن این کادر محاوره‌ای ESC را فشار دهید.',
	legend: [
		{
		name: 'عمومی',
		items: [
			{
			name: 'نوار ابزار ویرایشگر',
			legend: '${toolbarFocus} را برای باز کردن نوار ابزار بفشارید. با کلید Tab و Shift+Tab در مجموعه نوار ابزار بعدی و قبلی حرکت کنید. برای حرکت در کلید نوار ابزار قبلی و بعدی با کلید جهت‌نمای راست و چپ جابجا شوید. کلید Space یا Enter را برای فعال کردن کلید نوار ابزار بفشارید.'
		},

			{
			name: 'پنجره محاورهای ویرایشگر',
			legend:
				'Inside a dialog, press TAB to navigate to the next dialog element, press SHIFT+TAB to move to the previous dialog element, press ENTER to submit the dialog, press ESC to cancel the dialog. When a dialog has multiple tabs, the tab list can be reached either with ALT+F10 or with TAB as part of the dialog tabbing order. With tab list focused, move to the next and previous tab with RIGHT and LEFT ARROW, respectively.'  // MISSING
		},

			{
			name: 'منوی متنی ویرایشگر',
			legend: '${contextMenu} یا کلید برنامههای کاربردی را برای باز کردن منوی متن را بفشارید. سپس میتوانید برای حرکت به گزینه بعدی منو با کلید Tab و یا کلید جهتنمای پایین جابجا شوید. حرکت به گزینه قبلی با Shift+Tab یا کلید جهتنمای بالا. فشردن Space یا Enter برای انتخاب یک گزینه از منو. باز کردن زیر شاخه گزینه منو جاری با کلید Space یا Enter و یا کلید جهتنمای راست و چپ. بازگشت به منوی والد با کلید Esc یا کلید جهتنمای چپ. بستن منوی متن با Esc.'
		},

			{
			name: 'جعبه فهرست ویرایشگر',
			legend: 'در داخل جعبه لیست، قلم دوم از اقلام لیست بعدی را با TAB و یا Arrow Down حرکت دهید. انتقال به قلم دوم از اقلام لیست قبلی را با SHIFT + TAB یا UP ARROW. کلید Space یا ENTER را برای انتخاب گزینه لیست بفشارید. کلید ESC را برای بستن جعبه لیست بفشارید.'
		},

			{
			name: 'ویرایشگر عنصر نوار راه',
			legend: 'برای رفتن به مسیر عناصر ${elementsPathFocus} را بفشارید. حرکت به کلید عنصر بعدی با کلید Tab یا کلید جهت‌نمای راست. برگشت به کلید قبلی با Shift+Tab یا کلید جهت‌نمای چپ. فشردن Space یا Enter برای انتخاب یک عنصر در ویرایشگر.'
		}
		]
	},
		{
		name: 'فرمان‌ها',
		items: [
			{
			name: 'بازگشت به آخرین فرمان',
			legend: 'فشردن ${undo}'
		},
			{
			name: 'انجام مجدد فرمان',
			legend: 'فشردن ${redo}'
		},
			{
			name: 'فرمان درشت کردن متن',
			legend: 'فشردن ${bold}'
		},
			{
			name: 'فرمان کج کردن متن',
			legend: 'فشردن ${italic}'
		},
			{
			name: 'فرمان زیرخطدار کردن متن',
			legend: 'فشردن ${underline}'
		},
			{
			name: 'فرمان پیوند دادن',
			legend: 'فشردن ${link}'
		},
			{
			name: 'بستن نوار ابزار فرمان',
			legend: 'فشردن ${toolbarCollapse}'
		},
			{
			name: 'دسترسی به فرمان محل تمرکز قبلی',
			legend: 'فشردن ${accessPreviousSpace} برای دسترسی به نزدیک‌ترین فضای قابل دسترسی تمرکز قبل از هشتک، برای مثال: دو عنصر مجاور HR -خط افقی-. تکرار کلید ترکیبی برای رسیدن به فضاهای تمرکز از راه دور.'
		},
			{
			name: 'دسترسی به فضای دستور بعدی',
			legend: 'برای دسترسی به نزدیک‌ترین فضای تمرکز غیر قابل دسترس، ${accessNextSpace} را پس از علامت هشتک بفشارید، برای مثال:  دو عنصر مجاور HR -خط افقی-. کلید ترکیبی را برای رسیدن به فضای تمرکز تکرار کنید.'
		},
			{
			name: 'راهنمای دسترسی',
			legend: 'فشردن ${a11yHelp}'
		}
		]
	}
	],
	backspace: 'عقبگرد',
	tab: 'برگه',
	enter: 'ورود',
	shift: 'تعویض',
	ctrl: 'کنترل',
	alt: 'دگرساز',
	pause: 'توقف',
	capslock: 'Caps Lock',
	escape: 'گریز',
	pageUp: 'صفحه به بالا',
	pageDown: 'صفحه به پایین',
	end: 'پایان',
	home: 'خانه',
	leftArrow: 'پیکان چپ',
	upArrow: 'پیکان بالا',
	rightArrow: 'پیکان راست',
	downArrow: 'پیکان پایین',
	insert: 'ورود',
	'delete': 'حذف',
	leftWindowKey: 'کلید چپ ویندوز',
	rightWindowKey: 'کلید راست ویندوز',
	selectKey: 'انتخاب کلید',
	numpad0: 'کلید شماره 0',
	numpad1: 'کلید شماره 1',
	numpad2: 'کلید شماره 2',
	numpad3: 'کلید شماره 3',
	numpad4: 'کلید شماره 4',
	numpad5: 'کلید شماره 5',
	numpad6: 'کلید شماره 6',
	numpad7: 'کلید شماره 7',
	numpad8: 'کلید شماره 8',
	numpad9: 'کلید شماره 9',
	multiply: 'ضرب',
	add: 'افزودن',
	subtract: 'تفریق',
	decimalPoint: 'نقطه‌ی اعشار',
	divide: 'جدا کردن',
	f1: 'F1',
	f2: 'F2',
	f3: 'F3',
	f4: 'F4',
	f5: 'F5',
	f6: 'F6',
	f7: 'F7',
	f8: 'F8',
	f9: 'F9',
	f10: 'F10',
	f11: 'F11',
	f12: 'F12',
	numLock: 'Num Lock',
	scrollLock: 'Scroll Lock',
	semiColon: 'Semicolon',
	equalSign: 'علامت تساوی',
	comma: 'کاما',
	dash: 'خط تیره',
	period: 'دوره',
	forwardSlash: 'Forward Slash',
	graveAccent: 'Grave Accent',
	openBracket: 'Open Bracket',
	backSlash: 'Backslash',
	closeBracket: 'Close Bracket',
	singleQuote: 'Single Quote'
} );
