<?php
// Copyright (C) 2010-2015 Combodo SARL
//
//   This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; version 3 of the License.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

/**
 * Localized data
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */

//
// Class: TriggerOnLogUpdate
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:TriggerOnLogUpdate' => 'Trigger (wenn ein Log aktualisiert wird)',
	'Class:TriggerOnLogUpdate+' => 'Trigger auf ein Update eines Logs durch einen Endbenutzer',
	'Class:TriggerOnLogUpdate/Attribute:target_log' => 'Attributname des Logs',
	'Class:TriggerOnLogUpdate/Attribute:target_log+' => 'Bezeichnet das zu berücksictigende log (z.B. public_log)',

	'UI-emry-enable' => 'Sende die antwort per Mail',
	'UI-emry-noattachment' => 'Kein Attachment',
	'UI-emry-caselog-prompt' => 'Geben Sie hier Ihren Text ein',
	'UI-emry-select-attachments' => 'Attachments auswählen...',
	'UI-emry-attachments-to-be-sent' => 'Die folgenden Attachments werden versandt:',
	'UI-emry-select-attachments-tooltip' => 'Klicken Sie, um die zu sendenden Attachments auszuwählen.',
));

