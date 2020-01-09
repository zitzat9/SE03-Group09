using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Dichvuquangcaoso
{
    #region News
    public class News
    {
        #region Member Variables
        protected int _news_id;
        protected string _news_sort_content;
        protected string _news_content;
        protected unknown _created_at;
        protected unknown _updated_at;
        protected string _news_type;
        protected string _new_hot;
        protected string _news_name;
        protected string _news_img;
        #endregion
        #region Constructors
        public News() { }
        public News(string news_sort_content, string news_content, unknown created_at, unknown updated_at, string news_type, string new_hot, string news_name, string news_img)
        {
            this._news_sort_content=news_sort_content;
            this._news_content=news_content;
            this._created_at=created_at;
            this._updated_at=updated_at;
            this._news_type=news_type;
            this._new_hot=new_hot;
            this._news_name=news_name;
            this._news_img=news_img;
        }
        #endregion
        #region Public Properties
        public virtual int News_id
        {
            get {return _news_id;}
            set {_news_id=value;}
        }
        public virtual string News_sort_content
        {
            get {return _news_sort_content;}
            set {_news_sort_content=value;}
        }
        public virtual string News_content
        {
            get {return _news_content;}
            set {_news_content=value;}
        }
        public virtual unknown Created_at
        {
            get {return _created_at;}
            set {_created_at=value;}
        }
        public virtual unknown Updated_at
        {
            get {return _updated_at;}
            set {_updated_at=value;}
        }
        public virtual string News_type
        {
            get {return _news_type;}
            set {_news_type=value;}
        }
        public virtual string New_hot
        {
            get {return _new_hot;}
            set {_new_hot=value;}
        }
        public virtual string News_name
        {
            get {return _news_name;}
            set {_news_name=value;}
        }
        public virtual string News_img
        {
            get {return _news_img;}
            set {_news_img=value;}
        }
        #endregion
    }
    #endregion
}