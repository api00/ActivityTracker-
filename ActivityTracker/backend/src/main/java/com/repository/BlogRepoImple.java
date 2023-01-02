package com.repository;

import com.domain.Blog;
import com.domain.TaxUser;
import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.springframework.stereotype.Repository;

import java.util.List;

@Repository
public class BlogRepoImple implements BlogRepo {

    private SessionFactory sessionFactory;

    public BlogRepoImple(SessionFactory sessionFactory) {
        this.sessionFactory = sessionFactory;
    }

    public List<Blog> getAll() {
        Session session = sessionFactory.getCurrentSession();
        Query<Blog> user = session.createQuery("from Blog", Blog.class);
        return user.getResultList();
    }

    public Blog create(Blog blog) {
        Session session = sessionFactory.getCurrentSession();
        session.save(blog);

        return blog;
    }

    public Blog get(int id) {
        Session session = sessionFactory.getCurrentSession();
        return session.get(Blog.class, id);
    }

    public Blog update(Blog blog) {
        Session session = sessionFactory.getCurrentSession();
        session.saveOrUpdate(blog);
        return blog;
    }

    public void delete(int id) {
        Session session = sessionFactory.getCurrentSession();
        Blog blog = get(id);
        if (blog != null) {
            session.delete(blog);
        }
    }
}
