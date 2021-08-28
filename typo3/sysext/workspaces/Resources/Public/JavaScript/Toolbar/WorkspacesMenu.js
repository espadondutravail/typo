/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
var __importDefault=this&&this.__importDefault||function(e){return e&&e.__esModule?e:{default:e}};define(["require","exports","jquery","TYPO3/CMS/Core/Ajax/AjaxRequest","TYPO3/CMS/Backend/ModuleMenu","TYPO3/CMS/Backend/Viewport","TYPO3/CMS/Core/Event/RegularEvent","TYPO3/CMS/Backend/Storage/ModuleStateStorage"],(function(e,t,a,o,r,s,c,n){"use strict";var l,i;a=__importDefault(a),function(e){e.containerSelector="#typo3-cms-workspaces-backend-toolbaritems-workspaceselectortoolbaritem",e.activeMenuItemLinkSelector=".dropdown-menu .selected",e.menuItemSelector=".t3js-workspace-item",e.menuItemLinkSelector=".t3js-workspaces-switchlink",e.toolbarItemSelector=".dropdown-toggle",e.workspaceModuleLinkSelector=".t3js-workspaces-modulelink"}(l||(l={})),function(e){e.workspaceBodyClass="typo3-in-workspace",e.workspacesTitleInToolbarClass="toolbar-item-name"}(i||(i={}));class p{static refreshPageTree(){document.dispatchEvent(new CustomEvent("typo3:pagetree:refresh"))}static updateWorkspaceState(){const e=document.querySelector(l.containerSelector+" .t3js-workspace-item.selected .t3js-workspaces-switchlink");if(null!==e){const t=parseInt(e.dataset.workspaceid,10),a=e.innerText.trim();top.TYPO3.configuration.inWorkspace=0!==t,top.TYPO3.Backend.workspaceTitle=top.TYPO3.configuration.inWorkspace?a:""}}static updateTopBar(e){if(a.default("."+i.workspacesTitleInToolbarClass,l.containerSelector).remove(),e&&e.length){let t=a.default("<span>",{class:i.workspacesTitleInToolbarClass}).text(e);a.default(l.toolbarItemSelector,l.containerSelector).append(t)}}static updateBackendContext(){let e="";p.updateWorkspaceState(),TYPO3.configuration.inWorkspace?(a.default("body").addClass(i.workspaceBodyClass),e=top.TYPO3.Backend.workspaceTitle||TYPO3.lang["Workspaces.workspaceTitle"]):a.default("body").removeClass(i.workspaceBodyClass),p.updateTopBar(e)}constructor(){s.Topbar.Toolbar.registerEvent(()=>{this.initializeEvents(),p.updateBackendContext()}),new c("typo3:datahandler:process",e=>{const t=e.detail.payload;"sys_workspace"===t.table&&"delete"===t.action&&!1===t.hasErrors&&s.Topbar.refresh()}).bindTo(document)}performWorkspaceSwitch(e){a.default(l.activeMenuItemLinkSelector+" i",l.containerSelector).removeClass("fa fa-check").addClass("fa fa-empty-empty"),a.default(l.activeMenuItemLinkSelector,l.containerSelector).removeClass("selected");const t=a.default(l.menuItemLinkSelector+"[data-workspaceid="+e+"]",l.containerSelector).closest(l.menuItemSelector);t.find("i").removeClass("fa fa-empty-empty").addClass("fa fa-check"),t.addClass("selected"),p.updateBackendContext()}initializeEvents(){a.default(l.containerSelector).on("click",l.workspaceModuleLinkSelector,e=>{e.preventDefault(),r.App.showModule(e.currentTarget.dataset.module)}),a.default(l.containerSelector).on("click",l.menuItemLinkSelector,e=>{e.preventDefault(),this.switchWorkspace(parseInt(e.currentTarget.dataset.workspaceid,10))})}switchWorkspace(e){new o(TYPO3.settings.ajaxUrls.workspace_switch).post({workspaceId:e,pageId:n.ModuleStateStorage.current("web").identifier}).then(async t=>{const a=await t.resolve();a.workspaceId||(a.workspaceId=0),this.performWorkspaceSwitch(parseInt(a.workspaceId,10));const o=r.App.getCurrentModule();if(a.pageId){let e=TYPO3.Backend.ContentContainer.getUrl();e+=(e.includes("?")?"&":"?")+"id="+a.pageId,s.ContentContainer.setUrl(e)}else o.startsWith("web_")?"web_WorkspacesWorkspaces"===o?r.App.showModule(o,"workspace="+e):r.App.reloadFrames():TYPO3.configuration.pageModule&&r.App.showModule(TYPO3.configuration.pageModule);p.refreshPageTree(),r.App.refreshMenu()})}}const d=new p;return TYPO3.WorkspacesMenu=d,d}));